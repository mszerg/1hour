<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Models\MarketingDogovor;
use App\Models\MarketingDogovorPodch;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function __invoke()
        {
            $marketingdogovors= MarketingDogovor::all();
            //$MarketingDogovorPodches = MarketingDogovorPodch::all();
            $MarketingDogovorPodches = DB::select('select marketing_dogovor_podches.*,marketing_types.TypeMarketing from marketing_dogovor_podches
                                                            left join marketing_types on marketing_types.id=marketing_dogovor_podches.marketing_types_id');
            $MarketingDogovorPodches=collect($MarketingDogovorPodches);
            return view('front.marketingdogovor.index',compact('marketingdogovors','MarketingDogovorPodches'));
            //dd(111111);
        }
}
