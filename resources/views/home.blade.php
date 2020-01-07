@extends('layouts.app')
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('lib/spectrum/spectrum.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/tabslet/jquery.tabslet.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<style media="screen">
.ghost {
  opacity: .5;
  background: #C8EBFB;
}
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
 <h1 class="h3 mb-3 text-gray-800">Manejador</h1>
<div class="form-row">
  <div class="col-md-4">
    <div class="form-group col-md-12">
      <label for="page_title">Titulo del Sitio</label><br>
      <input onchange="this.form.submit()" class="form-control col-md-6"  name="page_title" type="text" id="page_title" value="{{ $styles[0]->page_title }}">
    </div>
    <!-- <div class="form-group col-md-4">
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
    </div> -->
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


  <div id="activo" class=" tabdiv">
    <div class="row">
      <div class="container">
        <div class="col-md-12">
          @if($contenidosection1s[0]->display == 1)
            @include('updateIndex.sections.inicio')
          @endif
        </div>
        <div class="" id="sort">
        @foreach($orders as $order)
          <div id="{{$order->id}}" class="col-md-12 sortable">
            @php
              $path = 'updateIndex.sections.' . $order->section ;
            @endphp
            @if($order->display == 1)
              @include($path)
            @endif
          </div>
        @endforeach
        </div>
        <div class="col-md-12">
          @if($contenidosectionfooters[0]->display == 1)
            @include('updateIndex.sections.footer')
          @endif
        </div>
      </div>
    </div>
  </div>

<div id="inactivo" class="tabdiv">

    <!-- <h1 class="mx-auto mt-3">No hay secciones inactivas</h1> -->


    <div class="row">
      <div class="container">
        <div class="col-md-12">
          @if($contenidosection1s[0]->display == 0)
            @include('updateIndex.sections.inicio')
          @endif
        </div>
        @foreach($orders as $order)
          <div id="{{$order->id}}" class="col-md-12">
            @php
              $path = 'updateIndex.sections.' . $order->section ;
            @endphp
            @if($order->display == 0)
              @include($path)
            @endif
          </div>
        @endforeach
        <div class="col-md-12">
          @if($contenidosectionfooters[0]->display == 0)
            @include('updateIndex.sections.footer')
          @endif
        </div>
      </div>
    </div>



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
  $("#sort").sortable({
        axis: 'y',
        placeholder: 'highlight',
        handle: '.handle',
        containment: '.tabdiv',
        scroll:'auto',
        cursor: 'move',
        tolerance: 'pointer',
        revert: 'invalid',
        placeholder: 'col-md-12 sortable',
        forceHelperSize: true,
        ghostClass: 'sortable-ghost',
        sort: function(e) {
          $('.line-space').fadeOut();
        },
        update: function( ) {
          $('.line-space').fadeIn();
        },
        stop: function() {
          $.map($(this).find('.sortable'), function(el) {
            var itemID = el.id;
            var itemIndex = $(el).index();
            console.log(itemID);
            console.log(itemIndex);

            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              url: '/order',
              type: 'POST',
              dataType: 'json',
              data: {itemID: itemID, itemIndex: itemIndex},

            })
          });
        }

     });


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
