<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Penyewa;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HapusPenyewaDitolak
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Penyewa::where('status', 'Ditolak')
            ->where('updated_at', '<', now()->subDay())
            ->delete();

        return $next($request);
    }
}
