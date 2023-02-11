@extends('frontend.master')
@section('content')
<div id="dashboard">
    <div class="container" id="dash_back">
      <div class="row">
        <div class="col-12">
          <div class="dash_title">
            <h1>Purchase Form</h1>
          </div>
        </div>
      </div>
      <div class="row justify-content-center" id="all">
        <div class="col-lg-9 col-sm-10 col-12 form_body">
          <div class="form_desc">
            {{-- <h4>Contact information</h4> --}}
            <p>Provide Billing and Topic details</p>
          </div>
        </div>
        <div class="col-lg-9 col-sm-10 col-12 form_body">
          <form class="row g-3">
            
            <div class="col-md-6">
                <label for="firstname" class="form-label">Menu Head</label>
                <select name="" id="menuhead" class="form-control"  onchange="get_dropdown_data('category','categories',$(this),'{{route('get.permission.data')}}')">
                  <option value="">select menu head</option>
                  @foreach ($menuhead as $item)
                   <option value="{{ $item->id }}">{{ $item->name }}</option> 
                  @endforeach
                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Category</label>
                <select name="categories" id="categories" class="form-control"onchange="get_dropdown_data('subject','subjects',$(this),'{{route('get.permission.data')}}')" >
                    <option>No data</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Subject</label>
                <select name="subject"  class="form-control" id="subjects" onchange="get_dropdown_data('subjectpart','subjectpart',$(this),'{{route('get.permission.data')}}')">
                    <option>No data</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Subject Part</label>
                <select name="subjectpart" class="form-control" id="subjectpart" onchange="get_dropdown_data('chapter','chapter',$(this),'{{route('get.permission.data')}}')">
                    <option>No data</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Chapter</label>
                <select   class="form-control" multiple="true" id="chapter" name="chapter[]">
                    <option>No data</option>
                </select>
              </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Transaction Id</label>
              <input type="text" class="form-control" id="lastname" />
            </div>

            <div class="col-md-6">
              <label for="job" class="form-label">Pay Method</label>
              <select name="" id="" class="form-select">
                <option value="">Select</option>
                <option value="Bkash">Bkash</option>
                  <option value="Nagad">Nagad</option>
              </select>
            </div>
            

            <div class="col-12 mt-4">
              <button type="submit" class="btn btn-success">
               Send request
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>
@endsection
@section('page-js')
<script>
    $(document).ready(function() {

    $('#menuhead').select2();
    $('#categories').select2();
    $('#subjects').select2();
    $('#subjectpart').select2();
    $('#chapter').select2();
        });

        function get_dropdown_data(tablename,targetdropdown,e,dataUrl){
          console.log(e);
            var newvalue = e.val();
            var newurl = dataUrl+'?id='+newvalue+'&tablename='+tablename;
          
          $.get(newurl, function(data){
              console.log(data);
              $('#'+targetdropdown).html(data);
            
          });
        }

</script>

@endsection
