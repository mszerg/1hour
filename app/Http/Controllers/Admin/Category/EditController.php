<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function __invoke(MarketingType $category)
        {
            // TODO: Implement __invoke() method.
            return view('admin.categories.edit', compact('category'));
            //dd(111111);
        }
}
