<?php

namespace App\Http\Controllers;


use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public static function addToWishlist() {
        DB::table('wishlists')->insert([
            'id' => $request->id,
            'item_id' => $request->item_id,
            'user_id' => $request->user_id
        ]);
    }
}
