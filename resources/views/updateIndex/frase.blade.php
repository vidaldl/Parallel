
@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Frase Principal</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe id="ifra" src="/#frase"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                <img class="img-fluid px-3 px-sm-4" src="{{asset('img/sections/frase.png')}}">
              </div>
              <div class="form-group">
                <label for="title" class="col-form-label">Titulo</label>
                <input id="title" type="input" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ $frases[0]->title }}">
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>

              <div class="form-group">
                <button id="ajButton" class="btn btn-success float-right">Actualizar</button>
              </div>


        </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>

 $("#ajButton").click(function(e){
    e.preventDefault();

    var title = $("#title").val();


    $.ajax({
           type:'POST',
           dataType: 'json',
           url:'/frase/1',
           data:{"_token": "{{ csrf_token() }}",
           title:title
          },
           success:function(data){
              alert(data.success);
           }
        });
    document.getElementById('ifra').contentDocument.location.reload(true);
      });
</script>
@endsection
