@extends('layouts.app')
@section('css')
<link href="{{ asset('lib/summernote/summernote.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('lib/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('lib/cropper/cropper.css')}}">
<link href="{{ asset('lib/spectrum/spectrum.css') }}" rel="stylesheet">
<style>
.modal-dialog{
  position: relative;
  display: table;
  overflow-y: auto;
  overflow-x: auto;
  width: auto;
  min-width: 600px;
}
</style>
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{isset($portfolioItem) ? 'Portfolio: Editar Artículo' : 'Portfolio: Añadir Artículo'}}</h1>
  <a href="{{route('portfolioItems.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Portfolio: Artículos<span></a>
</div>
  <div class="row justify-content-center">
    <!-- <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/#links"  width="100%" height="450"></iframe></div> -->
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

          @if(isset($portfolioItem))
          <div class="form-group">
            <label for="title" class="col-form-label">Titulo</label>
            <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{$portfolioItem->title}}">
              @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          @else
          <form method="POST" id="formulario" action="{{route('portfolioItems.store')}}" enctype="multipart/form-data">
            @csrf
              <!-- <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/infoSlider.png')}}">
              </div> -->
              <div class="form-group">
                <label for="title" class="col-form-label">Titulo</label>
                <input id="title" onchange="this.form.submit()" type="input" name="title" class="form-control @error('title') is-invalid @enderror">
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
          </form>
          @endif

              <div class="form-group">
                <label for="subtitle" class="col-form-label">Subtitulo</label>
                <input {{isset($portfolioItem) ? '' : 'disabled'}} id="subtitle" type="input" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"  value="{{isset($portfolioItem) ? $portfolioItem->subtitle : ''}}">
                  @error('subtitle')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="image" class="col-form-label">Imagen</label><br>
                <a href="#" class="btn btn-primary {{isset($portfolioItem) ? '' : 'disabled'}}"  data-toggle="modal" data-target="#modalImage">Imagen &nbsp;&nbsp;<i class="fas fa-image"></i></a>
              </div>
              <div class="form-group">
                <button id="ajButton" class="btn btn-success float-right">Actualizar</button>
              </div>


        </div>
    </div>
  </div>
</div>

@if(isset($portfolioItem))
<!--modal image-->
<div class="modal fade" id="modalImage" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#4066D4;">
      <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
              <label for="logo" class="col-form-label">Imagen</label>
              <form id="image" method="POST" class="image dropzone" action="{{route('portfolioItems.update', $portfolioItem->id)}}" enctype="multipart/form-data">
                @csrf
              </form>
              @error('image')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              </div>
            </div>
            <div class="col-md-8">
              @if(isset($portfolioItem))
              <img style="width:100%;" src="{{'/storage/' . $portfolioItem->image}}" class="logoThumb img-fluid img-thumbnail rounded">
              @endif
              <div class="editador d-none" style="width:450px; height: 600px; background-color: #000;">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer ">
        <button class="buttonConfirm btn btn-primary d-none">Confirmar</button>
      </div>
    </div>
  </div>
</div>
<!-- End modal image -->
@endif
@endsection
@section('script')
<script>

 $("#ajButton").click(function(e){
    e.preventDefault();

    var title = $("#title").val();
    var subtitle = $("#subtitle").val();


    $.ajax({
           type:'POST',
           dataType: 'json',
           url:'/portfolioItem/{{isset($portfolioItem) ? "$portfolioItem->id" : ''}}',
           data:{"_token": "{{ csrf_token() }}",
            title:title,
            subtitle:subtitle
          },
           success:function(data){
              alert(data.success);
           }
        });
      });
</script>

<script src="{{asset('lib/dropzone/dropzone.js')}}"></script>
<script src="{{asset('lib/cropper/cropper.js')}}"></script>
<script>

    Dropzone.options.image = {
      paramName: "image",

       transformFile: function(file, done) {
          var myDropZone = this;
          var editor = $('.editador');
          var logoThumb = $('.logoThumb');
          $(logoThumb).addClass('d-none');
          $(editor).removeClass('d-none');
          $(editor).addClass('d-block');
          // Create confirm button at the top left of the viewport
          var buttonConfirm = $('.buttonConfirm');
          $(buttonConfirm).removeClass('d-none');
          $(buttonConfirm).addClass('d-block');
          $(buttonConfirm).click(function() {
            // Get the canvas with image data from Cropper.js
             var canvas = cropper.getCroppedCanvas({
               width: 940.5,
               height: 627
             });
             // Turn the canvas into a Blob (file object without a name)
             canvas.toBlob(function(blob) {
               // Create a new Dropzone file thumbnail
                myDropZone.createThumbnail(
                  blob,
                  myDropZone.options.thumbnailWidth,
                  myDropZone.options.thumbnailHeight,
                  myDropZone.options.thumbnailMethod,
                  false,
                  function(dataURL) {

                    // Update the Dropzone file thumbnail
                    myDropZone.emit('thumbnail', file, dataURL);
                    // Return the file to Dropzone
                    done(blob);
                });
             });
            // Remove the editor from the view
            $(buttonConfirm).removeClass('d-block');
            $(buttonConfirm).addClass('d-none');


          });

          // Create an image node for Cropper.js
         var image = new Image();
         image.src = URL.createObjectURL(file);
         // editor.appendChild(image);
         $(image).appendTo(editor)
         // Create Cropper.js
         var cropper = new Cropper(image, { aspectRatio: 1/1 });
     },
     init: function () {

        this.on("complete", function (file) {
          if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {

            setTimeout(
              function()
              {
                location.reload();
              }, 1500);
          }
        });
      }
    };


</script>
@endsection
