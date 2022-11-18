<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getItems()
    {
        // mengambil data dari table items
        $items = DB::table('items')->paginate(10);

        $response = [
            'status' => 'success',
            'msg' => 'Berhasil mengambil data dari tabel items',
            'data' => $items,
        ];

        return response()->json($response);
    }

    public function getItemById($id) {
        $item = DB::table('items')->where('id', $id)->first();

        $response = [
            'status' => 'success',
            'msg' => 'Berhasil mengambil data dari tabel items',
            'data' => $item,
        ];

        return response()->json($response);
    }

    public function create(Request $request) {
        $image = $request->photo;
        $image->storePubliclyAs('images', $image->getClientOriginalName(), 'public');
        
        $item = DB::table('items')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'rating' => '0',
            'stock' => $request->stock,
            'price' => $request->price,
            'sold' => '0',
            'photo' => "/storage/images/{$image->getClientOriginalName()}",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $response = [
            'status' => 'success',
            'msg' => 'Berhasil mengambil data dari tabel items',
            'data' => $item, 
        ];

        return response()->json($response);
    }
}
