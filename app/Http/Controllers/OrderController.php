<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public static function pendingOrders() {
        $pendingOrders = DB::table('orders')->where('status', 'pending')->get();
        return count($pendingOrders);
    }
    public function index()
    {
        // mengambil data dari table orders
        $orders = Order::with(['Item', 'User'])->paginate(20);
        $pendingOrders = DB::table('orders')->where('status', 'pending')->get();
        return view('admin.orders.index', [
            'orders' => $orders,
            'pendingOrders' => OrderController::pendingOrders(),
        ]);
    }

    public function changeStatus(Request $request, string $id) {
        DB::table('orders')->where('id', $id)->update([
            'status' => $request->status,
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return redirect('/admin/orders');
    }
}
