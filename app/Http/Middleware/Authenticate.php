<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $routeName = $request->route()->getName();

        if(strpos($routeName, 'panel.') === 0) {
           return route('panel.login-page');
        }

        if (! $request->expectsJson()) {
            return route('site.login-page');
        }
    }
}
