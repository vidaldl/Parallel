
@extends('layouts.app')
@section('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<style>

</style>
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Acerca de</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/about"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

          <form method="POST" action="{{route('about.update', $contenidoabouts[0]->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/sectionAbout.png')}}">
              </div>
              <div class="form-group">
                <label for="mision" class="col-form-label">Misión</label>
                <textarea id="mision" name="mision" class="editors form-control @error('mision') is-invalid @enderror"  >{{ $contenidoabouts[0]->mision }}</textarea>
                  @error('mision')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="vision" class="col-form-label">Visión</label>
                <textarea id="vision"  name="vision" class="editors form-control @error('vision') is-invalid @enderror">{{ $contenidoabouts[0]->vision }}</textarea>
                  @error('vision')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="valores" class="col-form-label">Valores</label>
                <textarea id="valores"  name="valores" class="editors form-control @error('valores') is-invalid @enderror">{{ $contenidoabouts[0]->valores }}</textarea>
                  @error('valores')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="map" class="col-form-label">Mapa</label>
                <input id="map" name="map" class="form-control @error('map') is-invalid @enderror" value="{{ $contenidoabouts[0]->map }}">
                  @error('map')
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
  </div>

@endsection
@section('script')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script>
$(document).ready(function() {
$('.editors').summernote({
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

});
</script>
@endsection
@section('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<style>

</style>
@endsection
