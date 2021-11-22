<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Models\MarketingDogovor;
use App\Models\MarketingDogovorPodch;


class EditController extends Controller
{
    //
    public function __invoke(MarketingDogovor $marketingdogovor)
        {
            // TODO: Implement __invoke() method.
            //dd(dogovor_podch);
            $marketing_dogovor_podches=MarketingDogovorPodch::dogovor_podch()->where('id_marketing_dogovors', '=', $marketingdogovor->id)->get();
            //$marketing_dogovor_podches->dogovor_podch();
            dd($marketing_dogovor_podches);
            /*if (!is_array($marketing_dogovor_podches)) {
                $marketing_dogovor_podches=array(['id'=>1,'TypeMarketing'=>null,'Percent'=>null,'SumMarketing'=>null,'Brand'=>null,'FioManager'=>null]);
            }*/
            //dd($marketing_dogovor_podches->id);
            //dd($marketing_dogovor_podches);
            return view('front.marketingdogovor.edit', compact('marketingdogovor','marketing_dogovor_podches'));
            //dd(111111);
        }
}
