<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    $chucVu = $request->session()->get('userInfo.vai_tro');

    if ($chucVu === null || $chucVu < 1) {
        abort(403, 'Bạn không có quyền truy cập.');
    }

    return $next($request);
}
}
