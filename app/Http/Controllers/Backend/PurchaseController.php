<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchaseRequest;

class PurchaseController extends Controller
{
    public function request_list($status){
        if($status == '0'){
          $type = 'Pending';
        }else if($status == '1'){
            $type = 'Processing';
        }else{
            $type = 'Completed';
        }
    $datas = PurchaseRequest::where('status',$status)->paginate(10);
    return view('backend.pages.purchase_request.request_list',compact('datas','type'));
    }


    public function show($id){
        $data = PurchaseRequest::find($id);
        return view('backend.pages.purchase_request.show',compact('data'));
    }



}
