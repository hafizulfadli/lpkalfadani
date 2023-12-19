<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $date = now()->format('Y-m-d');
        $visitorLog = Visitor::firstOrNew(['tanggal' => $date]);
        $visitorLog->count++;
        $visitorLog->save();

        return $next($request);
    }
}
