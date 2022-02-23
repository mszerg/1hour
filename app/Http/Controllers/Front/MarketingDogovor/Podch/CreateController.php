<?php

namespace App\Http\Controllers\Front\MarketingDogovor\Podch;

use App\Http\Controllers\Controller;
use App\Models\Manager;
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
            $marketing_dogovor_podches=MarketingDogovorPodch::where('marketing_dogovors_id', '=', $marketingdogovor->id)->get();
            $marketingtypes = MarketingType::all();
            //$posts = Post::all();
            //dd($marketing_dogovor_podches);
            //return view('front.marketingdogovor.podch.create',compact('marketing_dogovor_podches','marketingdogovor','marketingtypes'));
            return view('front.marketingdogovor.podch.create')->with([
                'marketing_dogovor_podches'=>$marketing_dogovor_podches,
                'marketingdogovor'=>$marketingdogovor,
                'marketingtypes'=>$marketingtypes,
                'managers'=>Manager::all(),
            ]);
            //dd(111111);

        }
}
