@extends('layouts.app')
@section('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<style>
.note-editable { background-color: #3742FA!important; color: white; }
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

          <form method="POST" action="{{route('infoSlider.update', $info_slider_texts[0]->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/infoSlider.png')}}">
              </div>
              <div class="form-group">
                <label for="title" class="col-form-label">Titulo</label>
                <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $info_slider_texts[0]->title }}">
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="contenido" class="col-form-label">Contenido</label>
                <textarea id="contenido" name="contenido" class="form-control @error('contenido') is-invalid @enderror"  >{{ $info_slider_texts[0]->contenido }}</textarea>

                  @error('contenido')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="button" class="col-form-label">Botón</label>
                <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $info_slider_texts[0]->button }}">
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
                <button type="submit" class="btn btn-success float-right">Actualizar</button>
              </div>
          </form>

          <!--modal logo-->
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
                          <th scope="col">Archivo</th>
                          <th scope="col">Imagen</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($info_slider_images as $images)

                        <tr>
                          <td>
                            <div class="form-group">
                              <form method="POST" action="{{route('update.sliderImage', $images->id)}}" enctype="multipart/form-data">
                              @csrf
                                <input onchange="this.form.submit()" id="slide" type="file" class="form-control @error('slide') is-invalid @enderror" name="slide">

                            </div>
                            </form>
                          </td>
                        <td>

                          <img style="height:200px; " class="img-thumbnail" src="{{'/storage/' . $images->image}}">

                        </td>
                        <td>
                          <form  method="POST" action="{{route('delete.sliderImage', $images->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="X">
                          </form>
                        </td>
                        </tr>

                      @endforeach


                      @if($info_slider_images->count() < 7)
                      <form method="POST" action="{{route('store.sliderImage')}}" enctype="multipart/form-data">
                        @csrf
                      <tr class="imageInput">
                        <td>
                          <div class="form-group">
                            <input onchange="this.form.submit()" id="slide" type="file" class="form-control @error('slide') is-invalid @enderror" name="slide">
                            @error('slide')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </td>
                      </tr>
                    </form>
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
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
<script>
ClassicEditor.create( document.querySelector( '#contenido' ), {
      removePlugins: [ 'Heading', 'Link' ],
      toolbar: [ 'bold', 'italic', 'mediaEmbed']
    }).then( editor => {
        console.log( Array.from( editor.ui.componentFactory.names() ) );
    } )
    .catch( error => {
        console.error( error );
    } );
console.log(ClassicEditor.builtinPlugins.map( plugin => plugin.pluginName ));
</script>
<script>
  $(document).ready(function() {
    $('.imageInput').hide();
    $('#addImage').click(function() {
      $('.imageInput').show();
    });
  });
</script>
@endsection
@section('css')
<link href="{{ asset('lib/summernote/summernote.css') }}" rel="stylesheet">
<style>

</style>
@endsection
