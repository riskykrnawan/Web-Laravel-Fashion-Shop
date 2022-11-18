<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $usernameExist = DB::table('users')->where('username', $request->username)->first();
        $emailExist = DB::table('users')->where('email', $request->email)->first();
        if ($usernameExist) {
            session()->flash('error', 'Username telah digunakan, gunakan username lain!');
            return redirect('/');
        }
        if ($emailExist) {
            session()->flash('error', 'Email telah digunakan, gunakan email lain!');
            return redirect('/');
        }
        if($request->password == $request->confirm_password){
            User::create([
            'photo' => '/storage/images/person-dummy.jpg',
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'address' => '-',
            'password' => Hash::make($request->password),
            'role' => 'customer'
        ]);
            session()->flash('success', 'Berhasil Membuat Akun!');
            return redirect('/');
        } else{
            session()->flash('error', 'Konfirmasi password anda berbeda!');
            return redirect('/');
        }
    }

    public function login(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($data)) {
            return redirect('/admin/orders');
        }
        else {
            session()->flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        session()->flash('success', 'Berhasil Logout');
        return redirect('/');
    }
}
