<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\DataGridModel;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

use Illuminate\Http\Request;

class DataGridController extends Controller
{
    public function example()
    {
        $dataProvider = new EloquentDataProvider(Contact::query());
        return view('example-view', [
            'dataProvider' => $dataProvider
        ]);
    }
}
