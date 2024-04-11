<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopComponentsController extends Controller
{

    public function checkout(){
        return view('shop-components.checkout');
    }

    public function orders(){
        return view('shop-components.orders');
    }

    public function contactus(){
        return view('shop-components.contactus');
    }

    public function aboutus(){
        return view('shop-components.aboutus');
    }
}
