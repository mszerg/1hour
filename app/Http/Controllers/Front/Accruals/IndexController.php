<?php

namespace App\Http\Controllers\Front\Accruals;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke()
    {
        $data = Payment::where([
                                ['id_Journal','=',3],
                                ['D_R','=',11],
                                ['SUM_IN','<>',0]
                            ])->orderby('id', 'DESC')->paginate(5);

        return response()->json($data);

        /*return Payment::where([
            ['id_Journal','=',3],
            ['D_R','=',11],
            ['SUM_IN','<>',0]
        ])->orderby('id', 'DESC')->paginate(5);*/
    }
}
