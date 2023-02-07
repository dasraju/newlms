<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase_history(){
        return view('frontend.pages.user.purchase_history');
    }
    public function purchase_form(){
        return view('frontend.pages.user.purchase_form');
    }
}
