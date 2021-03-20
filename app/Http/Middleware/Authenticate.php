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

        if (! $request->expectsJson()) {

            // guarda o caminho para ser redirecionado na autenticação
            if(!$request->routeIs('login') && $request->is('admin/*')) {
                $request->session(['arrive_from' => $request->path()]);
            }

            return route('login');
        }
    }
}
