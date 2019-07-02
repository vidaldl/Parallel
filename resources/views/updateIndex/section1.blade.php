
@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Sección 1</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

          <form method="POST" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/section1.png')}}">
              </div>
              <div class="form-group">
                <label class="col-form-label">Imagen de Fondo</label><br>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBack">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                @error('background')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="title" class="col-form-label">Titulo</label>
                <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $contenidosection1s[0]->title }}">
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="tagline" class="col-form-label">Sub-titulo</label>
                <input id="tagline" type="input" name="tagline" class="form-control @error('tagline') is-invalid @enderror"  value="{{ $contenidosection1s[0]->tagline }}">
                  @error('tagline')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>

              <div class="form-group">

                  <label for="image" class="col-form-label">Imagen de Logo</label><br>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogo">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                  @error('logo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror


              </div>

              <div class="form-group">
                <label for="button" class="col-form-label">Botón</label>
                <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $contenidosection1s[0]->button }}">
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

          <!--modal logo-->
          <div class="modal fade" id="modalLogo" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#4066D4;">
                <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                      <label for="logo" class="col-form-label">Imagen de Logo</label>
                      <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                      @error('logo')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                    </div>
                    <div class="col-md-8">
                      <img src="{{'/storage/' . $contenidosection1s[0]->logo}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
                    </div>
                  </div>
                </div>
                <div class="modal-footer" style="background-color:#4066D4;">
                  <button type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fas fa-image"></i></button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End modal logo -->


          <!--modal background_image-->
          <div class="modal fade" id="modalBack" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#4066D4;">
                <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                      <label for="background" class="col-form-label">Imagen de Fondo</label>
                      <input id="background" type="file" class="form-control @error('background') is-invalid @enderror" name="background">
                      @error('background')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                    </div>
                    <div class="col-md-8">
                      <img src="{{'/storage/' . $contenidosection1s[0]->background_image}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
                    </div>
                  </div>
                </div>
                <div class="modal-footer" style="background-color:#4066D4;">
                  <button type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fas fa-image"></i></button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End modal background-image -->
        </div>
    </div>
  </div>
</div>
@endsection
