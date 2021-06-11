<?php

namespace App\Http\Middleware;

use Closure;

class cartCheck
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
        if (\Cart::isEmpty()) {
            return redirect('/products')
                ->with(['icon' => 'warning', 'title' => '結帳失敗', 'text' => '請選擇商品後結帳!!']);
        };
        return $next($request);
    }
}
