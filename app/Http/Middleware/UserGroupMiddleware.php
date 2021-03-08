<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserGroupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if($user->Kod_Capaian <> '04')
        {
          return $next($request);
        }

        return redirect()->to('welcome');
    }
}
