<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Models\MarketingDogovor;

class IndexController extends Controller
{
    //
    public function __invoke()
        {
            $marketingdogovors= MarketingDogovor::all();
            return view('front.marketingdogovor.index',compact('marketingdogovors'));
            //dd(111111);
        }
}
