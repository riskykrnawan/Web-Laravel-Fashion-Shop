<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index() {
        return view('user.cart.index');
    }
    public function addToCart(Request $request) {
        $itemExist = DB::table('carts')
            ->where('user_id', Auth::user()->id)
            ->where('item_id', $request->item_id)
            ->get();
            // var_dump(sizeof($itemExist));
            // exit;
        if (sizeof($itemExist)) {
            $count = $itemExist[0]->quantity + (int)$request->quantity;
            DB::table('carts')->where('id', $itemExist[0]->id)->update([
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
