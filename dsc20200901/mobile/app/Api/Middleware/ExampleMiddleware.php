<?php
//大商创开源码版本2.5.3
namespace App\Api\Middleware;

class ExampleMiddleware
{
	public function handle($request, \Closure $next)
	{
		return $next($request);
	}
}


?>