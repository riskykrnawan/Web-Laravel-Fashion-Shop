<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        // mengambil data dari table orders
        // $orders = DB::table('orders')->orderByDesc('updated_at')->paginate(10);
        $orders = Order::with(['Item', 'User'])->paginate(20);

        // mengirim data dari table orders ke view index
        return view('admin.orders.index', [
            'id' => 'Sebuah Id Akun',
            'orders' => $orders,
            'name' => 'Sebuah nama',
        ]);
    }

}
