<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ItemController2 extends Controller
{
    public function index()
    {
        $items = DB::table('items')->orderByDesc('updated_at')->paginate(10);
        return view('user.cart.index', [
            'items' => $items,
            'pendingOrders' => OrderController::pendingOrders(),
        ]);
    }

    public function show(string $id)
    {
        $items = DB::table('items')->get();
        return view('user.cart.show',
            [
                'id' => $id,
                'items' => $items,
                'pendingOrders' => OrderController::pendingOrders(),
            ]
        );
    }

    public function create() {
        return view(
            'admin.products.create',
            [
                'pendingOrders' => OrderController::pendingOrders(),
            ]
        );
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
            'item' => $item,
            'pendingOrders' => OrderController::pendingOrders(),
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