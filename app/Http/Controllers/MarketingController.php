<?php

namespace App\Http\Controllers;

use App\Models\MarketingDogovor;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    //
    public function review() {

        $reviews = new MarketingDogovor();
        //dd($reviews->all());
        return view('/marketing/dogovors',['reviews'=>$reviews->all()]);
    }


    public function newdogovor (Request $request) {

    }
}
