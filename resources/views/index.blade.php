@extends('layouts.index')

@section('style')

<style>
    .portfolio h2 {
    color: #3742fa;
    margin-bottom: 25px;
    }

    .portfolio-grid {
    margin-top: 65px;
    }

    .portfolio-grid .row {
    margin: 0;
    }

    .portfolio-grid .row > div {
    padding: 0;
    }

    .portfolio-grid .row > div .card img {
    width: 100%;

    }
    .portfolio-grid .row > div .card {

    margin-bottom: 0px;
    }
    /* BUTTON STYLE */
    .btn {
      background-color: {{$styles[0]->button_primary}};
    }

    .btn:hover {
      background-color: {{$styles[0]->button_secondary}};
    }
    #contact .form button[type="submit"] {
      background: {{$styles[0]->button_primary}};
    }
    #contact .form button[type="submit"]:hover {
      background: {{$styles[0]->button_secondary}};
    }

    /* PRIMARY COLOR STYLES */
    .h1color {
      color: {{$styles[0]->primary_color}};
    }



    .btn-ghost:hover, #articuloTitle {

      color: {{$styles[0]->primary_color}};
    }
    .scrolltop {
      background: {{$styles[0]->primary_color}};
    }
    #header {
      background: {{$styles[0]->primary_color}};
    }
    .nav-menu ul li:hover {
      background: {{$styles[0]->primary_color}};
    }
    #mobile-nav ul .menu-has-children i.fa-chevron-up {
      color: {{$styles[0]->primary_color}};
    }
    #mobile-nav ul .menu-item-active {
      color: {{$styles[0]->primary_color}};
    }
    .stats-col .circle {
      border: 6px solid {{$styles[0]->primary_color}};
    }

    .feature-col .feature-icon {
      background: {{$styles[0]->primary_color}};
    }
    .cta {
      background-color: {{$styles[0]->primary_color}};
    }
    .portfolio h1 {
      color: {{$styles[0]->primary_color}};
    }
    .infoSlider h2 {
      margin-bottom: 25px;


    }
    .team h2 {
      color: {{$styles[0]->primary_color}};
    }
    .team .card:hover .card-title-wrap {
      background-color: {{$styles[0]->primary_color}};
    }

    #contact .info i {
      color: {{$styles[0]->primary_color}};
    }
    #contact .form #sendmessage {
      color: {{$styles[0]->primary_color}};
      border-color: {{$styles[0]->primary_color}};
    }
    .site-footer .bottom .list-inline a:hover {
      color: {{$styles[0]->primary_color}};
    }
    .site-footer .credits a {
      color: {{$styles[0]->primary_color}};
    }

/* BACKGROUND */
.background::after {
  background: {{$styles[0]->primary_color}};
}

.pricing-features {
  color: {{$styles[0]->primary_color}};
}



.pricing-button {
  color: #fff;
  background-color: {{$styles[0]->button_primary}};
}

.pricing-button:hover,
.pricing-button:focus {
  color: #fff;
  background-color: {{$styles[0]->button_secondary}};

}


.blog-home3 .bg-success-gradiant {
  background: {{$styles[0]->button_primary}};

}

.blog-home3 a.link:hover {
    color: {{$styles[0]->button_secondary}};
}

/*Background Colors*/
#servicios, #servicios .feature-col .card {
  background-color: {{$contenidosection2s[0]->back_color}};
}



#infoSlider {
  background-color: {{$info_slider_texts[0]->back_color}};
}

.pricing {
  background-color: {{$pricings[0]->back_color}};
}

#articulos, #articulos .card {
  background-color: {{$contenidosection4s[0]->back_color}};
}

#contact {
  background-color: {{$contenidosection5s[0]->back_color}};
}
</style>

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
@include($path)
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
