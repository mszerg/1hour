<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
        {
            $categories = MarketingType::all();
            return view('admin.categories.index',compact('categories'));
            //dd(111111);
        }
}
