<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 16/8/30
 * Time: 下午10:34
 */
namespace App\Http\Middleware;

use Closure;

class ActiveUser
{
    public function handle($request, Closure $next)
    {
        if ($request->user()->active === 0) {
            return redirect("/active/page");
        }
        return $next($request);
    }
}