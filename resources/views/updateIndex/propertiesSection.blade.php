@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Sección de Propiedades</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/#"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

          <form method="POST" action="{{route('propSection.update', $section_properties[0]->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">

              </div>
              <div class="form-group">
                <label for="title" class="col-form-label">Nombre de la Empresa</label>
                <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $section_properties[0]->title }}">
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="button" class="col-form-label">Título de Botón</label>
                <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror" value="{{ $section_properties[0]->button }}">
                  @error('button')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="button_subtitle" class="col-form-label">Subtitulo de Botón</label>
                <input id="button_subtitle" type="input" name="button_subtitle" class="form-control @error('button_subtitle') is-invalid @enderror"  value="{{ $section_properties[0]->button_subtitle }}">
                  @error('button_subtitle')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="back_color">Color de Fondo</label><br>
                <input onchange="this.form.submit()" class="form-control col-md-6"  name="back_color" type="text" id="back_color" value="{{ $section_properties[0]->back_color }}">
              </div>
              <div class="form-group">
                <a href="{{route('properties.index')}}" class="btn btn-primary float-left" style="color: white"><i class="fas fa-city"></i>&nbsp;&nbsp;Propiedades</a>
                <button type="submit" class="btn btn-success float-right">Actualizar</button>
              </div>
          </form>


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
@endsection
@section('css')
<link href="{{ asset('lib/spectrum/spectrum.css') }}" rel="stylesheet">
@endsection
