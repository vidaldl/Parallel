@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{isset($post) ? 'Editar Post' : 'Nuevo Post'}}</h1>
  <a href="{{route('posts.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Posts<span></a>
</div>


<div class="row justify-content-center">
  <div class="card col-md-8 mb-5">
    <div class="card-body">
      <form autocomplete="off" method="POST" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="form-group col-md-8">
            <label for="title" class="">Titulo del Post</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{isset($post) ? $post->title : ''}}">
            @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group col-md-4 float-right">
            <label for="category">Categoria</label>
            <select name="category" id="category" class="col-md-10 form-control">
              @foreach($categories as $category)
                <option value="{{ $category->id }}"
                  @if(isset($post))
                    @if($category->id === $post->category_id)
                      selected
                    @endif
                  @endif
                  >
                  {{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Descripcion del Post</label>
          <textarea id="description" name="description" cols="5" rows="1" class="form-control @error('description') is-invalid @enderror" >{{ isset($post) ? $post->description : '' }}</textarea>
          @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="contenido" class="col-form-label">Contenido del Post</label>
          <textarea id="contenido" name="contenido" class="@error('contenido') is-invalid @enderror">{{isset($post) ? $post->contenido : ''}}</textarea>

          @error('contenido')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalImage">Subir Imagen &nbsp;&nbsp;<i class="fas fa-image"></i></a>
        </div>

        <div class="form-group ">
          <label for="published_at" class="label">Publicado en</label>
          <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input id="published_at" class="form-control @error('published_at') is-invalid @enderror" name="published_at" value="{{ isset($post) ? $post->published_at : ''}}">
          </div>
          @error('published_at')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>


        <div class="form-group">
          <button type="submit" class="btn btn-success float-right">
            {{ isset($post) ? 'Guardar' : 'Publicar' }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

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
                <form id="image" method="POST" class="image dropzone" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" enctype="multipart/form-data">
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
                @if(isset($post))
                <img style="width:100%;" src="{{'/storage/' . $post->image}}" class="logoThumb img-fluid img-thumbnail rounded">
                @endif
                <div class="editador d-none" style="height:450px; background-color: #000;">
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

@endsection



@section('script')
  <script src="{{ asset('lib/summernote/summernote.js') }}"></script>
  <script>
    $(document).ready(function() {
    $('#contenido').summernote({
      toolbar: [
        // [groupName, [list of button]]
        //['style', ['style']],
         ['font', ['bold', 'underline']],
         //['fontname', ['fontname']],
         ['color', ['color']],
         //['para', ['ul', 'ol', 'paragraph']],
         //['table', ['table']],
         ['insert', ['link', 'picture', 'video']],
         //['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
    $("#contenido").summernote("foreColor", "blue");
    $("#contenido").summernote("backColor", "red");
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script type="text/javascript">
    defaultDate: new Date()
    flatpickr('#published_at', {
      defaultDate: new Date()
    })
  </script>
  <script src="{{asset('lib/dropzone/dropzone.js')}}"></script>
  <script src="{{asset('lib/cropper/cropper.js')}}"></script>
  <script>

  </script>
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
       var cropper = new Cropper(image, { aspectRatio: 3/2 });



     },

    @if(isset($post))
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

       @else
       init: function () {
          this.on("complete", function (file) {
            if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {

              setTimeout(
                function()
                {
                  var url = "/redirect1";
                  $(location).attr('href',url);
                }, 1500);
            }
          });
        }
    @endif


    };

  </script>

@endsection

@section('css')
  <link href="{{ asset('lib/summernote/summernote.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/dropzone/dropzone.css')}}">
  <link rel="stylesheet" href="{{asset('lib/cropper/cropper.css')}}">
@endsection
