<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuHead;
use App\Models\Category;
use App\Models\Subject;
use App\Models\SubSubcategory;
use App\Models\Chapter;
use App\Models\PurchaseRequest;
use Auth;

class PurchaseController extends Controller
{
    public function purchase_history(){
        return view('frontend.pages.user.purchase_history');
    }
    public function purchase_form(){
         $menuhead = MenuHead::orderBy('created_at','desc')->get();
        return view('frontend.pages.user.purchase_form',compact('menuhead'));
    }

    public function get_permission_data(Request $request)
    {

        $id = $request->get('id');
        $tablename = $request->get('tablename');

        switch ($tablename) {
            case "category":
              $datas = Category::where('menu_head_id',$id)->orderBy('created_at','desc')->get();
              break;
            case 'subject':
                $datas = subject::where('category_id',$id)->orderBy('created_at','desc')->get();
              break;
            case 'subjectpart':
                $datas = SubSubcategory::where('subject_id',$id)->orderBy('created_at','desc')->get();
              break;
            case 'chapter':
                $datas = Chapter::where('sub_sub_category_id',$id)->orderBy('created_at','desc')->get();
                break;
            default:

          }
          return view('backend.pages.user.dropdown',compact('datas'));

    }

    public function purchase_request(Request $request){
         $newrow = new PurchaseRequest();
         $newrow->user_id = Auth::id();
         $newrow->subject_id = $request->subject_id;
         $newrow->mobile =  $request->mobile;
         $newrow->trn_id =  $request->trn_id;
         $newrow->pay_method =  $request->pay_method;
         $newrow->amount =  $request->amount;
         $newrow->status = '0';
         if(  $newrow->save()){
            toast('Your Request as been submited!','success');
            return Redirect()->route('user.purchase.form');
         }else{
            toast('Operation failed!','error');
            return Redirect()->back();
         }
    }
}
