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
                <h4>Subject Details</h4>
                <a href="subject/create" class="btn btn-sm btn-primary text-right"> Create New +</a>
            </div>
            <div class="card-body p-0">
              
                <div class="table-responsive">
                <table class="table table-striped table-md" id="subjectTable" >
                    <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Parent</th>

                    <th>Status</th>
                    <th>Action</th>
                    </thead>
                     @foreach ($subcats as $key=>$subcat)
                     <tr>
                        <td>{{++$key}}</td>
                        <td>{{$subcat->name}}</td>
                        <td>{{$subcat->category->name}}</td>

                        <td>
                               <label class="custom-switch mt-2">
                                    <input id="subject_status"  onchange="change_status($(this),'{{route('admin.status.change',['subject',$subcat->id,'status'])}}' )" type="checkbox" name="custom-switch-checkbox" {{$subcat->status =='1'?'checked':'' }} class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                              </label>


                        </td>

                        <td>
                            <a href="{{route('subject.edit',$subcat->id)}}" class="btn btn-primary">Edit</a>
                            <a href="javascript:void(0)" onclick="confirm_modal('{{route('subject.destroy',$subcat->id)}}')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                     @endforeach

                </table>
                </div>
            </div>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                 <ul class="pagination mb-0">
                     {{$subcats->links('pagination::bootstrap-4')}}
                   
                </ul>
                </nav>
            </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
@section('page-js')
  <script>
      $(document).ready( function () {
            // $('#subjectTable').DataTable();
        } );
  </script>
@endsection
