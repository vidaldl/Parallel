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
<link rel="stylesheet" href="{{asset('lib/iconpicker/css/fontawesome-iconpicker.css')}}">
@endsection
@section('content')
<div class="d-sm-flex align-items-center  mb-4" >
<form autocomplete="off" class="col-md-12" method="POST" action="{{route('style.update', $styles[0]->id)}}">
  @csrf
 <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<div class="form-row">
  <div class="col-md-4">
    <div class="form-group col-md-12">
      <label for="page_title">Titulo del Sitio</label><br>
      <input onchange="this.form.submit()" class="form-control col-md-6"  name="page_title" type="text" id="page_title" value="{{ $styles[0]->page_title }}">
    </div>
    <div class="form-group col-md-4">
      <label for="primary_color">Color Principal</label><br>
      <input onchange="this.form.submit()" class="form-control" name="primary_color" type="text" id="primary_color" value="{{ $styles[0]->primary_color }}">
    </div>
    <div class="form-group col-md-4">
      <label for="button_primary">Botón Desactivado</label><br>
      <input onchange="this.form.submit()" class="form-control" name="button_primary" type="text" id="button_primary" value="{{ $styles[0]->button_primary }}">
    </div>
    <div class="form-group col-md-4">
      <label for="button_secondary">Botón Activado</label><br>
      <input onchange="this.form.submit()" class="form-control" name="button_secondary" type="text" id="button_secondary" value="{{ $styles[0]->button_secondary }}">
    </div>
  </div>

  <div class="col-md-8">
  <div class="row">
    <h3 class="mx-auto" style="text-align: center; text-decoration: underline;">Personalizar Links Barra de Navegación</h3>
  </div>
  <div class="row">
    <!-- ICONOS1 -->
    <div class="col-md-6">

      <div class="form-group">
        <label for="button_secondary">Seleccine Ícono</label> <select name="show_link_1" onchange="this.form.submit()" class="float-right mr-5">
          <option value="1" {{ $styles[0]->show_link_1 == '1' ? 'selected' : '' }}>Mostrar</option>
          <option value="0" {{ $styles[0]->show_link_1 == '0' ? 'selected' : '' }}>Esconder</option>
        </select>
        <div class="input-group">
          <input id="custom_icon_1" type="hidden" data-placement="bottomRight" class="form-control @error('custom_icon_1') is-invalid @enderror"  name="custom_icon_1" value="{{ $styles[0]->custom_icon_1 }}">
          <div class="btn-group">
             <button type="button" class="btn btn-primary iconpicker-component"><i
                     class="{{  $styles[0]->custom_icon_1 }}"></i></button>
             <button type="button" class="icp1 icp-dd1 btn btn-primary dropdown-toggle"
                     data-selected="fa-car" data-toggle="dropdown">
                 <span class="caret"></span>
             </button>
             <div class="dropdown-menu"></div>
         </div>
        </div>
      </div>
    <div class="form-group">
      <label for="custom_link_text_1">Texto del Enlace</label><br>
      <input  class="form-control col-md-6"  name="custom_link_text_1" type="text" id="custom_link_text_1" value="{{ $styles[0]->custom_link_text_1 }}">
    </div>
    <div class="form-group">
      <label for="custom_link_address_1">Especifique Enlace</label><br>
      <input list="sections" class="form-control col-md-6"  name="custom_link_address_1" type="text" id="custom_link_address_1" placeholder="Http://" value="{{ $styles[0]->custom_link_address_1 }}">
      <small class="form-text text-muted">Asegurece de que el Link Contiene &nbsp;HTTP:// &nbsp;Antes de la Dirección</small>
    </div>
  </div>
  <!-- /ICONOS1 -->
  <!-- ICONOS2 -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="button_secondary">Seleccine Ícono</label>
        <select name="show_link_2" onchange="this.form.submit()" class="float-right mr-5">
          <option value="1" {{ $styles[0]->show_link_2 == '1' ? 'selected' : '' }}>Mostrar</option>
          <option value="0" {{ $styles[0]->show_link_2 == '0' ? 'selected' : '' }}>Esconder</option>
        </select>
        <div class="input-group">
          <input id="custom_icon_2" type="hidden" data-placement="bottomRight" class="form-control @error('custom_icon_2') is-invalid @enderror"  name="custom_icon_2" value="{{ $styles[0]->custom_icon_2 }}">
          <div class="btn-group">
             <button type="button" class="btn btn-primary iconpicker-component"><i
                     class="{{  $styles[0]->custom_icon_2 }}"></i></button>
             <button type="button" class="icp2 icp-dd2 btn btn-primary dropdown-toggle"
                     data-selected="fa-car" data-toggle="dropdown">
                 <span class="caret"></span>
             </button>
             <div class="dropdown-menu"></div>
         </div>
        </div>
      </div>
    <div class="form-group">
      <label for="custom_link_text_1">Texto del Enlace</label><br>
      <input class="form-control col-md-6"  name="custom_link_text_2" type="text" id="custom_link_text_2" value="{{ $styles[0]->custom_link_text_2 }}">
    </div>
    <div class="form-group">
      <label for="custom_link_address_1">Especifique Enlace</label><br>
      <input list="sections" class="form-control col-md-6"  name="custom_link_address_2" type="text" id="custom_link_address_2" placeholder="Http://" value="{{ $styles[0]->custom_link_address_2 }}">
      <small class="form-text text-muted">Asegurece de que el Link Contiene &nbsp;HTTP:// &nbsp;Antes de la Dirección</small>
    </div>

    </div>
  <!-- /ICONOS2 -->
  <!-- ICONOS LINK SECTION LIST -->
  <datalist id="sections">
    <option value="#inicio">Inicio</option>
    <option value="#servicios">Servicios</option>
    <option value="#infoSlider">Slider de Info.</option>
    <option value="#articulos">Artículos</option>
    <option value="#contact">Contacto</option>
  </datalist>
  <!-- /ICONOS LINK SECTION LIST -->

  <button type="submit" class="btn btn-success mx-auto mt-5 mb-3">Actualizar</button>
  </div>
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
    <!-- Seccion 1 -->
      <div class="col-md-4 mb-4 {{ $contenidosection1s[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
        <form method="POST" action="{{route('section1.display', $contenidosection1s[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Inicio</h6></span>
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
    <!-- /Seccion 1 -->

    <!-- Servicios -->
      <div class="col-md-4 mb-4 {{ $contenidosection2s[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <form method="POST" action="{{route('section2.display', $contenidosection2s[0]->id)}}">
              @csrf
              <div class="row">
                <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Servicios</h6></span>
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
    <!-- /Servicios -->

    <!-- Info Slider -->
      <div class="col-md-4 mb-4 {{ $info_slider_texts[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
        <form method="POST" action="{{route('infoSlider.display', $info_slider_texts[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion</h6></span>
              <select onchange="this.form.submit()" name="infoSlider" class="col-md-6  float-right">
                <option value="1" {{ $info_slider_texts[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $info_slider_texts[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
          </div>
          <a href="editInfoSlider/{{$info_slider_texts[0]->id}}">
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/infoSlider.png')}}" alt="">
              </div>
            </div>
          </a>
          <div class="card-footer">
            <a href="editInfoSlider/{{$info_slider_texts[0]->id}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    <!-- /Info Slider -->

    <!-- Info Slider 2 -->
      <div class="col-md-4 mb-4 {{ $info_slider_text2s[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
        <form method="POST" action="{{route('infoSlider2.display', $info_slider_text2s[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion 2</h6></span>
              <select onchange="this.form.submit()" name="infoSlider" class="col-md-6  float-right">
                <option value="1" {{ $info_slider_text2s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $info_slider_text2s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
          </div>
          <a href="editInfoSlider2/{{$info_slider_text2s[0]->id}}">
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/infoSlider.png')}}" alt="">
              </div>
            </div>
          </a>
          <div class="card-footer">
            <a href="editInfoSlider2/{{$info_slider_text2s[0]->id}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    <!-- /Info Slider 2 -->

    <!-- Info Slider 3 -->
      <div class="col-md-4 mb-4 {{ $info_slider_text3s[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
        <form method="POST" action="{{route('infoSlider3.display', $info_slider_text3s[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion 3</h6></span>
              <select onchange="this.form.submit()" name="infoSlider" class="col-md-6  float-right">
                <option value="1" {{ $info_slider_text3s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $info_slider_text3s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
          </div>
          <a href="editInfoSlider3/{{$info_slider_text3s[0]->id}}">
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/infoSlider.png')}}" alt="">
              </div>
            </div>
          </a>
          <div class="card-footer">
            <a href="editInfoSlider3/{{$info_slider_text3s[0]->id}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    <!-- /Info Slider 3 -->

    <!-- Pricing -->
      <div class="col-md-4 mb-4 {{ $pricings[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
        <form method="POST" action="{{route('pricing.display', $pricings[0]->id)}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección de Precios</h6></span>
              <select onchange="this.form.submit()" name="pricing" class="col-md-6  float-right">
                <option value="1" {{ $pricings[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
                <option value="0" {{ $pricings[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
              </select>
          </div>
        </form>
          </div>
          <a href="editPricing">
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/pricing.png')}}" alt="">
              </div>
            </div>
          </a>
          <div class="card-footer">
            <a href="editPricing">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    <!-- Pricing -->

    <!-- Info -->
      <div class="col-md-4 mb-4 {{ $contenidosection3s[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <form method="POST" action="{{route('section3.display', $contenidosection3s[0]->id)}}">
              @csrf
              <div class="row">
                <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Seccion Info</h6></span>
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
    <!-- /Info -->

    <!-- Articulos -->
      <div class="col-md-4 mb-4 {{ $contenidosection4s[0]->display == '0' ? 'd-none' : ''}}">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <form method="POST" action="{{route('section4.display', $contenidosection4s[0]->id)}}">
              @csrf
              <div class="row">
                <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Artículos</h6></span>
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
    <!-- /Articulos -->

    <!-- Contact -->
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
    <!-- Contact -->

    <!-- Pie de Pagina -->
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
    <!-- /Pie de Pagina -->

  </div>

  <div id="inactivo" class="row tabdiv">
    @if($contenidosection1s[0]->display == '1'
    && $contenidosection2s[0]->display == '1'
    && $info_slider_texts[0]->display == '1'
    && $info_slider_text2s[0]->display == '1'
    && $info_slider_text3s[0]->display == '1'
    && $pricings[0]->display == '1'
    && $contenidosection3s[0]->display == '1'
    && $contenidosection4s[0]->display == '1'
    && $contenidosection5s[0]->display == '1'
    && $contenidosectionfooters[0]->display == '1')
    <h1 class="mx-auto mt-3">No hay secciones inactivas</h1>
    @else

  <!-- Seccion 1 -->
    <div class="col-md-4 mb-4 {{ $contenidosection1s[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
      <form method="POST" action="{{route('section1.display', $contenidosection1s[0]->id)}}">
        @csrf
        <div class="row">
          <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Inicio</h6></span>
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
  <!-- /Seccion 1 -->

  <!-- Servicios -->
    <div class="col-md-4 mb-4 {{ $contenidosection2s[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <form method="POST" action="{{route('section2.display', $contenidosection2s[0]->id)}}">
            @csrf
            <div class="row">
              <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Servicios</h6></span>
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
  <!-- /Servicios -->

  <!-- Slider Info 1 -->
    <div class="col-md-4 mb-4 {{ $info_slider_texts[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
      <form method="POST" action="{{route('infoSlider.display', $info_slider_texts[0]->id)}}">
        @csrf
        <div class="row">
          <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion</h6></span>
            <select onchange="this.form.submit()" name="infoSlider" class="col-md-6  float-right">
              <option value="1" {{ $info_slider_texts[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
              <option value="0" {{ $info_slider_texts[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
            </select>
        </div>
      </form>
        </div>
        <a href="editInfoSlider/{{$info_slider_texts[0]->id}}">
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/infoSlider.png')}}" alt="">
            </div>
          </div>
        </a>
        <div class="card-footer">
          <a href="editInfoSlider/{{$info_slider_texts[0]->id}}">Editar contenido &rarr;</a>
        </div>
      </div>
    </div>
  <!-- /Slider Info 1 -->

  <!-- Info Slider 2 -->
    <div class="col-md-4 mb-4 {{ $info_slider_text2s[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
      <form method="POST" action="{{route('infoSlider2.display', $info_slider_text2s[0]->id)}}">
        @csrf
        <div class="row">
          <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion 2</h6></span>
            <select onchange="this.form.submit()" name="infoSlider" class="col-md-6  float-right">
              <option value="1" {{ $info_slider_text2s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
              <option value="0" {{ $info_slider_text2s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
            </select>
        </div>
      </form>
        </div>
        <a href="editInfoSlider2/{{$info_slider_text2s[0]->id}}">
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/infoSlider.png')}}" alt="">
            </div>
          </div>
        </a>
        <div class="card-footer">
          <a href="editInfoSlider2/{{$info_slider_text2s[0]->id}}">Editar contenido &rarr;</a>
        </div>
      </div>
    </div>
  <!-- /Info Slider 2 -->

  <!-- Info Slider 3 -->
    <div class="col-md-4 mb-4 {{ $info_slider_text3s[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
      <form method="POST" action="{{route('infoSlider3.display', $info_slider_text3s[0]->id)}}">
        @csrf
        <div class="row">
          <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion 3</h6></span>
            <select onchange="this.form.submit()" name="infoSlider" class="col-md-6  float-right">
              <option value="1" {{ $info_slider_text3s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
              <option value="0" {{ $info_slider_text3s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
            </select>
        </div>
      </form>
        </div>
        <a href="editInfoSlider3/{{$info_slider_text3s[0]->id}}">
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/infoSlider.png')}}" alt="">
            </div>
          </div>
        </a>
        <div class="card-footer">
          <a href="editInfoSlider3/{{$info_slider_text3s[0]->id}}">Editar contenido &rarr;</a>
        </div>
      </div>
    </div>
  <!-- /Info Slider 3 -->

  <!-- Pricing -->
    <div class="col-md-4 mb-4 {{ $pricings[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
      <form method="POST" action="{{route('pricing.display', $pricings[0]->id)}}">
        @csrf
        <div class="row">
          <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección de Precios</h6></span>
            <select onchange="this.form.submit()" name="pricing" class="col-md-6  float-right">
              <option value="1" {{ $pricings[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
              <option value="0" {{ $pricings[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
            </select>
        </div>
      </form>
        </div>
        <a href="editPricing}}">
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/pricing.png')}}" alt="">
            </div>
          </div>
        </a>
        <div class="card-footer">
          <a href="editPricing">Editar contenido &rarr;</a>
        </div>
      </div>
    </div>
  <!-- /Pricing -->

  <!-- Info -->
    <div class="col-md-4 mb-4 {{ $contenidosection3s[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <form method="POST" action="{{route('section3.display', $contenidosection3s[0]->id)}}">
            @csrf
            <div class="row">
              <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección Info</h6></span>
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
  <!-- Info -->

  <!-- Artículos -->
    <div class="col-md-4 mb-4 {{ $contenidosection4s[0]->display == '1' ? 'd-none' : ''}}">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <form method="POST" action="{{route('section4.display', $contenidosection4s[0]->id)}}">
            @csrf
            <div class="row">
              <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Artículos</h6></span>
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
  <!-- /Artículos -->

  <!-- Contacto -->
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
  <!-- Contacto -->

  <!-- Pie de Pagina -->
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
  <!-- Pie de Pagina -->


    @endif

  </div>

  <div id="paginas" class="row tabdiv">
    <div class="col-md-4 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Acerca de</h6>
        </div>
        <a href="edit-about/{{$contenidoabouts[0]->id}}">
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/sections/sectionAbout.png')}}" alt="">
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
<script src="{{asset('lib/iconpicker/js/fontawesome-iconpicker.js')}}"></script>
<script>
$(document).ready(function () {
  $('.icp-dd1').iconpicker();
  $('.icp-dd2').iconpicker();
})
$('.icp1').on('iconpickerSelected', function (e) {
    $('#custom_icon_1').get(0).value = e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
  });
$('.icp2').on('iconpickerSelected', function (e) {
    $('#custom_icon_2').get(0).value = e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
  });
</script>
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
