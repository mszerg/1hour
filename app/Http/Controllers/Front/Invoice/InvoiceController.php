<?php

namespace App\Http\Controllers\Front\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Manager;
use App\Models\MarketingDogovorPodch;
use App\Models\Payment;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     //* @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $invoices = Invoice::orderBy('id', 'desc')->get();
        //dd($invoices);
        return view('front.invoice.index', compact('invoices'));

    }

    /**
     * Display a listing of the resource.
     *
    //* @return \Illuminate\Http\Response
     */
    public function matching()
    {
        //
        $invoices = Invoice::all();
        $payments = Payment::select('*')->where([
                                                    ['DATA_DOC','>=','2021.01.01'],
                                                    ['DDS','=',7]
                                                ])->get();
        //$payments = Payment::first();
        //dd($payments->toarray());
        return view('front.invoice.matching', compact('invoices','payments'));
        //dd($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     //* @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //usloviya - передается в урл адресе после ?
        $usloviya=$request->validate([
            'usloviya'=>'integer',
            'sum'=>'numeric',
            'comment'=>'string',
            'manager'=>'integer'
        ]);
        //dd($data);
        $marketing_dogovor_podches = MarketingDogovorPodch::all(); //для выпадающего списка маркетинговых условий
        //dd(intval($usloviya['usloviya']));
        $marketing_dogovor_usloviya = MarketingDogovorPodch::where('id',intval($usloviya['usloviya']))->get()->toArray(); //договор по номеру из урл
        //dd($marketing_dogovor_usloviya[0]['Comment']);
        //dd(compact('usloviya'));
        //dd($marketing_dogovor_usloviya);
        //return view('front.invoice.create',compact('marketing_dogovor_podches','usloviya','marketing_dogovor_usloviya'));
        return view('front.invoice.create')->with([
            'marketing_dogovor_podches'=>$marketing_dogovor_podches,
            'usloviya'=>$usloviya,
            'marketing_dogovor_usloviya'=>$marketing_dogovor_usloviya,
            'managers'=>Manager::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Comment
        $data=$request->validate([
            'marketing_dogovors_podches_id'=>'required|int',
            'DateInvoice'=>'date',
            'CalculationBase'=>'',
            'Price'=>'',
            'SumItogo'=>'',
            'Comment'=>'string',
            'managers_id'=>'integer|notIn:1',

        ]);

        Invoice::create($data);

        /*$review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');
        $review->save();*/
        return redirect()->route('front.invoice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
        return view('front.invoice.edit')->with([
            'invoice'=>$invoice
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
        $data=$request->validate([
            'marketing_dogovors_podches_id'=>'required|int',
            'DateInvoice'=>'date',
            'CalculationBase'=>'',
            'Price'=>'',
            'SumItogo'=>'',
            'Comment'=>'string',
            'managers_id'=>'integer',

        ]);
        $invoice->update($data);
        return redirect()->route('front.invoice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        // TODO: Implement __invoke() method.
        $invoice->delete();
        /*$categories = MarketingType::all();
        return view('admin.categories.index', compact('categories'));*/
        return redirect()->route('front.invoice.index');
        //dd(111111);
    }
}
