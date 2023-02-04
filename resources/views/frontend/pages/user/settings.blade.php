@extends('frontend.master')
@section('content')
<div id="dashboard">
    <div class="container" id="dash_back">
      <div class="row">
        <div class="col-12">
          <div class="dash_title">
            <h1>Settings</h1>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="form_btn_top for_setting">
            <ul>
              <li class="member_active" id="all1">Profile</li>
              <li id="active1">Reset Password</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center" id="all">
        <div class="col-lg-9 col-sm-10 col-12 form_body">
          <div class="form_desc">
            <h4>Contact information</h4>
            <p>Provide your details below to create your account profile</p>
          </div>
        </div>
        <div class="col-lg-9 col-sm-10 col-12 form_body">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" />
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
      <div
        class="row justify-content-center"
        id="active"
        style="display: none"
      >
        <div class="col-lg-9 col-sm-10 col-12 form_body">
          <div class="form_desc">
            <h4>Password change</h4>
          </div>
        </div>
        <div class="col-lg-9 col-sm-10 col-12 form_body">
          <form class="row g-3">
            <div class="col-12">
              <label for="curpass" class="form-label">CURRENT PASSWORD</label>
              <input type="password" class="form-control" id="curpass" />
            </div>
            <div class="col-12">
              <label for="newpass" class="form-label">NEW PASSWORD</label>
              <input type="password" class="form-control" id="newpass" />
            </div>

            <div class="col-12">
              <label for="conpass" class="form-label"
                >CONFIRM NEW PASSWORD</label
              >
              <input type="password" class="form-control" id="conpass" />
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
