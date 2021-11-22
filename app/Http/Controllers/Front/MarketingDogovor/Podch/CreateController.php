<?php

namespace App\Http\Controllers\Front\MarketingDogovor\Podch;

use App\Http\Controllers\Controller;
use App\Models\MarketingDogovor;
use App\Models\MarketingDogovorPodch;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function __invoke(MarketingDogovor $marketingdogovor)
        {
            // TODO: Implement __invoke() method.
            //dd('222222222');
            $marketing_dogovor_podches=MarketingDogovorPodch::where('id_marketing_dogovors', '=', $marketingdogovor->id)->get();
            $marketingtypes = MarketingType::all();
            //$posts = Post::all();
            //dd($marketing_dogovor_podches);
            return view('front.marketingdogovor.podch.create',compact('marketing_dogovor_podches','marketingdogovor','marketingtypes'));
            //dd(111111);
        }
}
