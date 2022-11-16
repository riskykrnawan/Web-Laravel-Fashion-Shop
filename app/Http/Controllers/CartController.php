<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request) {
        $itemExist = DB::table('carts')
            ->where('user_id', '=' ,$request->user_id)
            ->where('item_id', '=' ,$request->item_id)
            ->first('quantity');
            // var_dump($count);
            if ($itemExist) {
            $count = $itemExist->quantity + (int)$request->quantity;
            DB::table('carts')->update([
                'quantity' => $count,
            ]);

            return redirect("/products/show/$request->item_id");
        }
        DB::table('carts')->insert([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return redirect("/products/show/$request->item_id");
    }
}
