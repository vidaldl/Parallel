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
                <form id="log" method="POST" action="{{route('section1.update', $contenidosection1s[0]->id)}}" enctype="multipart/form-data">
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
                  <button id="back" type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fas fa-image"></i></button>
                </div>
                </form>
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
        <!-- Static Form -->
          <form id="section1" method="POST" action="{{route('section1.update', $contenidosection1s[1]->id)}}" enctype="multipart/form-data">
            <div class="row">
              @csrf
                <div class="form-group col-md-6">
                  <label class="col-form-label">Imagen de Fondo</label><br>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBackSlide1">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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

                    <label for="image" class="col-form-label">Imagen de Logo</label><br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogoSlide1">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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
            <div class="modal fade" id="modalLogoSlide1" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header" style="background-color:#4066D4;">
                  <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <form id="log" method="POST" action="{{route('section1.update', $contenidosection1s[1]->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                        <label for="logo" class="col-form-label">Imagen Slide 1</label>
                        <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                        @error('logo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>
                      <div class="col-md-8">
                        <img src="{{'/storage/' . $contenidosection1s[1]->logo}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
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
            <div class="modal fade" id="modalBackSlide1" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header" style="background-color:#4066D4;">
                  <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <form method="POST" action="{{route('section1.update', $contenidosection1s[1]->id)}}" enctype="multipart/form-data">
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
                        <img src="{{'/storage/' . $contenidosection1s[1]->background_image}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer" style="background-color:#4066D4;">
                    <button id="back" type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fas fa-image"></i></button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- End modal background-image -->

          <!-- END static form -->
        </div>
        <!-- End Slide 1 -->

        <!-- Slide 2 -->
        <div id="slide2" class="tabdiv" style="padding: 10px; background-color: #E5E5E5!important;">
          <!-- Static Form -->
            <form id="section1" method="POST" action="{{route('section1.update', $contenidosection1s[2]->id)}}" enctype="multipart/form-data">
              <div class="row">
                @csrf
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Imagen de Fondo</label><br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBackSlide2">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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

                      <label for="image" class="col-form-label">Imagen de Logo</label><br>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogoSlide2">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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
              <div class="modal fade" id="modalLogoSlide2" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:#4066D4;">
                    <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form id="log" method="POST" action="{{route('section1.update', $contenidosection1s[2]->id)}}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                          <label for="logo" class="col-form-label">Imagen Slide 2</label>
                          <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                          @error('logo')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                          </div>
                        </div>
                        <div class="col-md-8">
                          <img src="{{'/storage/' . $contenidosection1s[2]->logo}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
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
              <div class="modal fade" id="modalBackSlide2" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:#4066D4;">
                    <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{route('section1.update', $contenidosection1s[2]->id)}}" enctype="multipart/form-data">
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
                          <img src="{{'/storage/' . $contenidosection1s[2]->background_image}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer" style="background-color:#4066D4;">
                      <button id="back" type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fas fa-image"></i></button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End modal background-image -->

            <!-- END static form -->
        </div>
        <!-- End Slide 2 -->

        <!-- Slide 3 -->
        <div id="slide3" class="tabdiv" style="padding: 10px; background-color: #E5E5E5!important;">
          <!-- Static Form -->
            <form id="section1" method="POST" action="{{route('section1.update', $contenidosection1s[2]->id)}}" enctype="multipart/form-data">
              <div class="row">
                @csrf
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Imagen de Fondo</label><br>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalBackSlide3">Subir Fondo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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

                      <label for="image" class="col-form-label">Imagen de Logo</label><br>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogoSlide3">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
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
              <div class="modal fade" id="modalLogoSlide3" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:#4066D4;">
                    <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form id="log" method="POST" action="{{route('section1.update', $contenidosection1s[3]->id)}}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                          <label for="logo" class="col-form-label">Imagen Slide 3</label>
                          <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                          @error('logo')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                          </div>
                        </div>
                        <div class="col-md-8">
                          <img src="{{'/storage/' . $contenidosection1s[3]->logo}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
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
              <div class="modal fade" id="modalBackSlide3" tabindex="-1" role="dialog" aria-labelledby="modalBack" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:#4066D4;">
                    <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{route('section1.update', $contenidosection1s[3]->id)}}" enctype="multipart/form-data">
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
                          <img src="{{'/storage/' . $contenidosection1s[3]->background_image}}" style="height:100%;width:100%;" class="img-fluid img-thumbnail rounded">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer" style="background-color:#4066D4;">
                      <button id="back" type="submit" class="btn btn-success">Actualizar&nbsp;<i class="fas fa-image"></i></button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End modal background-image -->

            <!-- END static form -->
        </div>
        <!-- End Slide 3 -->
      <!-- End Carousel Sections -->
        </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<!-- <script>
$('#back').click(function() {
  $('#section1').submit();
});
</script> -->
<script src="{{ asset('lib/tabslet/jquery.tabslet.js') }}"></script>
<script>
  $('.tabs').tabslet();
</script>

@endsection
