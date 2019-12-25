@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{isset($property) ? 'Editar Propiedad' : 'Nueva Propiedad'}}</h1>
  <a href="{{route('properties.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Propiedades<span></a>
</div>


<div class="row justify-content-center">
  <div class="card col-md-8 mb-5">
    <div class="card-body">

        <div class="row">
        @if(isset($property))
        <div class="form-group col-md-8">
          <label for="name" class="">Nombre de la Propiedad</label>
          <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{isset($property) ? $property->name : ''}}">
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        @else
          <form autocomplete="off" method="POST" action="{{route('properties.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-12">
              <label for="name" class="">Nombre de la Propiedad</label>
              <input onchange='this.form.submit()' id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{isset($property) ? $property->name : ''}}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </form>
        @endif
          <div class="form-group col-md-4 ">
            <label for="city">Ciudad</label>
            <select {{isset($property) ? '' : 'disabled'}} name="city" id="city" class="col-md-10 form-control">
              @foreach($cities as $city)
              <option value="{{$city->name}}"
                @if(isset($property))
                  @if($property->city == $city->name)
                    selected
                  @else

                  @endif
                @endif
                >{{$city->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Descripcion de la Propiedad</label>
          <textarea {{isset($property) ? '' : 'disabled'}} id="description" name="description" cols="4" rows="2" class="form-control @error('description') is-invalid @enderror" >{{ isset($property) ? $property->description : '' }}</textarea>
          @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group col-md-8">
          <label for="precio" class="">Precio</label>
          <input {{isset($property) ? '' : 'disabled'}} id="precio" type="text" class="form-control @error('title') is-invalid @enderror" name="precio" value="{{isset($property) ? $property->precio : ''}}">
          @error('precio')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <a {{isset($property) ? '' : 'disabled'}} href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalImage">Subir Imagen &nbsp;&nbsp;<i class="fas fa-image"></i></a>
        </div>

<!-- DATOS GENERALES -->

@if(isset($property))
  @foreach($features as $feature)

  <div class="form-group col-md-8">
    <label for="{{$feature->feature_name}}" class="">{{$feature->feature_name}}</label>
    <input {{isset($property) ? '' : 'disabled'}} id="{{$feature->feature_name}}" type="text" class="form-control @error('{{$feature->feature_name}}') is-invalid @enderror" name="dato[]" value="">
    @error('{{$feature->feature_name}}')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  @endforeach

@endif
<!-- /DATOS GENERALES -->
        <div class="form-group">
          <button class="btn btn-success float-right ajButton">
            {{ isset($property) ? 'Guardar' : 'Publicar' }}
          </>
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
                <form id="image" method="POST" class="image dropzone" action="{{ isset($property) ? route('properties.update', $property->id) : route('properties.store') }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                </form>
                @error('image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
              </div>
              <div class="col-md-8">
                @if(isset($property))
                <img style="width:100%;" src="{{'/storage/' . $property->image}}" class="logoThumb img-fluid img-thumbnail rounded">
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


<script>

 $(".ajButton").click(function(e){
    e.preventDefault();

    var name = $("#name").val();
    var description = $("#description").val();
    var city = $("#city").val();
    var precio = $("#precio").val();
    @foreach($features as $feature)
      var {{$feature->feature_name}} = $("#{{$feature->feature_name}}").val();
    @endforeach

    $.ajax({
           type:'PUT',
           dataType: 'json',
           url:'/properties/{{isset($property) ? "$property->id" : ''}}',
           data:{"_token": "{{ csrf_token() }}",
           name:name,
           description:description,
           city:city,
           @foreach($features as $feature)
            {{$feature->feature_name}}:{{$feature->feature_name}},
           @endforeach
           precio:precio
          },
           success:function(data){
              alert(data.success);
           }
        });
      });
</script>
// <script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
  <script>
      $(document).ready(function() {
        $('#contenidos').summernote();
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
             width: 1920,
             height: 1080
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

    @if(isset($properties))
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
                  var url = "/redirectProperty";
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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/dropzone/dropzone.css')}}">
  <link rel="stylesheet" href="{{asset('lib/cropper/cropper.css')}}">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
