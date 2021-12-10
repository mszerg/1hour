<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manager\UpdateRequest;
use App\Models\Manager;


class DeleteController extends Controller
{
   public function __invoke(Manager $manager)
   {
       //$data = $request->validated();
       //return $data;
       $manager->delete();
       return response([]);
       //dd(111111);
   }
}
