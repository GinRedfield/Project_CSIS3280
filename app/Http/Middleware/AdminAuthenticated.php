<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticated
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
        if( Auth::check() )
        {
            // User user
            /** @var User $user */
            $user = Auth::user();

            // check role and redirect
            if ( $user->hasRole('user') ) {
                return redirect(route('dashboard'));
            }
            else if ( $user->hasRole('admin') ) {
                return $next($request);
            }
        }

        abort(403); 
    }
}
