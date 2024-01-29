<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            // Add an error message to $errors
            $request->session()->flash('errors', collect(['Unauthorized' => ['Anda Harus Login Terlebih Dahulu']]));
        }

        return $request->expectsJson() ? null : url('/login');
    }
}
