<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRole
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
        $roles = $this->CekRoute($request->route());
        if($request->user()->hasRole($roles) || !$roles){
            return $next($request);
        }
        return abort(503, 'Anda tidak memiliki akses');
    }

    private function CekRoute($route)
    {
        $action = $route->getAction();
        return isset($action['roles']) ?$action['roles'] : null;
    }
}
