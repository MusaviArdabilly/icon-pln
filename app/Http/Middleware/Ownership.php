<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Idea;

class Ownership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ideaId = $request->route('id');
        $idea = Idea::find($ideaId);

        if (!$idea || $idea->user_id !== auth()->id()) {
            abort(403, 'Ini bukan milik anda');
        }

        return $next($request);
    }
}
