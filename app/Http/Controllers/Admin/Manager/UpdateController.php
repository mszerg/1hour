<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manager\UpdateRequest;
use App\Models\Manager;


class UpdateController extends Controller
{
   public function __invoke(UpdateRequest $request, Manager $manager)
   {
       $data = $request->validated();
       //return $data;
       $manager->update($data);
       return $manager;
       //dd(111111);
   }
}
