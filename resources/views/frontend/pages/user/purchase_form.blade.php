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
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" />
            </div>
            <div class="col-md-6">
                <label for="firstname" class="form-label">Menu Head</label>
                <select name="" id="menuhead" class="form-control"  onchange="get_dropdown_data('category','categories',$(this),'{{route('user.get.permission.data')}}')">
                  <option value="">hhh</option>

                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Category</label>
                <select name="categories" id="categories" class="form-control"onchange="get_dropdown_data('category','categories',$(this),'{{route('user.get.permission.data')}}')" >
                  <option value="">hhh</option>
                  <option value="">jjj</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Subject</label>
                <select name="subject"  class="form-control" id="subjects" onchange="get_dropdown_data('subjectpart','subjectpart',$(this),'{{route('user.get.permission.data')}}')">
                    <option>No data</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Subject Part</label>
                <select name="subjectpart" class="form-control" id="subjectpart" onchange="get_dropdown_data('chapter','chapter',$(this),'{{route('user.get.permission.data')}}')">
                    <option>No data</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">Category</label>
                <select   class="form-control" multiple="true" id="chapter" name="chapter[]">
                    <option>No data</option>
                </select>
              </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" />
            </div>

            <div class="col-md-6">
              <label for="job" class="form-label">Job Title</label>
              <input type="text" class="form-control" id="job" />
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="number" class="form-control" id="phone" />
            </div>
            <div class="col-12">
              <label for="bio" class="form-label">Bio</label>
              <textarea
                name=""
                class="form-control"
                id="bio"
                cols="30"
                rows="7"
              ></textarea>
            </div>

            <div class="col-md-6">
              <label for="Twitter" class="form-label">Twitter</label>
              <input type="text" class="form-control" id="Twitter" />
            </div>
            <div class="col-md-6">
              <label for="Facebook" class="form-label">Facebook</label>
              <input type="text" class="form-control" id="Facebook" />
            </div>

            <div class="col-md-6">
              <label for="Instagram" class="form-label">Instagram</label>
              <input type="text" class="form-control" id="Instagram" />
            </div>
            <div class="col-md-6">
              <label for="Linkedin" class="form-label">Linkedin</label>
              <input type="text" class="form-control" id="Linkedin" />
            </div>
            <div class="col-md-6">
              <label for="Pinterest" class="form-label">Pinterest</label>
              <input type="text" class="form-control" id="Pinterest" />
            </div>
            <div class="col-md-6">
              <label for="Youtube" class="form-label">Youtube</label>
              <input type="text" class="form-control" id="Youtube" />
            </div>
            <div class="col-md-6">
              <label for="Github" class="form-label">Github</label>
              <input type="text" class="form-control" id="Github" />
            </div>

            <div class="col-12 mt-4">
              <button type="submit" class="btn btn-success">
                Update Profile
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
</script>

@endsection
