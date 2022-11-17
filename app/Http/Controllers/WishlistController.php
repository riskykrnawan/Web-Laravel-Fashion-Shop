<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index() {
        $wishlists = Wishlist::with(['Item', 'User'])->where('user_id', Auth::user()->id)
        ->get();
        // $carts = DB::table('carts')
        //     ->where('user_id', Auth::user()->id)
        //     ->get();
        // $subtotal = 0;
        // foreach ($wishlists as $wl) {
        //     $subtotal += $wl->item->price * $wl->quantity;
        // }
        // return view('user.wishlist.index', [
        //     'carts' => $wishlists,
        //     'subtotal' => $subtotal,
        // ]);

        return view('user.wishlist.index', [
            'wishlists' => $wishlists,
            'countPendingOrders' => OrderController::pendingOrders(),
        ]);
    }
    public function addToWishlist(Request $request) {
        // $itemExist = DB::table('wishlists')
        DB::table('wishlists')
            ->where('user_id', Auth::user()->id)
            ->where('item_id', $request->item_id)
            ->get();
            // var_dump(sizeof($itemExist));
            // exit;
        // if (sizeof($itemExist)) {
        //     $count = $itemExist[0]->quantity + (int)$request->quantity;
        //     DB::table('carts')->where('id', $itemExist[0]->id)->update([
        //         'quantity' => $count,
        //     ]);
        //     return redirect("/products/show/$request->item_id");
        // }
        DB::table('wishlists')->insert([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'item_id' => $request->item_id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return redirect("/products/show/$request->item_id");
    }
    // public function updateCart(Request $request) {
    //     $item = DB::table('carts')
    //     ->where('user_id', Auth::user()->id)
    //     ->where('item_id', $request->item_id)
    //     ->get();
    //     $count = (int)$request->quantity;
    //     if(!isset($request->minus) && !isset($request->plus)) {
    //         $count += 1;
    //     }
    //     if (sizeof($item)) {
    //         DB::table('carts')->where('id', $item[0]->id)->update([
    //             'quantity' => $count,
    //         ]);
    //         return redirect("/cart");
    //     }
    //     return redirect("/cart");
    // }

    public function delete(string $id)
	{
		$item = DB::table('wishlist')->where('id', $id);
        $item->delete();
		return redirect('/wishlist');
	}

    public function destroy($id)
    {
        $item = Wishlist::findOrFail($id);
        $item->delete();
        return redirect('/wishlist')->with('success', 'remove from your wishlist');
    }
    
    // public function checkout() {
    //     $items = DB::table('carts')
    //     ->where('user_id', Auth::user()->id)
    //     ->get();

    //     foreach ($items as $item) {
    //         DB::table('orders')->insert([
    //             'item_id' => $item->item_id,
    //             'user_id' => $item->user_id,
    //             'quantity' => $item->quantity,
    //             'status' => 'pending',
    //             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    //             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    //         ]);
    //         DB::table('carts')->where('id', $item->id)->delete();
    //     }

    //     return redirect("/cart");
    // }
}
