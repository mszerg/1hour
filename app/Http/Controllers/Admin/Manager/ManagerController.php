<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\MarketingDogovorPodch;
use App\Models\Payment;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     //* @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $invoices = Invoice::all();
        return view('front.invoice.index', compact('invoices'));
        //dd($data);
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
            'sum'=>'numeric'
        ]);
        //dd($data);
        $marketing_dogovor_podches = MarketingDogovorPodch::all(); //для выпадающего списка маркетинговых условий
        //dd(intval($usloviya['usloviya']));
        $marketing_dogovor_usloviya = MarketingDogovorPodch::where('id',intval($usloviya['usloviya']))->get()->toArray(); //договор по номеру из урл
        //dd($marketing_dogovor_usloviya[0]['Comment']);
        //dd(111);
        //dd($posts);
        return view('front.invoice.create',compact('marketing_dogovor_podches','usloviya','marketing_dogovor_usloviya'));
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
        dd(1111111);
        $data=$request->validate([
            'name'=>'required|string',
            'age'=>'required|integer',
            'job'=>'required|string',
        ]);
        return $data;

        //return redirect()->route('front.invoice.index');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
