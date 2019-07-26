@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/iconpicker/css/fontawesome-iconpicker.css')}}">
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{isset($servicio) ? 'Editar Servicio' : 'Nuevo Servicio'}}</h1>
  <a href="{{route('servicios.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Servicios<span></a>
</div>


<div class="row justify-content-center">
  <div class="card col-md-8 mb-5">
    <div class="card-body" style="height: 500px;">
      <form autocomplete="off" method="POST" action="{{ isset($servicio) ? route('servicios.update', $servicio->id) : route('servicios.store') }}">
        @csrf
        @if(isset($servicio))
          @method('PUT')
        @endif


          <div class="form-group">
            <label for="icon" class="col-form-label">Ícono</label>
            <div class="input-group">
              <input id="icon" type="text" data-placement="bottomRight" class="form-control @error('icon') is-invalid @enderror"  name="icon" value="{{isset($servicio) ? $servicio->icon : ''}}">
              <div class="btn-group">
                 <button type="button" class="btn btn-primary iconpicker-component"><i
                         class="{{ isset($servicio) ? $servicio->icon : 'fab fa-font-awesome-alt' }}"></i></button>
                 <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                         data-selected="fa-car" data-toggle="dropdown">
                     <span class="caret"></span>
                     <span class="sr-only">Toggle Dropdown</span>
                 </button>
                 <div class="dropdown-menu"></div>
             </div>

            @error('icon')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mt-5">
            <label for="title" class="col-form-label">Titulo del Post</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{isset($servicio) ? $servicio->title : ''}}">
            @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

        <div class="form-group mt-5">
          <label for="contenido" class="col-form-label">Descripcion del Post</label>
          <textarea id="contenido" name="contenido" class="form-control @error('contenido') is-invalid @enderror" > {{ isset($servicio) ? $servicio->contenido : '' }} </textarea>
          @error('contenido')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group mt-5">
          <button type="submit" class="btn btn-success float-right">
            {{ isset($post) ? 'Guardar' : 'Publicar' }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>

@endsection



@section('script')
<script src="{{asset('lib/iconpicker/js/fontawesome-iconpicker.js')}}"></script>
<script>
$(document).ready(function () {
  $('.icp-dd').iconpicker();
})
$('.icp').on('iconpickerSelected', function (e) {
    $('#icon').get(0).value = e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
  });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
<script>
ClassicEditor.create( document.querySelector( '#contenido' ), {
      removePlugins: [ 'Heading', 'Link' ],
      toolbar: [ 'bold', 'italic',]
    }).catch( error => {
        console.error( error );
    } );
</script>

@endsection
