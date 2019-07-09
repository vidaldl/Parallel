@extends('layouts.app')
@section('css')
  <link href="{{ asset('lib/spectrum/spectrum.css') }}" rel="stylesheet">
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
<div class="d-sm-flex align-items-center  mb-4" >
<form class="col-md-12" method="POST" action="{{route('style.update', $styles[0]->id)}}">
  @csrf
 <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<div class="form-row">
  <div class="form-group col-md-4">
    <label for="primary_color">Color Principal</label>
    <input onchange="this.form.submit()" class="form-control" name="primary_color" type="text" id="primary_color" value="{{ $styles[0]->primary_color }}">
  </div>
  <div class="form-group col-md-4">
    <label for="button_primary">Botón: Color Principal</label>
    <input onchange="this.form.submit()" class="form-control" name="button_primary" type="text" id="button_primary" value="{{ $styles[0]->button_primary }}">
  </div>
  <div class="form-group col-md-4">
    <label for="button_secondary">Botón: Color Secundario</label>
    <input onchange="this.form.submit()" class="form-control" name="button_secondary" type="text" id="button_secondary" value="{{ $styles[0]->button_secondary }}">
  </div>
</div>
</form>
</div>

<div class="tabs">

    <ul class="tabs-navigation horizontal">
      <li class="li"><a class="a" href="#activo">Activas</a></li>
      <li class="li"><a class="a" href="#inactivo">Inactivas</a></li>
      <li class="li"><a class="a" href="#paginas">Páginas</a></li>
    </ul>




  <div id="activo" class="row tabdiv">

      <div class="col-md-4 mb-4 {{ $contenidosection1s[0]->display == '0' ? 'd-none' : ''}}">
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

      <div class="col-md-4 mb-4 {{ $contenidosection2s[0]->display == '0' ? 'd-none' : ''}}">
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

      <div class="col-md-4 mb-4 {{ $contenidosection3s[0]->display == '0' ? 'd-none' : ''}}">
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

      <div class="col-md-4 mb-4 {{ $contenidosection4s[0]->display == '0' ? 'd-none' : ''}}">
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

      <div class="col-md-4 mb-4 {{ $contenidosection5s[0]->display == '0' ? 'd-none' : ''}}">
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

      <div class="col-md-4 mb-4 {{ $contenidosectionfooters[0]->display == '0' ? 'd-none' : ''}}">
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



  </div>

  <div id="inactivo" class="row tabdiv">
    @if($contenidosection1s[0]->display == '1'
    && $contenidosection2s[0]->display == '1'
    && $contenidosection3s[0]->display == '1'
    && $contenidosection4s[0]->display == '1'
    && $contenidosection5s[0]->display == '1'
    && $contenidosectionfooters[0]->display == '1')
    <h1 class="mx-auto mt-3">No hay secciones inactivas</h1>
    @else
    <div class="col-md-4 mb-4 {{ $contenidosection1s[0]->display == '1' ? 'd-none' : ''}}">
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

    <div class="col-md-4 mb-4 {{ $contenidosection2s[0]->display == '1' ? 'd-none' : ''}}">
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

    <div class="col-md-4 mb-4 {{ $contenidosection3s[0]->display == '1' ? 'd-none' : ''}}">
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

    <div class="col-md-4 mb-4 {{ $contenidosection4s[0]->display == '1' ? 'd-none' : ''}}">
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

    <div class="col-md-4 mb-4 {{ $contenidosection5s[0]->display == '1' ? 'd-none' : ''}}">
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

    <div class="col-md-4 mb-4 {{ $contenidosectionfooters[0]->display == '1' ? 'd-none' : ''}}">
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



    @endif

  </div>

  <div id="paginas" class="row tabdiv">
    <div class="col-md-4 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Sección 1</h6>
        </div>
        <a href="edit-about/{{$contenidoabouts[0]->id}}">
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/section1.png')}}" alt="">
            </div>
          </div>
        </a>
        <div class="card-footer">
          <a href="edit-about/{{$contenidoabouts[0]->id}}">Editar contenido &rarr;</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
@section('script')
<script src="{{ asset('lib/spectrum/spectrum.js') }}"></script>
<script>
  $('#primary_color').spectrum({
    preferredFormat: "hex",
   showInput: true,
  });
  $('#button_primary').spectrum({
    preferredFormat: "hex",
   showInput: true,
  });
  $('#button_secondary').spectrum({
    preferredFormat: "hex",
   showInput: true,
  });
</script>
<script src="{{ asset('lib/tabslet/jquery.tabslet.js') }}"></script>
<script>
  $('.tabs').tabslet();
</script>
@endsection
