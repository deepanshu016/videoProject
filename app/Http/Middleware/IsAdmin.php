<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Backend\AuthController as Auth;
use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if(empty(Auth::user()))
        {
            if($request->wantsJson())
            {
                return response()->json(['Message','Please Login First to access this URL'],403);
            }
            return redirect('/login')->with('error','Please Login First');
        }
        return $next($request);
    }
}
