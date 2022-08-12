<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckRegistered
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
	//	$curso=new Curso()::where('correo','{{$request->correo}}')->get();
		
		$user =User::where('correo',$request->correo)->first();
		
		//Verifico si existe una persona con ese correo
		if(!$user==null){
		
		
			if($user->admin==1){
				return redirect()->route('admins.index');
			}
			else{
				return redirect()->route('users.index',compact('user'));
			}
		
		}
		else{
			return redirect()->route('welcome');
		}
		
		
		
		
       
    }
}
