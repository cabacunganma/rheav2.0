<?php
/**
 * Created by PhpStorm.
 * User: Rae Jillian
 * Date: 2/5/2019
 * Time: 9:34 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Doctor
{
    public function handle($request, Closure $next)
    {
        if (Auth::guest()) {
            return redirect('/login');
        } else {
            if (Auth::user()->role_id != 2) {
                // user value cannot be found in session
                return redirect('/index');

            }
        }

        return $next($request);
    }


}