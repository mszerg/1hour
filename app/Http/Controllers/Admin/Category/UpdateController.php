<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\MarketingType;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, MarketingType $category)
        {
            // TODO: Implement __invoke() method.
            $data = $request->validated();
            $category->update($data);
            $categories = MarketingType::all();
            return view('admin.categories.index', compact('categories'));
            //dd(111111);
        }
}
