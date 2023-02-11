<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuHead;
use App\Models\Category;
use App\Models\Subject;
use App\Models\SubSubcategory;
use App\Models\Chapter;

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
}
