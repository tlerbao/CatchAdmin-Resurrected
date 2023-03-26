<?php
declare(strict_types=1);

namespace catcher\middlewares;

use think\Middleware;
use think\Request;

class DemoMiddleware extends Middleware
{
    public function handle(Request $request, \Closure $next)
    {
        if ($request->isPost() || $request->isPut() || $request->isDelete()) {
            return response('您无权操作演示数据!', 403);
        }
        return $next($request);
    }
}
