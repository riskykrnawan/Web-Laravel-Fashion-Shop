<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Authorization
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // var_dump($roles[0]);
        // exit;
        foreach ($roles as $role) { 
            $user = Auth::user()->role ?? 0;
            if( $user == $role){
                return $next($request);
            }
        }
        
        if( $user == 'admin'){
            return redirect('/admin');
        }else if($user == 'customer'){
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}