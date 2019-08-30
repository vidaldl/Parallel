@extends('layouts.index')

@section('style')
  @include('indexStyle')

@endsection

@section('content')
<!--INICIO-->
@include('sections.inicio')
<!--/INICIO -->
  <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <a href="#inicio"><img src="img/logo-hidalgo-small.png" alt="" title="" /></a> -->
        <!-- Uncomment below if you prefer to use a text image -->
        <!-- <h3 class="" ><a href="#hero">Grupo Hidalgo</a></h3> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#servicios">Servicios</a></li>
          <li><a href="#articulos">Artículos</a></li>
          <li><a href="/about">Acerca De</a></li>
          <li><a href="#contact">Contacto</a></li>

        </ul>
        <ul class="nav-menu pull-right">
          <li class="{{$styles[0]->show_link_1 == 0 ? 'd-none' : ''}}"><a href="{!! $styles[0]->custom_link_address_1 !!}"><i class="{{$styles[0]->custom_icon_1}}" style="font-size:17px;"></i>&nbsp;&nbsp;{{$styles[0]->custom_link_text_1}}</a></li>
          <li class="{{$styles[0]->show_link_2 == 0 ? 'd-none' : ''}}"><a href="{!! $styles[0]->custom_link_address_2 !!}"><i class="{{$styles[0]->custom_icon_2}}" style="font-size:17px;"></i>&nbsp;&nbsp;{{$styles[0]->custom_link_text_2}}</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
      <nav class="nav social-nav pull-right d-none d-lg-inline">

      </nav>

    </div>
  </header>
  <!-- #header -->




@foreach($orders as $order)
  @php
    $path = 'sections.' . $order->section ;
  @endphp
  @if($order->display == 1)
    @include($path)
  @endif
@endforeach


  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>
@endsection

<!--Footer-->
@include('sections.footer')
<!--/Footer-->



@section('script')
<script type="text/javascript">

  $(document).ready(function() {

    $(".lol").each(function () {
      len=$(this).text().length;
      str= $(this).text().substr(0,130);
      lastIndexOf = str.lastIndexOf(" ");
      if(len>130) {
          $(this).text(str.substr(0, lastIndexOf) + '...');
      }
    });
    $('.flexslider').flexslider({
  animation: "slide"
});
  });

  $(window).load(function() {
    var height1 = $('.imageH').height();
    var height2 = $('.btnH').height();
    var sum = height1 - height2 - height2;
    $('.textHeight').css('min-height', sum + 'px');
    var windowWidth = $(window).width();

    if (windowWidth < 768) {
      $('#btnH').addClass('mt-5')
    }
  });

</script>

@endsection
