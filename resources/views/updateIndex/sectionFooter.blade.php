@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Pie de Página</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/#footer"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

          <form method="POST" action="{{route('sectionFooter.update', $contenidosectionfooters[0]->id)}}" enctype="multipart/form-data">
            @csrf

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/sectionFooter.png')}}">
              </div>
              <div class="form-group">
                <label for="copy" class="col-form-label">Nombre de la Empresa</label>
                <input id="copy" type="input" name="copy" class="form-control @error('copy') is-invalid @enderror"  value="{{ $contenidosectionfooters[0]->copy }}">
                  @error('copy')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="facebook_link" class="col-form-label">Link de Facebook</label>
                <input id="facebook_link" type="input" name="facebook_link" class="form-control @error('facebook_link') is-invalid @enderror" value="{{ $contenidosectionfooters[0]->facebook_link }}">
                  @error('facebook_link')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="instagram_link" class="col-form-label">Link de Instagram</label>
                <input id="instagram_link" type="input" name="instagram_link" class="form-control @error('instagram_link') is-invalid @enderror"  value="{{ $contenidosectionfooters[0]->instagram_link }}">
                  @error('instagram_link')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="twitter_link" class="col-form-label">Link de Twitter</label>
                <input id="twitter_link" type="twitter_link" name="twitter_link" class="form-control @error('twitter_link') is-invalid @enderror"  value="{{ $contenidosectionfooters[0]->twitter_link }}">
                  @error('twitter_link')
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
</div>
@endsection
