<?php

namespace App\Http\Controllers\Pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlipayController extends Controller
{
    //

    public function pay()
    {
        $data = [];
        return view('pay.alipay');

    }
}
