<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\MarketingDogovor\StoreRequest;
use App\Models\MarketingDogovor;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
        {
            //dd($request);
            echo 11111111111111111111111;
            $data = $request->validated();
            dd($data);
            //return view('admin.categories.create');
            MarketingDogovor::Create($data);
            return redirect()->route('front.marketingdogovor.index');
            //dd($data);
        }
}
