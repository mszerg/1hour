<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manager\StoreRequest;
use App\Models\Manager;


class ManagerController extends Controller
{
   public function __invoke()
   {
       //$data = $request->validated();
       //return $data;
       $managers = Manager::all();
       return $managers;
       //dd(111111);
   }
}
