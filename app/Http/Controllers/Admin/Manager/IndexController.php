<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manager\StoreRequest;
use App\Models\Manager;


class IndexController extends Controller
{
   public function __invoke()
   {
       //$data = $request->validated();
       //return $data;
       $managers = Manager::all();
       return view('admin.manager.index',compact('managers'));
       //dd(111111);
   }
}
