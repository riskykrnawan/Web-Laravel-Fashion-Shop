<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        // mengambil data dari table users
        $users = DB::table('users')->orderByDesc('updated_at')->paginate(12);

        // mengirim data dari table users ke view index
        return view('admin.users.index', [
            'users' => $users,
            'countPendingOrders' => OrderController::pendingOrders(),
        ]);
    }

    public function show(string $id)
    {
        $user = DB::table('users')->where('id', $id)->get()[0];
        return view('admin.users.show',
            [
                'user' => $user,
                'countPendingOrders' => OrderController::pendingOrders(),
            ]
        );
    }

    // edit products
    public function edit(string $id) {
        $user = DB::table('users')->where('id', $id)->first();

        return view('admin.users.update', [
            'user' => $user,
            'countPendingOrders' => OrderController::pendingOrders(),
        ]);
    }

    // update products
    public function update(Request $request) {
        if ($request->new_password || $request->confirm_new_password ) {
            if($request->new_password == $request->confirm_new_password){
                DB::table('users')->where('id', $request->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'address' => $request->address,
                        'password' => Hash::make($request->new_password),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ]);
                    return redirect('/admin/users');
                } else{
                return redirect("/admin/users/edit/$request->id");
            }
        } else {
            DB::table('users')->where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            return redirect('/admin/users');
        }
    }

    public function delete(string $id)
	{
		$item = DB::table('users')->where('id', $id);
        $item->delete();
		return redirect('/admin/users');
	}

    // user setting

    public function userSetting()
    {
        return view('user.setting.index', [
            'user' => Auth::user(),
        ]);
    }

    public function userUpdate(Request $request) {
        if ($request->new_password || $request->confirm_new_password ) {
            if($request->new_password == $request->confirm_new_password){
                DB::table('users')->where('id', $request->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'address' => $request->address,
                        'password' => Hash::make($request->new_password),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ]);
                    return redirect('/profile');
                } else{
                return redirect("/edit/$request->id");
            }
        } else {
            DB::table('users')->where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            return redirect('/profile');
        }
    }

    public function userProfile() {
    
        // mengambil data dari table items
        $items = DB::table('items')->orderByDesc('updated_at')->paginate(10);
        return view('user.profile.index', [
            'items' => $items,
        ]);
    }
}
