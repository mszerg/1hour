<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Models\MarketingType;


class EditController extends Controller
{
    //
    public function __invoke(MarketingDogovor $marketingdogovor)
        {
            // TODO: Implement __invoke() method.
            return view('admin.marketingdogovor.edit', compact('marketingdogovor'));
            //dd(111111);
        }
}
