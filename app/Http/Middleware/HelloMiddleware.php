<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
   public function handle($request, Closure $next)
   {
       //コントローラーの処理の結果が入っている
       $response = $next($request);

       //htmlのソースコードが入っている
       $content = $response->content() . 'aiueo';

       $response->setContent($content);
       return $response;
   }
}
