<?php

namespace App\Http\Middleware;

use Closure;

class UserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //dd($request);
      if ($request->status == 'Inactivo') {
        dd($request);
        return redirect('inactive');
      }

      return $next($request);
    }
}
