<?php

namespace App\Http\Controllers\Front\MarketingDogovor\Podch;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\MarketingDogovor\Podch\UpdateRequest;
use App\Models\MarketingDogovorPodch;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request)
        {
            // TODO: Implement __invoke() method.
            //dd($request->all());
            //$data = $request->validated();
            //dd($marketingdogovor_podch);
            //dd($data);

            //$marketingdogovor_podch->update($data);
            //dd($marketingdogovor_podch);
            /*$categories = MarketingType::all();
            return view('admin.categories.index', compact('categories'));*/
            //return redirect()->route('front.marketingdogovor.index');
            //dd(111111);

            $marketingdogovor_podch=MarketingDogovorPodch::findOrFail($request->id);
            $marketingdogovor_podch->update($request->validated());
            return back();

        }
}
