@extends('frontend.master')
@section('content')
    <!------ DashBoard -------->
    <div id="dashboard">
        <div class="container" id="dash_back">
          <div class="row">
            <div class="col-12">
              <div class="dash_title">
                <h1>Purchase History</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="history table-responsive">
                <table class="table table-bordered bg-white">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>ottu</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>
                        <a href=""
                          ><button><i class="fa-regular fa-eye"></i></button
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>
                        <a href=""
                          ><button><i class="fa-regular fa-eye"></i></button
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>
                        <a href=""
                          ><button><i class="fa-regular fa-eye"></i></button
                        ></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!------End DashBoard -------->
@endsection
