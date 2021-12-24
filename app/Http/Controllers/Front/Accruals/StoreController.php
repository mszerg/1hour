<?php

namespace App\Http\Controllers\Front\Accruals;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Accruals\StoreRequest;
use App\Models\Payment;


class StoreController extends Controller
{
   public function __invoke(StoreRequest $request)
   {
       $data = $request->validated();
       //return $data;
       //dd($data);
       $payment = Payment::create($data);
       return $payment;
       //dd(111111);
   }
}
