<?php

namespace App\Modules\Admin\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Kiểm tra session 2fa_verified
        // Thực hiện redirect tới màn hình nhập Authentication code
        if (Auth::check() == null) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
