<?php

namespace App\Http\Controllers\Front\Accruals;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class AccrualsController extends Controller
{

    public function __invoke()
    {
        return view('front.accruals.index');
    }
}
