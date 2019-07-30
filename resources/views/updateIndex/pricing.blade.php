
@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Sección de Precios</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
  <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/#pricing"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-12 mb-5">
      <div class="card-body">
        <form method="POST" action="{{route('pricing.update', $pricings[0]->id)}}" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="form-group col-md-12 ml-1">
            <label for="back_color">Color de Fondo</label><br>
            <input onchange="this.form.submit()" class="form-control col-md-6"  name="back_color" type="text" id="back_color" value="{{ $pricings[0]->back_color }}">
          </div>
          <!-- PRICING 1 -->
            <div class="col-md-4">
              <div class="container">
                <h4>Comparación 1</h4>
                    <div class="form-group">
                      <label class="col-md-12 col-form-label">Imagen </label><br>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$pricings[0]->id}}">Subir Imagen &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                    </div>
                    <div class="form-group">
                      <label for="title" class="col-md-12 col-form-label">Titulo</label>
                      <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $pricings[0]->title }}">
                        @error('title')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item1" class="col-md-12 col-form-label">Característica 1</label>
                      <input id="item1" type="input" name="item1" class="form-control @error('item1') is-invalid @enderror"  value="{{ $pricings[0]->item1 }}">
                        @error('item1')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item2" class="col-md-12 col-form-label">Característica 2</label>
                      <input id="item2" type="input" name="item2" class="form-control @error('item2') is-invalid @enderror"  value="{{ $pricings[0]->item2 }}">
                        @error('item2')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item3" class="col-md-12 col-form-label">Característica 3</label>
                      <input id="item3" type="input" name="item3" class="form-control @error('item3') is-invalid @enderror"  value="{{ $pricings[0]->item3 }}">
                        @error('item3')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item4" class="col-md-12 col-form-label">Característica 4</label>
                      <input id="item4" type="input" name="item4" class="form-control @error('item4') is-invalid @enderror"  value="{{ $pricings[0]->item4 }}">
                        @error('item4')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item5" class="col-md-12 col-form-label">Característica 5</label>
                      <input id="item5" type="input" name="item5" class="form-control @error('item5') is-invalid @enderror"  value="{{ $pricings[0]->item5 }}">
                        @error('item5')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item6" class="col-md-12 col-form-label">Característica 6</label>
                      <input id="item6" type="input" name="item6" class="form-control @error('item6') is-invalid @enderror"  value="{{ $pricings[0]->item6 }}">
                        @error('item6')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="price" class="col-md-12 col-form-label">Precio</label>
                      <input id="price" type="input" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="$" value="{{ $pricings[0]->price }}">
                        @error('button')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="button" class="col-md-12 col-form-label">Botón</label>
                      <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $pricings[0]->button }}">
                        @error('button')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success float-right">Actualizar</button>
                    </div>
                </form>
              </div>
            </div>
          <!-- /Pricing 1 -->

          <!-- PRICING 2 -->
            <div class="col-md-4">
              <div class="container">
                <h4>Comparación 2</h4>
                <form method="POST" action="{{route('pricing.update', $pricings[1]->id)}}" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label class="col-md-12 col-form-label">Imagen</label><br>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$pricings[1]->id}}">Subir Imagen &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                    </div>
                    <div class="form-group">
                      <label for="title" class="col-md-12 col-form-label">Titulo</label>
                      <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $pricings[1]->title }}">
                        @error('title')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item1" class="col-md-12 col-form-label">Característica 1</label>
                      <input id="item1" type="input" name="item1" class="form-control @error('item1') is-invalid @enderror"  value="{{ $pricings[1]->item1 }}">
                        @error('item1')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item2" class="col-md-12 col-form-label">Característica 2</label>
                      <input id="item2" type="input" name="item2" class="form-control @error('item2') is-invalid @enderror"  value="{{ $pricings[1]->item2 }}">
                        @error('item2')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item3" class="col-md-12 col-form-label">Característica 3</label>
                      <input id="item3" type="input" name="item3" class="form-control @error('item3') is-invalid @enderror"  value="{{ $pricings[1]->item3 }}">
                        @error('item3')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item4" class="col-md-12 col-form-label">Característica 4</label>
                      <input id="item4" type="input" name="item4" class="form-control @error('item4') is-invalid @enderror"  value="{{ $pricings[1]->item4 }}">
                        @error('item4')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item5" class="col-md-12 col-form-label">Característica 5</label>
                      <input id="item5" type="input" name="item5" class="form-control @error('item5') is-invalid @enderror"  value="{{ $pricings[1]->item5 }}">
                        @error('item5')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item6" class="col-md-12 col-form-label">Característica 6</label>
                      <input id="item6" type="input" name="item6" class="form-control @error('item6') is-invalid @enderror"  value="{{ $pricings[1]->item6 }}">
                        @error('item6')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="price" class="col-md-12 col-form-label">Precio</label>
                      <input id="price" type="input" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="$"  value="{{ $pricings[1]->price }}">
                        @error('button')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="button" class="col-md-12 col-form-label">Botón</label>
                      <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $pricings[1]->button }}">
                        @error('button')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success float-right">Actualizar</button>
                    </div>
                </form>
              </div>
            </div>
          <!-- /Pricing 2 -->

          <!-- PRICING 3 -->
            <div class="col-md-4">
              <div class="container">
                <h4>Comparación 3</h4>
                <form method="POST" action="{{route('pricing.update', $pricings[2]->id)}}" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label class="col-md-12 col-form-label">Imagen</label><br>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$pricings[2]->id}}">Subir Imagen &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                    </div>
                    <div class="form-group">
                      <label for="title" class="col-md-12 col-form-label">Titulo</label>
                      <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $pricings[2]->title }}">
                        @error('title')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item1" class="col-md-12 col-form-label">Característica 1</label>
                      <input id="item1" type="input" name="item1" class="form-control @error('item1') is-invalid @enderror"  value="{{ $pricings[2]->item1 }}">
                        @error('item1')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item2" class="col-md-12 col-form-label">Característica 2</label>
                      <input id="item2" type="input" name="item2" class="form-control @error('item2') is-invalid @enderror"  value="{{ $pricings[2]->item2 }}">
                        @error('item2')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item3" class="col-md-12 col-form-label">Característica 3</label>
                      <input id="item3" type="input" name="item3" class="form-control @error('item3') is-invalid @enderror"  value="{{ $pricings[2]->item3 }}">
                        @error('item3')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item4" class="col-md-12 col-form-label">Característica 4</label>
                      <input id="item4" type="input" name="item4" class="form-control @error('item4') is-invalid @enderror"  value="{{ $pricings[2]->item4 }}">
                        @error('item4')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item5" class="col-md-12 col-form-label">Característica 5</label>
                      <input id="item5" type="input" name="item5" class="form-control @error('item5') is-invalid @enderror"  value="{{ $pricings[2]->item5 }}">
                        @error('item5')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="item6" class="col-md-12 col-form-label">Característica 6</label>
                      <input id="item6" type="input" name="item6" class="form-control @error('item6') is-invalid @enderror"  value="{{ $pricings[2]->item6 }}">
                        @error('item6')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="price" class="col-md-12 col-form-label">Precio</label>
                      <input id="price" type="input" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="$"  value="{{ $pricings[2]->price }}">
                        @error('button')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="button" class="col-md-12 col-form-label">Botón</label>
                      <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $pricings[2]->button }}">
                        @error('button')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success float-right">Actualizar</button>
                    </div>
                </form>
              </div>
            </div>
          <!-- /Pricing 3 -->
        </div>

      </div>
    </div>
  </div>
