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
  <h1 class="h3 mb-0 text-gray-800">Editar Slider de Información</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/#infoSlider"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

          <form method="POST" action="{{route('infoSlider2.update', $info_slider_text2s[0]->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/infoSlider.png')}}">
              </div>
              <div class="form-group">
                <label for="title" class="col-form-label">Titulo</label>
                <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $info_slider_text2s[0]->title }}">
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="contenido" class="col-form-label">Contenido</label>
                <textarea id="contenido" name="contenido" class="form-control @error('contenido') is-invalid @enderror"  >{{ $info_slider_text2s[0]->contenido }}</textarea>

                  @error('contenido')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="button" class="col-form-label">Botón</label>
                <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $info_slider_text2s[0]->button }}">
                  @error('button')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="image" class="col-form-label">Imagenes del Slideshow</label><br>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalImages">Manejar Imagenes &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                  @error('logo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="back_color">Color de Fondo</label><br>
                <input onchange="this.form.submit()" class="form-control col-md-6"  name="back_color" type="text" id="back_color" value="{{ $info_slider_text2s[0]->back_color }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success float-right">Actualizar</button>
              </div>
          </form>

          <!--modal Image-->
          <div class="modal fade" id="modalImages" tabindex="-1" role="dialog" aria-labelledby="modalImages" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#4066D4;">
                <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Editar/Agregar</th>
                          <th scope="col">Imagen</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($info_slider_image2s as $images)

                        <tr>
                          <td>
                            <div class="form-group">
                              <form method="POST" id="slide{{ $images->id}}" class="dropzone" action="{{route('update.sliderImage2', $images->id)}}" enctype="multipart/form-data">
                              @csrf
                              </form>
                            </div>
                          </td>
                        <td class="editorTD{{ $images->id }}">

                          <img style="height:200px; " class="img-thumbnail{{ $images->id }}" src="{{'/storage/' . $images->image}}">
                          <div class="editor{{ $images->id }} d-none" style="height:450px; background-color: #000;">
                          </div>
                          <button class="buttonConfirm{{ $images->id }} btn btn-primary float-right mt-2 d-none">Confirmar</button>
                        </td>
                        <td class="delTD{{ $images->id }}">
                          <form  method="POST" action="{{route('delete.sliderImage2', $images->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="X">
                          </form>
                        </td>
                        </tr>

                      @endforeach


                      @if($info_slider_image2s->count() < 7)

                      <tr class="imageInput">
                        <td>
                          <div class="form-group">
                            <form method="POST" id="slide" class="dropzone" action="{{route('store.sliderImage2')}}" enctype="multipart/form-data">
                              @csrf
                            </form>
                            @error('slide')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </td>
                        <!-- Editor -->
                        <td colspan="2">
                          <div class="editorNew d-none" style="height:450px; width: 450px; background-color: #000;">
                          </div>
                          <button class="buttonConfirm btn btn-primary float-right mt-2 d-none">Confirmar</button>
                        </td>
                      </tr>

                      @else
                      <tr class="imageInput">
                        <td>
                          <div class="alert alert-danger" role="alert">
                            Ya existen demasiadas fotos en el Slider
                          </div>
                        </td>
                      </tr>
                      @endif
                      <tr style="height: 200px;">
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer" style="border-top: 1px solid #4066D4;">
                    <a id="addImage" class="btn btn-primary col-md-3 mr-auto" style="color:white;">Agregar&nbsp;<i class="fas fa-plus-square"></i></a>
                  </div>

              </div>
            </div>
          </div>
          <!-- End modal logo -->

        </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script src="{{ asset('lib/spectrum/spectrum.js') }}"></script>
<script>
  $('#back_color').spectrum({
    preferredFormat: "hex",
   showInput: true,
  });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor.create( document.querySelector( '#contenido' ), {
        removePlugins: ['Autoformat', 'Heading', 'Link' ],
        toolbar: ['undo', 'redo', 'bold', 'italic', 'numberedList', 'bulletedList']
      }).catch( error => {
          console.error( error );
      } );

</script>
<script>
  $(document).ready(function() {
    $('.imageInput').hide();
    $('#addImage').click(function() {
      $('.imageInput').show();
    });
  });
</script>

<script src="{{asset('lib/dropzone/dropzone.js')}}"></script>
<script src="{{asset('lib/cropper/cropper.js')}}"></script>
<script>
  Dropzone.options.slide = {
     paramName: "slide",

     transformFile: function(file, done) {
        var myDropZone = this;
        var editor = $('.editorNew');
        $(editor).removeClass('d-none');
        $(editor).addClass('d-block');
        // Create confirm button at the top left of the viewport
        var buttonConfirm = $('.buttonConfirm');
        $(buttonConfirm).removeClass('d-none');
        $(buttonConfirm).addClass('d-block');
        $(buttonConfirm).click(function() {
          // Get the canvas with image data from Cropper.js
           var canvas = cropper.getCroppedCanvas({
             width: 1760,
             height: 990
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
       var cropper = new Cropper(image, { aspectRatio: 4/3 });
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


  @foreach($info_slider_image2s as $images)
  Dropzone.options.slide{{$images->id}} = {
     paramName: "slide",
     transformFile: function(file, done) {
        var myDropZone = this;
        var editor = $('.editor{{ $images->id }}');
        var imgThumbnail = $('.img-thumbnail{{ $images->id }}');
        $(imgThumbnail).addClass('d-none');
        $(editor).removeClass('d-none');
        $(editor).addClass('d-block');

        // Delete Button
        $('.delTD{{ $images->id }}').addClass('d-none');
        $('.editorTD{{ $images->id }}').attr('colspan',2);
        // Create confirm button at the top left of the viewport
        var buttonConfirm = $('.buttonConfirm{{ $images->id }}');
        $(buttonConfirm).removeClass('d-none');
        $(buttonConfirm).addClass('d-block');
        $(buttonConfirm).click(function() {
          // Get the canvas with image data from Cropper.js
           var canvas = cropper.getCroppedCanvas({
             width: 1760,
             height: 990
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
       var cropper = new Cropper(image, { aspectRatio: 16/9 });



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
  @endforeach
</script>
@endsection
