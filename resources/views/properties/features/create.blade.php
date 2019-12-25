@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/iconpicker/css/fontawesome-iconpicker.css')}}">
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{isset($feature) ? 'Editar Sector' : 'Agregar Sector'}}</h1>
  <a href="{{route('features.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Sectores<span></a>
</div>


<div class="row justify-content-center">
  <div class="card col-md-8 mb-5">
    <div class="card-body" style="height: 500px;">
      <form autocomplete="off" method="POST" action="{{ isset($feature) ? route('features.update', $feature->id) : route('features.store') }}">
        @csrf
        @if(isset($feature))
          @method('PUT')
        @endif




          <div class="form-group mt-5">
            <label for="name" class="col-form-label">Nombre del Dato</label>
            <input id="feature_name" type="text" class="form-control @error('feature_name') is-invalid @enderror" name="feature_name" value="{{isset($feature) ? $feature->feature_name : ''}}">
            @error('feature_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

        <div class="form-group mt-5">
          <button type="submit" class="btn btn-success float-right">
            {{ isset($feature) ? 'Guardar' : 'Crear' }}
          </button>
        </div>
      </form>
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
