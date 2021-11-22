<?php

namespace App\Http\Controllers\Front\MarketingDogovor\Podch;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\MarketingDogovor\Podch\StoreRequest;
use App\Models\MarketingDogovor;
use App\Models\MarketingDogovorPodch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request,MarketingDogovor $marketingdogovor)
        {
            //dd($request);
            //echo 11111111111111111111111;
            $data = $request->validated();
            //dd($marketingtype);
            //return view('admin.categories.create');
            MarketingDogovorPodch::Create($data);
            return redirect()->route('front.marketingdogovor.edit',compact('marketingdogovor'));
            //dd($data);
        }
}
