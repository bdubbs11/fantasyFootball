<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   // this is where i would add other ppl to be able to view the admin account
        if(auth()->user()?->email != 'brandonadmin@gmail.com'){
            //abort(Response::HTTP_FORBIDDEN);
            session()->flash('success', 'You must be an admin to access this page');

            return redirect('/');
        }
        return $next($request);
    }
}