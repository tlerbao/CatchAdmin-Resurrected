<?php
declare(strict_types=1);

namespace catcher\middlewares;

use think\Middleware;
use think\Request;

class DemoMiddleware extends Middleware
{
    public function handle(Request $request, \Closure $next)
    {
        // 获取当前请求的 URI
        $uri = $request->pathinfo();

        // 判断是否为需要忽略的接口
        if ($uri === 'login' || $uri === 'logout') {
            return $next($request);
        }

        if ($request->isPost() || $request->isPut() || $request->isDelete()) {
            return response('您无权操作演示数据!', 403);
        }
        return $next($request);
    }
}
