<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Closure; use Session; use Carbon\Carbon;

class __Session
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
        $t_session = Session::get('user_id');
        
        // check if there are sessions
        if( !isset( $t_session ) ) { return redirect()->to('/login'); }

        return $next($request);
    }
}