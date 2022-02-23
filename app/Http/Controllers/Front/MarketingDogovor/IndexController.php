<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Filters\MarketingDogovorFilter;
use App\Http\Controllers\Controller;
use App\Models\MarketingDogovor;
use App\Models\MarketingDogovorPodch;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function __invoke(MarketingDogovorFilter $filter)
        {
            //dd($filter);
            $marketingdogovors= MarketingDogovor::with(['post'])
                ->leftJoin('POST','Name_post','=','PostNo')
                ->filter($filter)->orderby('id', 'desc')->get();
            //dd($marketingdogovors);
            //$MarketingDogovorPodches = MarketingDogovorPodch::all();
            $MarketingDogovorPodches = DB::select('select marketing_dogovor_podches.*,marketing_types.TypeMarketing,managers.name from marketing_dogovor_podches
                                                            left join marketing_types on marketing_types.id=marketing_dogovor_podches.marketing_types_id
                                                            left join managers on managers.id=marketing_dogovor_podches.managers_id');
            $MarketingDogovorPodches=collect($MarketingDogovorPodches);
            //dd($MarketingDogovorPodches);
            //return view('front.marketingdogovor.index',compact('marketingdogovors','MarketingDogovorPodches'));
            return view('front.marketingdogovor.index')->with([
                'marketingdogovors'=>$marketingdogovors,
                'MarketingDogovorPodches'=>$MarketingDogovorPodches,
                'posts' => Post::where('Arhiv',false)->get(), //для выпадающего списка поставщиков
            ]);
            //dd(111111);
        }
}
