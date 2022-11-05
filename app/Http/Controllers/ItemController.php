<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    public function index()
    {
    //     $client = new Client();
    //     $url = "http://localhost:8000/api/admin/products";
    //     $response = $client->request('GET', $url, [
    //         'verify'  => false,
    //     ]);
    //     echo $response;

        // return $response;

        // return view('home', [
        //     'route' => Request::route()->getName(),
        //     'title' => 'NIKKY',
        //     'items' => $response,
        //     'banners' => Banner::all(),
        // ]);
        $items = DB::table('items')->orderByDesc('updated_at')->paginate(10);
        return view('admin.products.index', [
            'id' => 'Sebuah Id Akun',
            'items' => $items,
            'name' => 'Sebuah nama',
        ]);
    }

    public function show(string $id)
    {
        $items = DB::table('items')->get();
        return view('admin.products.show',
            [
                'id' => $id,
                'items' => $items
            ]
        );
    }

    public function create() {
        return view('admin.products.create');
    }
    
    public function store(Request $request) {
        $image = $request->photo;
        $image->storePubliclyAs('images', $image->getClientOriginalName(), 'public');
        DB::table('items')->insert([
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

        return redirect('/admin/products');
    }

    // delete products
    public function delete(string $id)
	{
		$item = DB::table('items')->where('id', $id);

        // delete photo
        // $itemFetch = $item->first();
        // File::delete($itemFetch->photo);
        $item->delete();
		return redirect('/admin/products');
	}

    // edit products
    public function edit(string $id) {
        $item = DB::table('items')->where('id', $id)->first();

        return view('admin.products.update', [
            'item' => $item
        ]);
    }

    // update products
    public function update(Request $request) {
        $oldImage = $request->photo;
        $newImage = $request->newPhoto;
        $imgUrl = $oldImage;
        if ($newImage != NULL) {
            $newImage->storePubliclyAs('images', $newImage->getClientOriginalName(), 'public');
            $imgUrl = "/storage/images/{$newImage->getClientOriginalName()}";
        } else {
            $newImage == $oldImage;
        }

        DB::table('items')->where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'photo' => $imgUrl,
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return redirect('/admin/products');
    }
}