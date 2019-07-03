@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">

  <div class="col-md-4 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
    <form method="POST" action="{{route('section1.display', $contenidosection1s[0]->id)}}">
      @csrf
      <div class="row">
        <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección 1</h6></span>
          <select onchange="this.form.submit()" name="section1" class="col-md-6  float-right">
            <option value="1" {{ $contenidosection1s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
            <option value="0" {{ $contenidosection1s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
          </select>
      </div>
    </form>
      </div>
      <a href="editsection1/{{$contenidosection1s[0]->id}}">
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/section1.png')}}" alt="">
          </div>
        </div>
      </a>
      <div class="card-footer">
        <a href="editsection1/{{$contenidosection1s[0]->id}}">Editar contenido &rarr;</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <form method="POST" action="{{route('section2.display', $contenidosection2s[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección 2</h6></span>
              <select onchange="this.form.submit()" name="section2" class="col-md-6  float-right">
                <option value="1" {{ $contenidosection2s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $contenidosection2s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
      </div>
      <a href="editsection2/{{$contenidosection2s[0]->id}}">
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/section2.png')}}" alt="">
          </div>
        </div>
      </a>
      <div class="card-footer">
        <a href="editsection2/{{$contenidosection2s[0]->id}}">Editar contenido &rarr;</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <form method="POST" action="{{route('section3.display', $contenidosection3s[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección 3</h6></span>
              <select onchange="this.form.submit()" name="section3" class="col-md-6  float-right">
                <option value="1" {{ $contenidosection3s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $contenidosection3s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
      </div>
      <a href="editsection3/{{$contenidosection3s[0]->id}}">
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/section3.png')}}" alt="">
          </div>
        </div>
      </a>
      <div class="card-footer">
        <a href="editsection3/{{$contenidosection3s[0]->id}}">Editar contenido &rarr;</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <form method="POST" action="{{route('section4.display', $contenidosection4s[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección 4</h6></span>
              <select onchange="this.form.submit()" name="section4" class="col-md-6  float-right">
                <option value="1" {{ $contenidosection4s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $contenidosection4s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
      </div>
      <a href="editsection4/{{$contenidosection4s[0]->id}}">
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/section4.png')}}" alt="">
          </div>
        </div>
      </a>
      <div class="card-footer">
        <a href="editsection4/{{$contenidosection4s[0]->id}}">Editar contenido &rarr;</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <form method="POST" action="{{route('section5.display', $contenidosection5s[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección Contacto</h6></span>
              <select onchange="this.form.submit()" name="section5" class="col-md-6  float-right">
                <option value="1" {{ $contenidosection5s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $contenidosection5s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
      </div>
      <a href="editsection5/{{$contenidosection5s[0]->id}}">
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/section5.png')}}" alt="">
          </div>
        </div>
      </a>
      <div class="card-footer">
        <a href="editsection5/{{$contenidosection5s[0]->id}}">Editar contenido &rarr;</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <form method="POST" action="{{route('sectionFooter.display', $contenidosectionfooters[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Pie de Página</h6></span>
              <select onchange="this.form.submit()" name="sectionFooter" class="col-md-6  float-right">
                <option value="1" {{ $contenidosectionfooters[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $contenidosectionfooters[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
      </div>
      <a href="editsectionFooter/{{$contenidosectionfooters[0]->id}}">
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/sectionFooter.png')}}" alt="">
          </div>
        </div>
      </a>
      <div class="card-footer">
        <a href="editsectionFooter/{{$contenidosectionfooters[0]->id}}">Editar contenido &rarr;</a>
      </div>
    </div>
  </div>

<a href="edit-about/{{$contenidoabouts[0]->id}}"class="btn btn-primary mx-auto mb-2">Página Acerca de&nbsp;&nbsp;<i class="fas fa-chevron-down"></i></a>
</div>


@endsection
