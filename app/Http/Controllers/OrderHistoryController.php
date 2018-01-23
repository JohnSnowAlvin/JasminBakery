<?php

namespace App\Http\Controllers;

use App\OrderHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderHistoryController extends Controller
{
    public function get()
    {
        $orderhistory=OrderHistory::all();
//        return view('cart');
        return view('user.orderhistory',compact('orderhistory'));
    }
}
