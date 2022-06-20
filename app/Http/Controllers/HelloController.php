<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  
public function index(Request $request,Response $response)
{
    $html=<<<eof
    <pre>$request</pre>
    <br><br><br>
    <pre>$response</pre>
    <p></p>
    eof;

    return $html;

}
}
