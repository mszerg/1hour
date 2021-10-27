<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function __invoke(MarketingType $category)
        {
            // TODO: Implement __invoke() method.
            $category->delete();
            /*$categories = MarketingType::all();
            return view('admin.categories.index', compact('categories'));*/
            return redirect()->route('admin.category.index');
            //dd(111111);
        }
}
