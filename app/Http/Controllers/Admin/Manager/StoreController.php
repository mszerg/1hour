<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manager\StoreRequest;
use App\Models\Manager;


class StoreController extends Controller
{
   public function __invoke(StoreRequest $request)
   {
       $data = $request->validated();
       //return $data;
       $manager = Manager::create($data);
       return $manager;
       //dd(111111);
   }
}
