<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        if($request->password == $request->confirm_password){
            User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
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
            return redirect('/admin/products');
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
