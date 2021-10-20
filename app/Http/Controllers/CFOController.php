<?php

namespace App\Http\Controllers;

use App\Models\CFO;
use App\Models\Contact;
use Illuminate\Http\Request;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class CFOController extends Controller
{
    public function example()
    {
        $dataProvider = new EloquentDataProvider(CFO::query());
        return view('example-view', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function CFO_list()
    {
        $reviews = new CFO();
        //dd($reviews->all());
        return view('home',['reviews'=>$reviews->all()]);
    }
}
