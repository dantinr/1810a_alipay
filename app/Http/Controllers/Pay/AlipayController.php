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

    public function payGo()
    {
        echo "正在使用支付宝支付";
    }
}
