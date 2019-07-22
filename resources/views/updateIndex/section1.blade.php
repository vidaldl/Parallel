@extends('layouts.app')
@section('css')
  <link href="{{ asset('lib/tabslet/jquery.tabslet.css') }}" rel="stylesheet">
  <style media="screen">
  .tabdiv {
  /*border-top: 1px solid #c7c7c7*/
  min-height: 450px;
  background: white !important;
  padding: 10px 0;
  /*border-bottom: 4px solid #E95855 !important;*/
  }

  .spans {
  border-bottom: 4px solid #E5E5E5 !important;
  color: #ccc !important;
  font-weight: 300;
  line-height: 186px !important;
  display: block;
  text-align: center;
  font-size: 24px;
  }

  .tabs UL.horizontal {
  list-style: none outside none;
  margin: 0;
  }

  .li {
  background: white;
  border-bottom: 4px solid #E5E5E5;
  margin: 0 10px 0 0;
  display: inline-block;
  }

  .a {
  color: #ccc;
  display: block;
  font-size: 18px;
  font-weight: 300;
  padding: 14px 24px;
  text-decoration: none;
  }

  .li:hover {
  background: #466699;
  border-bottom: 4px solid #2165D1;
  }

  .tabs .li:hover A {
  color: white;
  }
  .actives {
  background: #466699 !important;
  border-bottom: 4px solid #2165D1 !important;
  }

  .actives A {
  color: white !important;
  }

  </style>