</div>

@foreach($pricings as $pricing)
<!--modal image1-->
<div class="modal fade" id="modal{{$pricing->id}}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#4066D4;">
      <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label for="logo" class="col-form-label">Imagen{{$pricing->id}}</label>
              <form id="image{{$pricing->id}}" method="POST" class="image dropzone" action="{{ route('pricing.update', $pricing->id) }}" enctype="multipart/form-data">
                @csrf
              </form>
              @error('image')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              </div>
            </div>
            <div class="col-md-6">
              <img style="width:100%; border-radius: 100%;" src="{{'/storage/' . $pricing->image}}" class="imgThumb{{$pricing->id}} img-fluid img-thumbnail ">
              <div class="editor{{$pricing->id}} d-none" style="height:450px; background-color: #000;">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer ">
        <button class="buttonConfirm{{$pricing->id}} btn btn-primary d-none">Confirmar</button>
      </div>
    </div>
  </div>
</div>
<!-- End modal image1 -->
@endforeach

@endsection
@section('css')
<link rel="stylesheet" href="{{asset('lib/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('lib/cropper/cropper.css')}}">
<style>
.cropper-crop-box, .cropper-view-box {
  border-radius: 50%;
}

.cropper-view-box {
  box-shadow: 0 0 0 1px #39f;
  outline: 0;
}

.cropper-face {
background-color:inherit !important;
}

.cropper-dashed, .cropper-point.point-se, .cropper-point.point-sw, .cropper-point.point-nw,   .cropper-point.point-ne, .cropper-line {
display:none !important;
}

.cropper-view-box {
outline:inherit !important;
}
</style>
<link href="{{ asset('lib/spectrum/spectrum.css') }}" rel="stylesheet">
@endsection

@section('script')
<script src="{{asset('lib/dropzone/dropzone.js')}}"></script>
<script src="{{asset('lib/cropper/cropper.js')}}"></script>
<script>
@foreach($pricings as $images)
Dropzone.options.image{{$images->id}} = {
   paramName: "image",
   transformFile: function(file, done) {
      var myDropZone = this;
      var editor = $('.editor{{$images->id}}');
      var imgThumbnail = $('.imgThumb{{$images->id}}');
      $(imgThumbnail).addClass('d-none');
      $(editor).removeClass('d-none');
      $(editor).addClass('d-block');

      // Create confirm button
      var buttonConfirm = $('.buttonConfirm{{$images->id}}');
      $(buttonConfirm).removeClass('d-none');
      $(buttonConfirm).addClass('d-block');
      $(buttonConfirm).click(function() {
        // Get the canvas with image data from Cropper.js
         var canvas = cropper.getCroppedCanvas({
           width: 180,
           height: 180
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
@endforeach
</script>
<script src="{{ asset('lib/spectrum/spectrum.js') }}"></script>
<script>
  $('#back_color').spectrum({
    preferredFormat: "hex",
   showInput: true,
  });
</script>
@endsection
