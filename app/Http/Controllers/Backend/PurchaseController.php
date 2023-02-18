<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchaseRequest;

class PurchaseController extends Controller
{
    public function request_list($status){
    $datas = PurchaseRequest::where('status',$status)->paginate(10);
    return view('backend.pages.purchase_request.request_list',compact('datas'));
    }



}
