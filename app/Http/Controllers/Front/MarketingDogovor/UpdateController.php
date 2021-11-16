<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\MarketingDogovor\UpdateRequest;
use App\Models\MarketingDogovor;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, MarketingDogovor $marketingdogovor)
        {
            // TODO: Implement __invoke() method.
            $data = $request->validated();
            $marketingdogovor->update($data);
            /*$categories = MarketingType::all();
            return view('admin.categories.index', compact('categories'));*/
            return redirect()->route('front.marketingdogovor.index');
            //dd(111111);
        }
}
