<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\MarketingDogovor;
use App\Models\MarketingDogovorPodch;
use App\Models\MarketingType;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class EditController extends Controller
{
    //
    public function __invoke(MarketingDogovor $marketingdogovor)
        {
            // TODO: Implement __invoke() method.
            //dd(dogovor_podch);
            //$marketing_dogovor_podches=MarketingDogovorPodch::dogovor_podch()->where('id_marketing_dogovors', '=', $marketingdogovor->id)->get();
            //$dogovor = MarketingDogovor::find($marketingdogovor->id);
            //$marketing_dogovor_podches=$dogovor->usloviya; //usloviya - метод в модели
            //$podches=MarketingDogovorPodch::where('marketing_dogovors_id', '=', $marketingdogovor->id)->jo;
            //$podches=MarketingDogovorPodch::find(1);
            //$podches = MarketingDogovorPodch::usloviya($marketingdogovor->id);
            //$podches = new MarketingDogovorPodch();
            //$podches->allusloviya();

            $marketing_dogovor_podches = DB::select('select marketing_dogovor_podches.*,marketing_types.TypeMarketing,managers.name from marketing_dogovor_podches
                                                            left join marketing_types on marketing_types.id=marketing_dogovor_podches.marketing_types_id
                                                            left join managers on managers.id=marketing_dogovor_podches.managers_id
                                                            where marketing_dogovors_id = ?', [$marketingdogovor->id]);
            //$marketing_dogovor_podches=$podches->usloviya;
            //$marketing_dogovor_podches=MarketingDogovorPodch::where('marketing_dogovors_id', '=', $marketingdogovor->id)->get();
            //dd($marketing_dogovor_podches);
            /*if (!is_array($marketing_dogovor_podches)) {
                $marketing_dogovor_podches=array(['id'=>1,'TypeMarketing'=>null,'Percent'=>null,'SumMarketing'=>null,'Brand'=>null,'FioManager'=>null]);
            }*/
            //dd($marketing_dogovor_podches->id);
            //dd($marketing_dogovor_podches);
            //return view('front.marketingdogovor.edit', compact('marketingdogovor','marketing_dogovor_podches'));
            return view('front.marketingdogovor.edit')->with([
                'marketingdogovor'=>$marketingdogovor,
                'marketing_dogovor_podches'=>$marketing_dogovor_podches,
                'managers'=>Manager::all(),
                'marketingtypes'=>MarketingType::all(),
                'posts'=>Post::all()
            ]);
            //dd(111111);
        }
}