<link rel="stylesheet" href="{{asset('lib/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('lib/cropper/cropper.css')}}">
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Sección 1</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">
        <!-- Carousel activator Form -->
          <form id="sectionType" method="POST" action="{{route('section1.carousel', $contenidosection1s[0]->id)}}">
            @csrf
            <div class="form-group">
              <div class="form-group">
                <label for="carousel" class="col-form-label">Tipo de Sección</label><br>
                  <select onchange="this.form.submit()" name="carousel" class="col-md-4">
                    <option value="0" {{ $contenidosection1s[0]->carousel == '0' ? 'selected' : '' }}>Estático</option>
                    <option value="1" {{ $contenidosection1s[0]->carousel == '1' ? 'selected' : '' }}>Carrusel</option>
                  </select>
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
          </form>
        <!-- End carousel activator form -->
        <!-- Static Form -->
          <form class="{{$contenidosection1s[0]->carousel == 1 ? 'd-none' : ''}}" id="section1" method="POST" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/section1.png')}}">
              </div>
              <div class="form-group">
                <label class="col-form-label">Imagen de Fondo</label><br>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBack{{ $contenidosection1s[0]->id }}">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogo{{ $contenidosection1s[0]->id }}">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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
          <div class="modal fade" id="modalLogo{{ $contenidosection1s[0]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                        <label for="logo" class="col-form-label">Imagen de Logo</label>
                        <form id="logo{{ $contenidosection1s[0]->id }}" method="POST" class="logo dropzone" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
                          @csrf
                        </form>
                        @error('logo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                      <div class="col-md-8">
                      <img style="width:100%;" src="{{'/storage/' . $contenidosection1s[0]->logo}}" class="logoThumb{{ $contenidosection1s[0]->id }} img-fluid img-thumbnail rounded">
                      <div class="editador{{ $contenidosection1s[0]->id }} d-none" style="height:450px; background-color: #000;">
                      </div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer buttons">
                  <button class="buttonConfirm{{ $contenidosection1s[0]->id }} btn btn-primary d-none">Confirmar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End modal logo -->

          <!--modal background_image-->
          <div class="modal fade" id="modalBack{{ $contenidosection1s[0]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                    <label for="background" class="col-form-label">Imagen de Fondo</label>
                    <form id="background{{ $contenidosection1s[0]->id }}" method="POST" class="dropzone" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
                      @csrf
                    </form>
                    @error('logo')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-md-8">
                    <img style="width:100%;" src="{{'/storage/' . $contenidosection1s[0]->background_image}}" class="backThumb{{ $contenidosection1s[0]->id }} img-fluid img-thumbnail rounded">
                    <div class="editadorBack{{ $contenidosection1s[0]->id }} d-none" style="height:450px; background-color: #000;">
                    </div>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button class="buttonConfirmBack{{ $contenidosection1s[0]->id }} btn btn-primary d-none">Confirmar</button>
              </div>
                <!-- <form method="POST" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
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
                  <button id="back" type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fas fa-image"></i></button>
                </div>
                </form> -->
              </div>
            </div>
          </div>
        </div>
          <!-- End modal background-image -->

        <!-- END static form -->

      <!-- Carousel Sections  -->
      <div class="tabs {{$contenidosection1s[0]->carousel == 0 ? 'd-none' : ''}}" >

          <ul class="tabs-navigation horizontal">
            <li class="li"><a class="a" href="#slide1">Slide 1</a></li>
            <li class="li"><a class="a" href="#slide2">Slide 2</a></li>
            <li class="li"><a class="a" href="#slide3">Slide 3</a></li>
          </ul>
        <!-- Slide 1 -->
        <div id="slide1" class="tabdiv" style="padding: 10px; background-color: #E5E5E5!important;">
          <form id="section1" method="POST" action="{{route('section1.update', $contenidosection1s[1]->id)}}" enctype="multipart/form-data">
            <div class="row">
              @csrf
                <div class="form-group col-md-6">
                  <label class="col-form-label">Imagen de Fondo</label><br>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBackSlide{{ $contenidosection1s[1]->id }}">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                  @error('background')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group col-md-12">
                  <label for="title" class="col-form-label">Titulo</label>
                  <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $contenidosection1s[1]->title }}">
                    @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                  <label for="tagline" class="col-form-label">Sub-titulo</label>
                  <input id="tagline" type="input" name="tagline" class="form-control @error('tagline') is-invalid @enderror"  value="{{ $contenidosection1s[1]->tagline }}">
                    @error('tagline')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">

                    <label for="image" class="col-form-label">Imagen</label><br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogoSlide{{ $contenidosection1s[1]->id }}">Subir Imagen &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                    <select name="displayImage" onchange="this.form.submit()" class="ml-3" >
                      <option value="0" {{ $contenidosection1s[1]->carousel == '0' ? 'selected' : '' }}>Esconder</option>
                      <option value="1" {{ $contenidosection1s[1]->carousel == '1' ? 'selected' : '' }}>Mostrar</option>
                    </select>
                    @error('logo')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror


                </div>

                <div class="form-group col-md-12">
                  <label for="button" class="col-form-label">Botón</label>
                  <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $contenidosection1s[1]->button }}">
                    @error('button')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>


                <div class="form-group col-md-1 offset-md-9">
                  <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </div>
          </form>

            <!--modal logo-->
            <div class="modal fade" id="modalLogoSlide{{ $contenidosection1s[1]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                          <label for="logo" class="col-form-label">Imagen de Logo</label>
                          <form id="logo{{ $contenidosection1s[1]->id }}" method="POST" class="logo dropzone" action="{{route('section1.update', $contenidosection1s[1]->id)}}" enctype="multipart/form-data">
                            @csrf
                          </form>
                          @error('logo')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="editador{{ $contenidosection1s[1]->id }}" style="height:450px; background-color: #000;">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer ">
                    <button class="buttonConfirm{{ $contenidosection1s[1]->id }} btn btn-primary">Confirmar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End modal logo -->

            <!--modal background_image-->
            <div class="modal fade" id="modalBackSlide{{ $contenidosection1s[1]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                      <label for="background" class="col-form-label">Imagen de Fondo</label>
                      <form id="background{{ $contenidosection1s[1]->id }}" method="POST" class="dropzone" action="{{route('section1.update', $contenidosection1s[1]->id)}}" enctype="multipart/form-data">
                        @csrf
                      </form>
                      @error('logo')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                    </div>
                    <div class="col-md-8">
                      <!-- <img src="{{'/storage/' . $contenidosection1s[0]->logo}}" style="width:100%;" class="img-fluid img-thumbnail rounded" id="logoThumb"> -->
                      <div class="editadorBack{{ $contenidosection1s[1]->id }}" style="height:450px; background-color: #000;">
                      </div>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button class="buttonConfirmBack{{ $contenidosection1s[1]->id }} btn btn-primary">Confirmar</button>
                </div>
                </div>
              </div>
            </div>
            <!-- End modal background-image -->

          <!-- END static form -->
        </div>
        <!-- End Slide 1 -->

        <!-- Slide 2 -->
        <div id="slide2" class="tabdiv" style="padding: 10px; background-color: #E5E5E5!important;">
            <form id="section1" method="POST" action="{{route('section1.update', $contenidosection1s[2]->id)}}" enctype="multipart/form-data">
              <div class="row">
                @csrf
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Imagen de Fondo</label><br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBackSlide{{ $contenidosection1s[2]->id }}">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                    @error('background')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group col-md-12">
                    <label for="title" class="col-form-label">Titulo</label>
                    <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $contenidosection1s[2]->title }}">
                      @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group col-md-12">
                    <label for="tagline" class="col-form-label">Sub-titulo</label>
                    <input id="tagline" type="input" name="tagline" class="form-control @error('tagline') is-invalid @enderror"  value="{{ $contenidosection1s[2]->tagline }}">
                      @error('tagline')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>

                  <div class="form-group col-md-6">

                      <label for="image" class="col-form-label">Imagen</label><br>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogoSlide{{ $contenidosection1s[2]->id }}">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                      <select name="displayImage" onchange="this.form.submit()" class="ml-3" >
                        <option value="0" {{ $contenidosection1s[2]->carousel == '0' ? 'selected' : '' }}>Esconder</option>
                        <option value="1" {{ $contenidosection1s[2]->carousel == '1' ? 'selected' : '' }}>Mostrar</option>
                      </select>
                      @error('logo')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror


                  </div>

                  <div class="form-group col-md-12">
                    <label for="button" class="col-form-label">Botón</label>
                    <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $contenidosection1s[2]->button }}">
                      @error('button')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>


                  <div class="form-group col-md-1 offset-md-9">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                  </div>
              </div>
            </form>

              <!--modal logo-->
              <div class="modal fade" id="modalLogoSlide{{ $contenidosection1s[2]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                            <label for="logo" class="col-form-label">Imagen de Logo</label>
                            <form id="logo{{ $contenidosection1s[2]->id }}" method="POST" class="logo dropzone" action="{{route('section1.update', $contenidosection1s[2]->id)}}" enctype="multipart/form-data">
                              @csrf
                            </form>
                            @error('logo')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                            </div>
                          </div>
                          <div class="col-md-8">
                            <!-- <img src="{{'/storage/' . $contenidosection1s[2]->logo}}" style="width:100%;" class="img-fluid img-thumbnail rounded" id="logoThumb"> -->
                            <div class="editador{{ $contenidosection1s[2]->id }} d-none" style="height:450px; background-color: #000;">
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button class="buttonConfirm{{ $contenidosection1s[2]->id }} btn btn-primary d-none">Confirmar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End modal logo -->

              <!--modal background_image-->
              <div class="modal fade" id="modalBackSlide{{ $contenidosection1s[2]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                        <label for="background" class="col-form-label">Imagen de Fondo</label>
                        <form id="background{{ $contenidosection1s[2]->id }}" method="POST" class="dropzone" action="{{route('section1.update', $contenidosection1s[2]->id)}}" enctype="multipart/form-data">
                          @csrf
                        </form>
                        @error('logo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                      <div class="col-md-8" id="editarback">
                        <!-- <img src="{{'/storage/' . $contenidosection1s[0]->logo}}" style="width:100%;" class="img-fluid img-thumbnail rounded" id="logoThumb"> -->
                        <div class="editadorBack{{ $contenidosection1s[2]->id }}" style="height:450px; background-color: #000;">
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer" id="buttonsback">
                    <button class="buttonConfirmBack{{ $contenidosection1s[2]->id }} btn btn-primary">Confirmar</button>
                  </div>
                  </div>
                </div>
              </div>
              <!-- End modal background-image -->

            <!-- END static form -->
        </div>
        <!-- End Slide 2 -->

        <!-- Slide 3 -->
        <div id="slide3" class="tabdiv" style="padding: 10px; background-color: #E5E5E5!important;">
            <form id="section1" method="POST" action="{{route('section1.update', $contenidosection1s[3]->id)}}" enctype="multipart/form-data">
              <div class="row">
                @csrf
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Imagen de Fondo</label><br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBackSlide{{ $contenidosection1s[3]->id }}">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                    @error('background')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group col-md-12">
                    <label for="title" class="col-form-label">Titulo</label>
                    <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $contenidosection1s[3]->title }}">
                      @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group col-md-12">
                    <label for="tagline" class="col-form-label">Sub-titulo</label>
                    <input id="tagline" type="input" name="tagline" class="form-control @error('tagline') is-invalid @enderror"  value="{{ $contenidosection1s[3]->tagline }}">
                      @error('tagline')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>

                  <div class="form-group col-md-6">

                      <label for="image" class="col-form-label">Imagen</label><br>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogoSlide{{ $contenidosection1s[3]->id }}">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
                      <select name="displayImage" onchange="this.form.submit()" class="ml-3" >
                        <option value="0" {{ $contenidosection1s[3]->carousel == '0' ? 'selected' : '' }}>Esconder</option>
                        <option value="1" {{ $contenidosection1s[3]->carousel == '1' ? 'selected' : '' }}>Mostrar</option>
                      </select>
                      @error('logo')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror


                  </div>

                  <div class="form-group col-md-12">
                    <label for="button" class="col-form-label">Botón</label>
                    <input id="button" type="input" name="button" class="form-control @error('button') is-invalid @enderror"  value="{{ $contenidosection1s[2]->button }}">
                      @error('button')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>


                  <div class="form-group col-md-1 offset-md-9">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                  </div>
              </div>
            </form>

              <!--modal logo-->
              <div class="modal fade" id="modalLogoSlide{{ $contenidosection1s[3]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                            <label for="logo" class="col-form-label">Imagen de Logo</label>
                            <form id="logo{{ $contenidosection1s[3]->id }}" method="POST" class="logo dropzone" action="{{route('section1.update', $contenidosection1s[3]->id)}}" enctype="multipart/form-data">
                              @csrf
                            </form>
                            @error('logo')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                            </div>
                            <div class="col-md-8">
                          <!-- <img src="{{'/storage/' . $contenidosection1s[2]->logo}}" style="width:100%;" class="img-fluid img-thumbnail rounded" id="logoThumb"> -->
                          <div class="editador{{ $contenidosection1s[3]->id }}" style="height:450px; background-color: #000;">
                          </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="buttonConfirm{{ $contenidosection1s[3]->id }} btn btn-primary">Confirmar</button>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <!-- End modal logo -->

              <!--modal background_image-->
              <div class="modal fade" id="modalBackSlide{{ $contenidosection1s[3]->id }}" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
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
                        <label for="background" class="col-form-label">Imagen de Fondo</label>
                        <form id="background{{ $contenidosection1s[3]->id }}" method="POST" class="dropzone" action="{{route('section1.update', $contenidosection1s[3]->id)}}" enctype="multipart/form-data">
                          @csrf
                        </form>
                        @error('logo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                      <div class="col-md-8 editar">
                        <!-- <img src="{{'/storage/' . $contenidosection1s[0]->logo}}" style="width:100%;" class="img-fluid img-thumbnail rounded" id="logoThumb"> -->
                        <div class="editadorBack{{ $contenidosection1s[3]->id }}" style="height:450px; background-color: #000;">
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer buttons">
                    <button class="buttonConfirmBack{{ $contenidosection1s[3]->id }} btn btn-primary">Confirmar</button>
                  </div>
                  </div>
                </div>
              </div>
              <!-- End modal background-image -->

            <!-- END static form -->
          </div>
        <!-- End Slide 3 -->
      <!-- End Carousel Sections -->

@endsection
@section('script')
<script src="{{asset('lib/dropzone/dropzone.js')}}"></script>
<script src="{{asset('lib/cropper/cropper.js')}}"></script>
<script>
// $('.modal').on('hidden.bs.modal', function () {
//  location.reload();
// })
</script>
<script>
@foreach($contenidosection1s as $section)
  Dropzone.options.logo{{$section->id}} = {
     paramName: "logo",
     addRemoveLinks: true,
     transformFile: function(file, done) {
        var myDropZone = this;
        var editor = $('.editador{{ $section->id }}');
        var logoThumb = $('.logoThumb{{ $section->id }}');
        $(logoThumb).addClass('d-none');
        $(editor).removeClass('d-none');
        $(editor).addClass('d-block');
        // Create confirm button at the top left of the viewport
        var buttonConfirm = $('.buttonConfirm{{ $section->id }}');
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

  Dropzone.options.background{{ $section->id }} = {
     paramName: "background",
     addRemoveLinks: true,
     transformFile: function(file, done) {
       // Create Dropzone reference for use in confirm button click handler
       var myDropZone = this;

       var editor = $('.editadorBack{{ $section->id }}');
       var backThumb = $('.backThumb{{ $section->id }}');
       $(backThumb).addClass('d-none');
       $(editor).removeClass('d-none');
       $(editor).addClass('d-block');

       var buttonConfirm = $('.buttonConfirmBack{{ $section->id }}');
       $(buttonConfirm).removeClass('d-none');
       $(buttonConfirm).addClass('d-block');
       $(buttonConfirm).click(function() {
         // Get the canvas with image data from Cropper.js
          var canvas = cropper.getCroppedCanvas({
            width: 3180,
            height: 1788
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
<script src="{{ asset('lib/tabslet/jquery.tabslet.js') }}"></script>
<script>
  $('.tabs').tabslet();
</script>

@endsection
