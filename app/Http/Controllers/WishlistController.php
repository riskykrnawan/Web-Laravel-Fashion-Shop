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
        $wishlists = Wishlist::with(['Item', 'User'])
        ->where('user_id', Auth::user()->id)
        ->get();
        // var_dump();
        // exit;
        return view('user.wishlist.index', [
            'wishlists' => $wishlists,
            'countPendingOrders' => OrderController::pendingOrders(),
        ]);
    }
    public function addToWishlist(Request $request) {
        DB::table('wishlists')->insert([
            'id' => $request->id,
            'user_id' => Auth::user()->id,
            'item_id' => $request->item_id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return redirect("/products/show/$request->item_id");
    }
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
}