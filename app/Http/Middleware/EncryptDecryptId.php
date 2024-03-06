<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Hashids\Hashids;

class EncryptDecryptId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route('id')) {
            try {
                $hashids = new Hashids('', 10); //pad to length 10
                $decryptedId = $hashids->decode($request->route('id'));
                
                $request->route()->setParameter('id', $decryptedId);
            } catch (\Exception $e) {
                abort(404, 'Ide atau Inovasi tidak ditemukan');
            }
        }

        return $next($request);
    }
}
