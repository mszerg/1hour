<?php

namespace App\Http\Controllers\Front\Accruals\Invoice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Accruals\Invoice\UpdateRequest;
use App\Models\Invoice;


class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, Invoice $invoice)
        {
            // TODO: Implement __invoke() method.
            $data = $request->validated();
            $invoice->update($data);
            /*$categories = MarketingType::all();
            return view('admin.categories.index', compact('categories'));*/
            //return redirect()->route('front.marketingdogovor.index');

            return $invoice;

            //dd(111111);
        }
}
