<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

    public function create()
    {
        return view('admin.users.create',
            [
                'countPendingOrders' => OrderController::pendingOrders(),
            ]
        );
    }

    public function store(Request $request) {
        $usernameExist = DB::table('users')->where('username', $request->username)->first();
        $emailExist = DB::table('users')->where('email', $request->email)->first();
        if ($usernameExist) {
            session()->flash('error', 'Username telah digunakan, gunakan username lain!');
            return redirect('/admin/users');
        }
        if ($emailExist) {
            session()->flash('error', 'Email telah digunakan, gunakan email lain!');
            return redirect('/admin/users');
        }
        
        if($request->password == $request->confirm_password){
            User::create([
            'photo' => $request->photo,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'address' => '-',
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
            session()->flash('success', 'Berhasil Membuat Akun!');
            return redirect('/admin/users');
        } else{
            session()->flash('error', 'Konfirmasi password anda berbeda!');
            return redirect('/admin/users');
        }
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
        $oldImage = $request->photo;
        $newImage = $request->newPhoto;
        $imgUrl = $oldImage;
        if ($newImage != NULL) {
            
            $date = Carbon::now()->format('Ymd_His');
            
            $extension = $newImage->getClientOriginalExtension();
            $newName = "IMG_$date.$extension";
            $newImage->storePubliclyAs('images/users', $newName, 'public');
            $imgUrl = "/storage/images/users/{$newName}";
        }
        
        // echo $imgUrl;
        // exit;
        if ($request->new_password || $request->confirm_new_password ) {
            if($request->new_password == $request->confirm_new_password){
                DB::table('users')->where('id', $request->id)->update([
                        'name' => $request->name,
                        'photo' => $imgUrl,
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
                'photo' => $imgUrl,
                'email' => $request->email,
                'address' => $request->address,
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
        $oldImage = $request->photo;
        $newImage = $request->newPhoto;
        $imgUrl = $oldImage;
        if ($newImage != NULL) {
            
            $date = Carbon::now()->format('Ymd_His');
            
            $extension = $newImage->getClientOriginalExtension();
            $newName = "IMG_$date.$extension";
            $newImage->storePubliclyAs('images/users', $newName, 'public');
            $imgUrl = "/storage/images/users/{$newName}";
        }

        if ($request->new_password || $request->confirm_new_password ) {
            if($request->new_password == $request->confirm_new_password){
                DB::table('users')->where('id', $request->id)->update([
                        'name' => $request->name,
                        'photo' => $imgUrl,
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
                'photo' => $imgUrl,
                'email' => $request->email,
                'address' => $request->address,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            return redirect('/profile');
        }
    }

    public function userProfile() {
        // mengambil data dari table orders
        $orders = Order::with(['Item', 'User'])
        ->where('user_id', Auth::user()->id)->paginate(12);
        $pendingOrders = DB::table('orders')->where('status', 'pending')->get();
        return view('user.profile.index', [
            'orders' => $orders,
            'pendingOrders' => $pendingOrders
        ]);
    }
}
