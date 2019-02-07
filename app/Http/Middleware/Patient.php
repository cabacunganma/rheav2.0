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


class Patient
{
    public function handle($request, Closure $next)
    {

        if (!Auth::user() || !session()->exists('user')) {
            // user value cannot be found in session
            alert()->warning('Oops!', 'You are not allowed to access this page.');
            return redirect('/index');

        }elseif((session('role')) && session('role') != 3){
            return redirect('/index');
        }

        return $next($request);
    }

}