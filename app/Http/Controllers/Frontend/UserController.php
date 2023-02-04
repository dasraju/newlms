<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboard(){
        return view('frontend.pages.user.dashboard');
    }
    public function profile(){
        return view('frontend.pages.user.profile');
    }
    public function purchase_history(){
        return view('frontend.pages.user.purchase_history');
    }
    public function purchase_form(){
        return view('frontend.pages.user.purchase_form');
    }
    public function enroll_course(){
        return view('frontend.pages.user.enroll_course');
    }
    public function settings(){
        return view('frontend.pages.user.settings');
    }
    public function reviews(){
        return view('frontend.pages.user.reviews');
    }
}
