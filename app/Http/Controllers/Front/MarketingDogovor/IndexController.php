<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
        {
            $marketingdogovor= MarketingType::all();
            return view('admin.marketingdogovor.index',compact('marketingdogovor'));
            //dd(111111);
        }
}
