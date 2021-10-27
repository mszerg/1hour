<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function __invoke()
        {
            // TODO: Implement __invoke() method.
            return view('admin.marketingdogovor.create');
            dd(111111);
        }
}
