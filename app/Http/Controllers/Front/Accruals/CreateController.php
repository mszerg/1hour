<?php

namespace App\Http\Controllers\Front\Accruals;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Accruals\StoreRequest;
use App\Models\Payment;


class CreateController extends Controller
{
   public function __invoke()
   {
       return view('front.accruals.create');
   }
}
