@extends('frontend.master')
@section('content')
 <!------ DashBoard -------->
 <div id="dashboard">
    <div class="container" id="dash_back">
      <div class="row">
        <div class="col-12">
          <div class="dash_title">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="row" id="dash_col">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="dash_body">
            <div class="dash_icon">
              <i class="fa-brands fa-readme"></i>
            </div>
            <div class="dash_details">
              <h2>0</h2>
              <a href="#">Enrolled Courses</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="dash_body">
            <div class="dash_icon">
              <i class="fa-solid fa-book-open"></i>
            </div>
            <div class="dash_details">
              <h2>0</h2>
              <a href="#">Active Courses</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="dash_body">
            <div class="dash_icon">
              <i class="fa-regular fa-circle-check"></i>
            </div>
            <div class="dash_details">
              <h2>0</h2>
              <a href="#">Completed Courses</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!------End DashBoard -------->
@endsection
