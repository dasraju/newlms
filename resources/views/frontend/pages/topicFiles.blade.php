@extends('frontend.master')
@section('content')
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="pdfmodal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div id="pspdfkit" style="height: 100vh"></div>
    </div>
  </div>
</div>
  <!-------Revision Course Name--------->
    <div class="rev_name">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="rev_top">
              <div class="rev_title">
                <h1>
                  {{ $topic->name }}
                </h1>
              </div>
              <div class="rev_search">
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                    aria-label="Recipient's username"
                    aria-describedby="button-addon2"
                  />
                  <button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-------End Revision Course Name--------->

    <!------- Revision Subject ----------->
    <div class="rev">
      <div class="container-fluid">
        <div class="row">
           
          <div class="col-md-6 col-12">
            <div class="rev_body">
              <div class="rev_sub_name">
                <h6>
                  <i class="fa-regular fa-pen-to-square"></i> notes
                  <span>(Premium)</span>
                </h6>
              </div>
              <div class="rev_sub_topic rev_dev_list">
                <ul>
                    @foreach ($notes as $note )
                    <li>
                        <div class="rev_det_file">
                        <p><i class="fa-brands fa-slack"></i>{{$note->title}}</p>
                        </div>
                        <div class="rev_det_icon">
                          @if ($note->price_type == 'paid' || $note->published == '0')
                            <a href=""><i class="fa-solid fa-lock"></i></a>
                          @else
                             @if ($note->view == '1')
                               <a onclick="show_pdf('{{ asset('notefile').'/'.$note->file_name }}')" href="javascript:void(0)"><i class="fa-regular fa-eye"></i></a>
                             @endif
                             @if ($note->download == '1')
                                <a href="{{ route('pdf.download',['pdffile',$note->id]) }}"><i class="fa-solid fa-download"></i></a>
                             @endif
                          @endif
                        </div>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="rev_body">
              <div class="rev_sub_name">
                <h6>
                  <i class="fa-solid fa-video"></i> VIDEO LECTURES
                  <span>(premium)</span>
                </h6>
              </div>
              <div class="rev_sub_topic rev_dev_list">
                <ul>
                    @foreach ($videoes as $video )
                    <li>
                        <div class="rev_det_file">
                        <p><i class="fa-brands fa-slack"></i>{{$video->title}}</p>
                        </div>
                        <div class="rev_det_icon">
                          @if ($video->price_type == 'paid' || $video->published == '0')
                            <a><i class="fa-solid fa-lock"></i></a>
                          @else
                             @if ($video->view == '1')

                               <a href="javascript:void(0)" onclick="play_video('{{ $video->url  }}')"><i class="fa-regular fa-eye"></i></a>
                             @endif
                             @if ($video->download == '1')
                                <button><i class="fa-solid fa-download"></i></button>
                             @endif

                          @endif
                        </div>
                    </li>
                    @endforeach

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" >
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button "  class="close btn btn-danger" onclick="$('#exampleModalCenter').modal('hide')" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="view_video">
          <iframe
             id="video_frame"
            src="https://www.youtube.com/embed/xeiWdLYaEpc"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>


      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
    </div>
    <!------- End Revision Subject ----------->
@endsection
@section('page-js')
<script>
  function play_video(data){
    document.getElementById('video_frame').src = data;
    $('#exampleModalCenter').modal('show', {backdrop: 'static'});
  }
  function show_pdf(file){
    console.error(file);
       PSPDFKit.load({
				container: "#pspdfkit",
				document: file, // Add the path to your document here.
			})
			.then(function(instance) {
        $('#pdfmodal').modal('show');
				console.log("PSPDFKit loaded", instance);
                const items = instance.toolbarItems;
                // Hide the toolbar item with the `id` "ink"
                // by removing it from the array of items.
                instance.setToolbarItems(items.filter((item) => item.type !== "ink"));
                instance.setToolbarItems(
                items.filter((item) => item.type !== "export-pdf")
                );
                instance.setViewState(viewState => viewState.set("showToolbar", !viewState.showToolbar));
			})
			.catch(function(error) {
				console.error(error.message);
			});
  }

      



</script>

@endsection
