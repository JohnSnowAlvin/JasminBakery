<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function get()
    {
        $cart=Cart::all();
        //return view('products');
        return view('cart',['cart'=>$cart]);
    }
}
