@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{isset($servicio) ? 'Editar Servicio' : 'Nuevo Servicio'}}</h1>
  <a href="{{route('servicios.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Servicios<span></a>
</div>


<div class="row justify-content-center">
  <div class="card col-md-8 mb-5">
    <div class="card-body">
      <form autocomplete="off" method="POST" action="{{ isset($servicio) ? route('servicios.update', $servicio->id) : route('servicios.store') }}">
        @csrf
        @if(isset($servicio))
          @method('PUT')
        @endif


          <div class="form-group">
            <label for="icon" class="col-form-label">Ícono</label>
            <input id="icon" type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" value="{{isset($servicio) ? $servicio->icon : ''}}">
            @error('icon')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="title" class="col-form-label">Titulo del Post</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{isset($servicio) ? $servicio->title : ''}}">
            @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

        <div class="form-group">
          <label for="contenido" class="col-form-label">Descripcion del Post</label>
          <input id="contenido" name="contenido" cols="5" rows="1" class="form-control @error('contenido') is-invalid @enderror" value="{{ isset($servicio) ? $servicio->contenido : '' }}">
          @error('contenido')
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


@endsection



@section('script')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
  <!-- <script>
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
  </script> -->
@endsection

@section('css')
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@endsection
