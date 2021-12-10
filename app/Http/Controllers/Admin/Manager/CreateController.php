<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manager\StoreRequest;


class CreateController extends Controller
{
   public function __invoke()
   {
       //$data = $request->validated();
       //return $data;
       //dd('create controller');
       return view('admin.manager.create');
       //dd(111111);
   }
}
