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
                <h4>Chapter Details</h4>
                <a href="{{route('chapter.creates',$type)}}" class="btn btn-sm btn-primary text-right"> Create New +</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Parent</th>

                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                     @foreach ($chapters as $key=>$ch)
                     <tr>
                        <td>{{++$key}}</td>
                        <td>{{$ch->name}}</td>
                        <td>{{$ch->subsubcategory->name}}</td>

                        <td>
                               <label class="custom-switch mt-2">
                                    <input  id="chapterstatus" onchange="change_status($(this),'{{route('admin.status.change',['chapter',$ch->id,'status'])}}' )" type="checkbox" name="custom-switch-checkbox" {{$ch->status =='1'?'checked':'' }} class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                              </label>


                        </td>

                        <td>
                            <a href="{{route('chapter.edit',$ch->id)}}" class="btn btn-primary">Edit</a>
                            <a href="javascript:void(0)" onclick="confirm_modal('{{route('chapter.destroy',$ch->id)}}')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                     @endforeach

                </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                 <ul class="pagination mb-0">
                     {{$chapters->links('pagination::bootstrap-4')}}
                   
                </ul>
                </nav>
            </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
