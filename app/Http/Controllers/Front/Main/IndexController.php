<?php

namespace App\Http\Controllers\Front\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
        {
            // TODO: Implement __invoke() method.
            return view('front.main.index');
        }
}
