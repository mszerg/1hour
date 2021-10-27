<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
        {
            $data = $request->validated();
            //return view('admin.categories.create');
            MarketingType::firstOrCreate($data);
            return redirect()->route('admin.marketingdogovor.index');
            //dd($data);
        }
}
