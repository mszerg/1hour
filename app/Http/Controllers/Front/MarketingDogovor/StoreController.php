<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\MarketingDogovor\StoreRequest;
use App\Models\MarketingDogovor;
use App\Models\MarketingDogovorPodch;
use App\Models\MarketingType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
        {
            //dd($request);
            //echo 11111111111111111111111;
            $data = $request->validated();

            if (in_array('Scancopy',$data)) {
                $data['Scancopy'] = Storage::put('/scancopy_dogovors',$data['Scancopy']);
            }
            $MarketingDogovor=MarketingDogovor::Create($data);
            //dd($MarketingDogovor->id);
            for ($i=4;$i<=8;$i++) {
                $mdpodch[] = [
                        'marketing_types_id' => MarketingType::all()->toArray()[$i-1]['id'],
                        'price' => 1,
                        'managers_id' => 1,
                        'Comment' => MarketingType::all()->toArray()[$i-1]['TypeMarketing'],
                        //'marketing_dogovors_id' => 27
                        'marketing_dogovors_id' => $MarketingDogovor->id
                ];
            }
            //dd($mdpodch);
            MarketingDogovorPodch::insert($mdpodch);
            //return view('admin.categories.create');

            return redirect()->route('front.marketingdogovor.index');
            //dd($data);
        }
}
