@extends('backend.master');
@section('title')
@endsection

@section('content')
<div class="main-content">
    <section class="section">
      <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
            <div class="card-header">
                <h4>Request List</h4>
                <a href="course/create" class="btn btn-sm btn-primary text-right"> Create New +</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                    <th>#</th>
                    <th>Name</th>

                    <th>Mobile</th>
                    <th>Transaction ID</th>
                    <th>Payment Method</th>
                    <th>Request Topic</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                     @foreach ($datas as $key=>$data)
                     <tr>
                        <td>{{++$key}}</td>
                        <td>{{$data->user->name}}</td>
                        <td>{{ $data->mobile }}</td>
                        <td>{{ $data->trn_id }}</td>
                        <td>{{$data->pay_method}}</td>
                        <td>{{$data->subject->category->menu->name}}->{{$data->subject->category->name}}->{{  $data->subject->name}}</td>
                        <td>
                            <label class="custom-switch ">
                                
                          </label>
                        </td>


                        <td>
                            <a href="{{route('course.edit',$data->id)}}" class="btn btn-primary">View</a>
                            <a href="javascript:void(0)" onclick="confirm_modal('{{route('course.destroy',$data->id)}}')" class="btn btn-danger">Cancel</a>
                        </td>
                    </tr>
                     @endforeach

                </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span
                        class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
                </nav>
            </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
