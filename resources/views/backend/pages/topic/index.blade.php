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
                <h4>Topic Details</h4>
                <a href="topic/create" class="btn btn-sm btn-primary text-right"> Create New +</a>
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
                     @foreach ($topic as $key=>$ch)
                     <tr>
                        <td>{{++$key}}</td>
                        <td> <a href="{{ route('note.index',$ch->id) }}"> {{$ch->name}}</a> </td>
                        <td>{{$ch->chapter->name}}</td>

                        <td>
                               <label class="custom-switch mt-2">
                                    <input  onchange="alert('$this.val')" type="checkbox" name="custom-switch-checkbox" {{$ch->status =='1'?'checked':'' }} class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                              </label>


                        </td>

                        <td>
                            <a href="{{route('topic.edit',$ch->id)}}" class="btn btn-primary">Edit</a>
                            <a href="javascript:void(0)" onclick="confirm_modal('{{route('topic.destroy',$ch->id)}}')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                     @endforeach

                </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                   <ul class="pagination mb-0">
                     {{$topic->links('pagination::bootstrap-4')}}
                   
                </ul>
                </nav>
            </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
