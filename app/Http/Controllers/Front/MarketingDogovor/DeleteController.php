<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function __invoke(MarketingDogovor $marketingdogovor)
        {
            // TODO: Implement __invoke() method.
            $category->delete();
            /*$categories = MarketingType::all();
            return view('admin.categories.index', compact('categories'));*/
            return redirect()->route('front.marketingdogovor.index');
            //dd(111111);
        }
}
