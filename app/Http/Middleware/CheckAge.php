<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckAge
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
		if(isset($request->age)){
		
		
		$user=new User();
		$user->clave=$request->clave;
		$user->correo=$request->correo;
		$user->cedula=$request->cedula;
		
		$request->session()->flash('status', $user);
		
			return redirect()->route('users.menor.create');
		
		}else{

			return $next($request);
			
		}
		
	}
}
