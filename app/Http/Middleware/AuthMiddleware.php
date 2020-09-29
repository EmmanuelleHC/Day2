<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AuthMiddleware
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
        $roles = $this->CekRoute($request->route());
        
        if($request->user()->hasRole($roles) || !$roles)
        {
            return $next($request);
        }
        return abort(403);

        
    }

    private function CekRoute($route)
    {
        $actions = $route->getAction();
        return isset($actions['roles']) ? $actions['roles'] : null;
    }
}
