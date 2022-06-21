<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $data=[
            ['name'=>'taro','mail'=>'taro@yamada'],
            ['name'=>'hanako','mail'=>'hanako@flower'],
            ['name'=>'sachiko','mail'=>'sachi@happy'],
    
        ];
        //mergeは　フォームの送信などで　送られる値に　新たな値を　追加するもの
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
