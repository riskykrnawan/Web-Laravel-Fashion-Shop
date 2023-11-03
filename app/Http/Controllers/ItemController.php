<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index(string $page)
    {
        $items = DB::table('items')->paginate(10);
        // return $items[0]->id;
        // example using API (add BASE_ENV=localhost:8001)
        // $endpoint = env('BASE_ENV') . '/api/admin/products?page=' . $page;
        // $client = new Client();

        // $response = $client->request('GET', $endpoint);
        // $items = json_decode($response->getBody(), true);

        return view('admin.products.index', [
            'items' => $items,
            'countPendingOrders' => OrderController::pendingOrders(),
        ]);
    }

    public function show(string $id)
    {
        $items = DB::table('items')->get();
        return view('admin.products.show',
            [
                'id' => $id,
                'items' => $items,
                'countPendingOrders' => OrderController::pendingOrders(),
            ]
        );
    }
    public function detail(string $id)
    {
        $item = DB::table('items')->where('id', $id)->first();
        return view('details',
            [
                'id' => $id,
                'item' => $item,
            ]
        );
    }

    public function create() {
        return view('admin.products.create', 
        [
            'countPendingOrders' => OrderController::pendingOrders(),
        ]
        );
    }
    
    public function store(Request $request) {
        $date = Carbon::now()->format('Ymd_His');
        $image = $request->photo;
        $extension = $image->getClientOriginalExtension();
        $newName = "IMG_$date.$extension";
        $image->storePubliclyAs('images/products', $newName, 'public');

        // $image->storePubliclyAs('images/products', $image->getClientOriginalName(), 'public');
        DB::table('items')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'rating' => '0',
            'stock' => $request->stock,
            'price' => $request->price,
            'sold' => '0',
            'reviewer' => '0',
            'photo' => "/storage/images/products/{$newName}",
            'category' => $request->category,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return redirect('/admin/products/page/1');
    }

    // delete products
    public function delete(string $id)
	{
        $item = DB::table('items')->where('id', $id);
        // $filename =  substr($item->first()->photo, 1);
        // echo base_path($filename);
        // exit;
        // delete photo
        // Storage::delete(base_path('app/public' . $filename));
        $item->delete();
		return redirect('/admin/products/page/1');
	}

    // edit products
    public function edit(string $id) {
        $item = DB::table('items')->where('id', $id)->first();

        return view('admin.products.update', [
            'item' => $item,
            'countPendingOrders' => OrderController::pendingOrders(),
        ]);
    }

    // update products
    public function update(Request $request) {
        $oldImage = $request->photo;
        $newImage = $request->newPhoto;
        $imgUrl = $oldImage;
        if ($newImage != NULL) {
            
            $date = Carbon::now()->format('Ymd_His');
            
            $extension = $newImage->getClientOriginalExtension();
            $newName = "IMG_$date.$extension";
            $newImage->storePubliclyAs('images/products', $newName, 'public');
            $imgUrl = "/storage/images/products/{$newName}";
        }
        DB::table('items')->where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'category' => $request->category,
            'price' => $request->price,
            'photo' => $imgUrl,
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return redirect('/admin/products/page/1');
    }
}