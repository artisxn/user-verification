<?php
/**
 * This file is part of codicastudio\UserVerification package.
 *
 * (c) Jean Ragouin <go@askjong.com> <www.askjong.com>
 */
namespace codicastudio\UserVerification\Middleware;

use Closure;
use codicastudio\UserVerification\Exceptions\UserNotVerifiedException;

class IsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws codicastudio\UserVerification\Exceptions\UserNotVerifiedException
     */
    public function handle($request, Closure $next)
    {
        if(! is_null($request->user()) && ! $request->user()->verified) {
            throw new UserNotVerifiedException;
        }

        return $next($request);
    }
}
