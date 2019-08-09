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


<div id="carousel-example-generic2" class="carousel slide carousel-fade carousel-fullscreen {{ $contenidosection1s[0]->carousel == 0 ? 'd-none' : '' }}" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <!-- SLIDE 1 -->
        <div class="carousel-item active " style="background-image: url({{ '/storage/' . $contenidosection1s[1]->background_image }});">
            <div class="overlay"></div>
            <div class="carousel-caption text-center style="top: 50%;transform: translateY(-40%);"">
              <div class="row">
                <div class="col-md-12" style="{{ $contenidosection1s[1]->carousel == 0 ? 'visibility: hidden;' : '' }}">
                  @if(empty($contenidosection1s[1]->title))
                  <a class="hero-brand" href="{{redirect('home')}}" title="Home"><img height="100%" class="img-fluid logo-bottom" width="600px;" src="{{'/storage/' . $contenidosection1s[1]->logo}}"></a>
                  @else
                  <a class="hero-brand" href="{{redirect('home')}}" title="Home"><img height="100%" class="img-fluid logo-bottom" width="350px;" src="{{'/storage/' . $contenidosection1s[1]->logo}}"></a>
                  @endif

                </div>
              </div>
              <div class="col-md-12">
                <h1>
                  {{$contenidosection1s[1]->title}}
                </h1>
                <div class="tagline">
                  {!! $contenidosection1s[1]->tagline !!}
                </div>
                <a class="btn btn-full {{$contenidosection1s[1]->button ? '' : 'd-none'}}" href="{{ $contenidosection1s[1]->link ? $contenidosection1s[1]->link : '#servicios' }}">{{$contenidosection1s[1]->button}}</a>
              </div>
            </div>
        </div>
        <!-- /SLIDE 1 -->
        <!-- SLIDE 2 -->
          <div class="carousel-item" style="background-image: url({{ '/storage/' . $contenidosection1s[2]->background_image }});">
              <div class="overlay"></div>
              <div class="carousel-caption" style="top: 45%;transform: translateY(-65%); left:5%; right: 5%;">
                <div class="row">
                  <div class="col-md-6 d-none d-sm-none d-md-block" style="{{ $contenidosection1s[2]->carousel == 0 ? 'visibility: hidden;' : '' }}">
                    <a class="hero-brand" style="margin-bottom: 10px;"  href="{{redirect('home')}}" title="Home"><img class="img-fluid" height="100%" width="850px" style="margin-right: 45px;overflow-y: hidden;" src="{{'/storage/' . $contenidosection1s[2]->logo}}"></a><!-- <img height="100%" width="850px" style=" margin-left: 45px;overflow-y: hidden;" src="{{asset('img/world.png')}}"> -->
                  </div>

                  <div class="col-md-6" style="text-align: right;">
                    <h1  style="text-align:right;">
                      {{$contenidosection1s[2]->title}}
                    </h1>
                    <div class="row">
                      <div class="tagline mb-1 d-block ml-auto" style="margin-top: 12px;">
                        {!! $contenidosection1s[2]->tagline !!}
                      </div>
                    </div>
                    <a class="btn btn-full mt-4 {{$contenidosection1s[2]->button ? '' : 'd-none'}}" style="border-radius: 3px" href="{{ $contenidosection1s[2]->link ? $contenidosection1s[2]->link : '#servicios' }}">{{$contenidosection1s[2]->button}}</a>
                  </div>

                </div>
                </div>
          </div>
        <!-- /SLIDE 2 -->
        <!-- SLIDE 3 -->
          <div class="carousel-item" style="background-image: url({{ '/storage/' . $contenidosection1s[3]->background_image }});">
              <div class="overlay"></div>
              <div class="carousel-caption" style="top: 45%;transform: translateY(-65%); left:5%; right: 5%; ">
                <div class="row">
                  <div class="col-md-6" style="text-align: left;">
                    <h1  style="text-align:left;">
                      {{$contenidosection1s[3]->title}}
                    </h1>
                    <div class="tagline mb-1 " style="margin-top: 12px;">
                      {!! $contenidosection1s[3]->tagline !!}
                    </div>
                    <a class="btn btn-full mt-4 {{$contenidosection1s[3]->button ? '' : 'd-none'}}" style="border-radius: 3px" href="{{ $contenidosection1s[3]->link ? $contenidosection1s[3]->link : '#servicios' }}">{{$contenidosection1s[3]->button}}</a>
                  </div>

                  <div class="col-md-6 d-none d-sm-none d-md-block" style="{{ $contenidosection1s[3]->carousel == 0 ? 'visibility: hidden;' : '' }}">
                    <a class="hero-brand" style="margin-bottom: 10px;"  href="{{redirect('home')}}" title="Home"><img class="img-fluid" height="100%" width="850px" style="overflow-y: hidden;"  src="{{'/storage/' . $contenidosection1s[3]->logo}}"></a><!-- <img height="100%" width="850px" style=" margin-left: 45px;overflow-y: hidden;" src="{{asset('img/world.png')}}"> -->
                  </div>
                </div>
                </div>
              </div>
          </div>
        <!-- /SLIDE 3 -->
</div>

<!-- STATIC -->
  <section class="hero {{ $contenidosection1s[0]->display == '0' ? 'd-none' : '' }} {{ $contenidosection1s[0]->carousel == 1 ? 'd-none' : '' }}" id="inicio" style="background-image: url({{ '/storage/' . $contenidosection1s[0]->background_image }});">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          @if(empty($contenidosection1s[0]->title))
          <a class="hero-brand " href="{{redirect('home')}}" title="Home"><img height="100%" width="600px;" src="{{'/storage/' . $contenidosection1s[0]->logo}}"></a>
          @else
          <a class="hero-brand " href="{{redirect('home')}}" title="Home"><img height="100%" width="350px;" src="{{'/storage/' . $contenidosection1s[0]->logo}}"></a>
          @endif
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          {{$contenidosection1s[0]->title}}
        </h1>

        <div class="tagline">
          {!! $contenidosection1s[0]->tagline !!}
        </div>
        <a class="btn btn-full" href="{{ $contenidosection1s[0]->link ? $contenidosection1s[0]->link : '#servicios' }}">{{$contenidosection1s[0]->button}}</a>
      </div>
    </div>

  </section>
<!-- /STATIC -->

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



  <!-- Servicios -->
@foreach($contenidosection2s as $contenidosection2)

  <section class="features {{ $contenidosection2->display == '0' ? 'd-none' : '' }}" id="servicios">
    <div class="container">
      <h2 class="text-center">
          {{$contenidosection2->title}}
        </h2>
@endforeach
      <div class="row">
      @foreach($servicios as $servicio)
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon ">
                <span class="{{ $servicio->icon }}"></span>
              </div>
            </div>

            <div>
              <h3>{{ $servicio->title }}</h3>
              <p>
                {!! $servicio->contenido !!}
              </p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  <!-- /Servicios -->



<!-- Info Slider -->

<div id="infoSlider" class="infoSlider {{$info_slider_texts[0]->display == 0 ? 'd-none' : ''}}" style="border-top: 1px solid #E1E4EA;">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div id="" class="col-md-12 textHeight">
            <h2>{!! $info_slider_texts[0]->title !!}</h2>
            {!! $info_slider_texts[0]->contenido !!}
          </div>
          @if(!empty($info_slider_texts[0]->button) && !empty($info_slider_texts[0]->link))
          <div id="" class="mb-5 mx-auto btnH" >
            <a href="{{ $info_slider_texts[0]->link }}" class="btn" style="color:#ffff;">{{ $info_slider_texts[0]->button }}</a>
          </div>
          @endif
        </div>
      </div>
      <div class="col-md-6 imageH" id="" style="overflow: hidden;">
        <div class="flexslider">
          <ul class="slides">
            @if(empty($info_slider_texts[0]->video))
              @foreach($info_slider_images as $images)
              <li>
                <img src="{{ 'storage/' . $images->image }}" />
              </li>
              @endforeach
            @else
              <li>
                <video controls muted autoplay src="{{ '/storage/' . $info_slider_texts[0]->video }}" width="100%" >
                
                </video>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Info Slider -->

<!-- Info Slider2 -->

<div id="infoSlider2" class="infoSlider {{$info_slider_text2s[0]->display == 0 ? 'd-none' : ''}}" style="border-top: 1px solid #E1E4EA;">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-6 imageH" id="" style="overflow: hidden;">
        <div class="flexslider">
          <ul class="slides">
            @if(empty($info_slider_text2s[0]->video))
              @foreach($info_slider_image2s as $images)
              <li>
                <img src="{{ 'storage/' . $images->image }}" />
              </li>
              @endforeach
            @else
              <li>
                <video width="100%" controls muted autoplay loop>
                  <source src="{{ '/storage/' . $info_slider_text2s[0]->video }}" type="video/mp4">
                Your browser does not support the video tag.
                </video>
              </li>
            @endif
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div id="" class="col-md-12 textHeight">
            <h2>{!! $info_slider_text2s[0]->title !!}</h2>
            {!! $info_slider_text2s[0]->contenido !!}
          </div>
          @if(!empty($info_slider_text2s[0]->button) && !empty($info_slider_text2s[0]->link))
          <div id="" class="mb-5 mx-auto btnH" >
            <a href="{{ $info_slider_text2s[0]->link }}" class="btn" style="color:#ffff;">{{ $info_slider_text2s[0]->button }}</a>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Info Slider2 -->

<!-- Info Slider3 -->

<div id="infoSlider3" class="infoSlider {{$info_slider_text3s[0]->display == 0 ? 'd-none' : ''}}" style="border-top: 1px solid #E1E4EA;">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div id="" class="col-md-12 textHeight">
            <h2>{!! $info_slider_text3s[0]->title !!}</h2>
            {!! $info_slider_text3s[0]->contenido !!}
          </div>
          @if(!empty($info_slider_text3s[0]->button) && !empty($info_slider_text3s[0]->link))
          <div id="" class="mb-5 mx-auto btnH" >
            <a href="{{ $info_slider_text3s[0]->link }}" class="btn" style="color:#ffff;">{{ $info_slider_text3s[0]->button }}</a>
          </div>
          @endif
        </div>
      </div>
      <div class="col-md-6 imageH" id="" style="overflow: hidden;">
        <div class="flexslider">
          <ul class="slides">
            @if(empty($info_slider_text3s[0]->video))
              @foreach($info_slider_image3s as $images)
              <li>
                <img src="{{ 'storage/' . $images->image }}" />
              </li>
              @endforeach
            @else
              <li>
                <video width="100%" controls muted autoplay loop>
                  <source src="{{ '/storage/' . $info_slider_text3s[0]->video }}" type="video/mp4">
                Your browser does not support the video tag.
                </video>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Info Slider2 -->

<!-- PRICING -->

<div class="pricing {{ $pricings[0]->display == '0' ? 'd-none' : '' }}" id="pricing">
  <div class="background">
  <div class="containerr" >
    <div class="panel pricing-table" style="border: 1px solid black;">

      <div class="row">
        <div class="pricing-plan col-md-4" >
          <div class="col-md-12">
            <img src="{{ 'storage/' . $pricings[0]->image }}" alt="" style="border-radius: 100%;" class="pricing-img">
            <h2 class="pricing-header">{{ $pricings[0]->title }}</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item {{$pricings[0]->item1 ? '' : 'd-none'}}">{{ $pricings[0]->item1 }}</li>
              <li class="pricing-features-item {{$pricings[0]->item2 ? '' : 'd-none'}}">{{ $pricings[0]->item2 }}</li>
              <li class="pricing-features-item {{$pricings[0]->item3 ? '' : 'd-none'}}">{{ $pricings[0]->item3 }}</li>
              <li class="pricing-features-item {{$pricings[0]->item4 ? '' : 'd-none'}}">{{ $pricings[0]->item4 }}</li>
              <li class="pricing-features-item {{$pricings[0]->item5 ? '' : 'd-none'}}">{{ $pricings[0]->item5 }}</li>
              <li class="pricing-features-item {{$pricings[0]->item6 ? '' : 'd-none'}}">{{ $pricings[0]->item6 }}</li>
            </ul>
          </div>
          <div class="d-block d-sm-none ">
            <span class="pricing-price">{{$pricings[0]->price}}</span>
            <a href="{{$pricings[0]->link}}" class="pricing-button {{$pricings[0]->button ? '' : 'd-none'}}">{{$pricings[0]->button}}</a>
          </div>
        </div>

        <div class="pricing-plan col-md-4" >
          <div class="col-md-12">
            <img src="{{ 'storage/' . $pricings[1]->image }}" alt="" style="border-radius: 100%;" class="pricing-img">
            <h2 class="pricing-header">{{ $pricings[1]->title }}</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item {{$pricings[1]->item1 ? '' : 'd-none'}}">{{ $pricings[1]->item1 }}</li>
              <li class="pricing-features-item {{$pricings[1]->item2 ? '' : 'd-none'}}">{{ $pricings[1]->item2 }}</li>
              <li class="pricing-features-item {{$pricings[1]->item3 ? '' : 'd-none'}}">{{ $pricings[1]->item3 }}</li>
              <li class="pricing-features-item {{$pricings[1]->item4 ? '' : 'd-none'}}">{{ $pricings[1]->item4 }}</li>
              <li class="pricing-features-item {{$pricings[1]->item5 ? '' : 'd-none'}}">{{ $pricings[1]->item5 }}</li>
              <li class="pricing-features-item {{$pricings[1]->item6 ? '' : 'd-none'}}">{{ $pricings[1]->item6 }}</li>
            </ul>
          </div>
          <div class="d-block d-sm-none">
            <span class="pricing-price">{{$pricings[1]->price}}</span>
            <a href="{{$pricings[1]->link}}" class="pricing-button {{$pricings[1]->button ? '' : 'd-none'}}">{{$pricings[1]->button}}</a>
          </div>
        </div>

        <div class="pricing-plan col-md-4">
          <div class="col-md-12" >
            <img src="{{ 'storage/' . $pricings[2]->image }}" style="border-radius: 100%;" alt="" class="pricing-img">
            <h2 class="pricing-header">{{ $pricings[2]->title }}</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item {{$pricings[2]->item1 ? '' : 'd-none'}}">{{ $pricings[2]->item1 }}</li>
              <li class="pricing-features-item {{$pricings[2]->item2 ? '' : 'd-none'}}">{{ $pricings[2]->item2 }}</li>
              <li class="pricing-features-item {{$pricings[2]->item3 ? '' : 'd-none'}}">{{ $pricings[2]->item3 }}</li>
              <li class="pricing-features-item {{$pricings[2]->item4 ? '' : 'd-none'}}">{{ $pricings[2]->item4 }}</li>
              <li class="pricing-features-item {{$pricings[2]->item5 ? '' : 'd-none'}}">{{ $pricings[2]->item5 }}</li>
              <li class="pricing-features-item {{$pricings[2]->item6 ? '' : 'd-none'}}">{{ $pricings[2]->item6 }}</li>
            </ul>
          </div>
          <div class="d-block d-sm-none ">
            <span class="pricing-price">{{$pricings[2]->price}}</span>
            <a href="{{$pricings[2]->link}}" class="pricing-button {{$pricings[2]->button ? '' : 'd-none'}}">{{$pricings[2]->button}}</a>
          </div>
        </div>
        <div class="col-md-4 d-none d-sm-block">
            <span class="pricing-price">{{$pricings[0]->price}}</span>
            <a href="{{$pricings[0]->link}}" class="pricing-button {{$pricings[0]->button ? '' : 'd-none'}}">{{$pricings[0]->button}}</a>
        </div>
        <div class="col-md-4 d-none d-sm-block">
            <span class="pricing-price">{{$pricings[1]->price}}</span>
            <a href="{{$pricings[1]->link}}" class="pricing-button {{$pricings[1]->button ? '' : 'd-none'}}">{{$pricings[1]->button}}</a>
        </div>
        <div class="col-md-4 d-none d-sm-block">
            <span class="pricing-price">{{$pricings[2]->price}}</span>
            <a href="{{$pricings[2]->link}}" class="pricing-button {{$pricings[2]->button ? '' : 'd-none'}}">{{$pricings[2]->button}}</a>
        </div>
      </div>



    </div>
  </div>
</div>
</div>

<!-- /PRICING -->

<!--Articulos-->
<section id="articulos" class="blog-home3 py-5 " style="border-top: 1px solid #E1E4EA">

    <div class="container-fluid">
      <!-- Row  -->
      <div class="row justify-content-center">
        <!-- Column -->
        <div class="col-md-8 text-center">
          <h2 class="my-3">{{$contenidosection4s[0]->title}}</h2>
          <h6 class="subtitle font-weight-normal">{{$contenidosection4s[0]->tagline}}</h6>
        </div>
        <!-- Column -->
        <!-- Column -->
      </div>
      <div class="row mt-4">
        <!-- Column -->
        <div class="col-lg-6">
          <div class="card border-0 mb-4">
            <a href="#" data-toggle="modal" data-target="#modal{{ $posts[0]->id }}"><img class="card-img-top" src="{{'storage/' . $posts[0]->image}}" alt="wrappixel kit"></a>
            <div class="date-pos text-center text-white p-3 bg-success-gradiant">{{$users[0]->username}} &nbsp; &nbsp; {{$posts[0]->published_at->format('d M Y')}}</div>
            <h5 class="font-weight-medium mt-3"><a href="#" data-toggle="modal" data-target="#modal{{ $posts[0]->id }}" class="link text-decoration-none">{{$posts[0]->title}}</a></h5>
            <p class="m-t-20 lol">{{$posts[0]->tagline}}</p>
          </div>
        </div>
        <!-- Column -->
        <div class="col-lg-6">
          <div class="row">
            <!-- Column -->
            <div class="col-md-6">
              <div class="card border-0 mb-4">
                <a href="#" data-toggle="modal" data-target="#modal{{ $posts[1]->id }}"><img class="card-img-top" src="{{'storage/' . $posts[1]->image}}" alt="wrappixel kit"></a>
                <div class="date-pos text-center text-white p-3 bg-success-gradiant">{{$users[0]->username}} &nbsp; &nbsp; {{$posts[1]->published_at->format('d M Y')}}</div>
                <h6 class="font-weight-medium mt-3"><a href="#" data-toggle="modal" data-target="#modal{{ $posts[1]->id }}" class="link text-decoration-none">{{$posts[1]->title}}</a></h6>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6">
              <div class="card border-0 mb-4">
                <a href="#" data-toggle="modal" data-target="#modal{{ $posts[2]->id }}"><img class="card-img-top" src="{{'storage/' . $posts[2]->image}}" alt="wrappixel kit"></a>
                <div class="date-pos text-center text-white p-3 bg-success-gradiant">{{$users[0]->username}} &nbsp; &nbsp; {{$posts[2]->published_at->format('d M Y')}}</div>
                <h6 class="font-weight-medium mt-3"><a href="#" data-toggle="modal" data-target="#modal{{ $posts[2]->id }}" class="link text-decoration-none">{{$posts[2]->title}}</a></h6>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6">
              <div class="card border-0 mb-4">
                <a href="#" data-toggle="modal" data-target="#modal{{ $posts[3]->id }}"><img class="card-img-top" src="{{'storage/' . $posts[3]->image}}" alt="wrappixel kit"></a>
                <div class="date-pos text-center text-white p-3 bg-success-gradiant">{{$users[0]->username}} &nbsp; &nbsp; {{$posts[3]->published_at->format('d M Y')}}</div>
                <h6 class="font-weight-medium mt-3"><a href="#" data-toggle="modal" data-target="#modal{{ $posts[3]->id }}" class="link text-decoration-none">{{$posts[3]->title}}</a></h6>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6">
              <div class="card border-0 mb-4">
                <a href="#" data-toggle="modal" data-target="#modal{{ $posts[4]->id }}" ><img class="card-img-top" src="{{'storage/' . $posts[4]->image}}" alt="wrappixel kit"></a>
                <div class="date-pos text-center text-white p-3 bg-success-gradiant">{{$users[0]->username}} &nbsp; &nbsp; {{$posts[4]->published_at->format('d M Y')}}</div>
                <h6 class="font-weight-medium mt-3"><a href="#" data-toggle="modal" data-target="#modal{{ $posts[4]->id }}" class="link text-decoration-none">{{$posts[4]->title}}</a></h6>
              </div>
            </div>
            <!-- Column -->
          </div>
        </div>
        <!-- Column -->
      </div>

      <div class="row">
        <a href="/blog" class="btn mx-auto" style="border-radius: 0%;">Más Artículos &nbsp;<i class="fas fa-angle-down"></i></a>
        <!-- MODAL -->
        @foreach($posts as $post)
        <div class="modal fade" id="modal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $post->id }}" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content  super-iframe-holder">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body" >
                <div class="row">

                    <div class="post-information col-md-12" style="padding: 15px">
                      <h2>{{ $post->title }}</h2>
                        <span><i class="fa fa-user"></i> <small>{{$users[0]->username}}</small></span> &nbsp;
                        <span><i class="fa fa-clock-o"></i> <small>{{$post->published_at->format('d M Y')}}</small></span> &nbsp;
                        <span><i class="fa fa-tags"></i> <small>{{$post->category->name}}</small></span> &nbsp;
                    </div>
                    <div class="col-md-6 imgModal" >
                    <img src="{{ '/storage/' . $post->image }}" style="width:100%" class="img-fluid rounded" alt="">
                  </div>
                  <div class="col-md-6 mb-3 textModal">
                    {!! $post->contenido !!}
                  </div>
                </div>
              </div>
              <div class="modal-footer">

                  <div class="row">
                    <a href="{{$post->link}}" onclick="$('#modal{{ $post->id }}').modal('hide')" class="btn btn-sm mr-3 {{$post->button ? '' : 'd-none'}}" style="border-radius: 0px; margin-bottom: 0px;">{{$post->button}}</a>
                  </div>

              </div>

            </div>
          </div>
        </div>

        @endforeach
        <!-- MODAL -->

      </div>

    </div>
</section>


<!--Articulos-->



<!-- Call to Action -->
@foreach($contenidosection3s as $contenidosection3)
<section class="cta {{ $contenidosection3->display == '0' ? 'd-none' : '' }}" id="acercas" style="{{ $contenidosection2->display == '0' ? 'color: black;background-color: #FFFFFF;' : '' }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12 text-lg-left text-center">
        <h2 class="mb-3">
            {{$contenidosection3->title}}
          </h2>
      <div class="contenidoStyle">

          {!! $contenidosection3->contenido !!}

      </div>
      </div>

      <div id="articuloss" class="col-lg-3 col-sm-12 text-lg-right text-center align-self-center">
        <a class="btn {{ $contenidosection2->display == '0' ? 'btn-full' : 'btn-ghost' }}" href="/about">{{$contenidosection3->button}}&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>
@endforeach
<!-- /Call to Action -->



@foreach($contenidosection5s as $contenidosection5)
  <section class="{{ $contenidosection5->display == '0' ? 'd-none' : '' }}" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section-title">{{$contenidosection5->title}}</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4">
          <div class="info">
            <div>
              <i class="fa fa-map-marker-alt"></i>
              <p>{!! $contenidosection5->address !!}</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>{!! $contenidosection5->email !!}</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>{!! $contenidosection5->number !!}</p>
            </div>


          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            @if(session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
          @endif

            <div id="errormessage">
              @if(session()->has('error'))
                <div class="alert alert-danger">
                  {{ session()->get('error') }}
                </div>
              @endif
            </div>
            <form  action="{{ route('send.contact') }}" method="post" role="form" class="contactForm">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor introduzca por lo menos 4 carácteres" />
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor entrar un email válido" />
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="tel" class="form-control @error('number') is-invalid @enderror" name="number" id="number" placeholder="Teléfono"  data-msg="Por favor introduzca su número de teléfono" />
                  @error('number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor introduzca el asunto" />
                  @error('subject')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" data-rule="required" data-msg="Escribenos algo!" placeholder="Mensaje"></textarea>
                  @error('message')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
  @endforeach
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

  @endsection

  @section('footer')
  @foreach($contenidosectionfooters as $contenidosectionfooter)
  <footer class="site-footer {{ $contenidosectionfooter->display == '0' ? 'd-none' : '' }}" id="footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © {{$contenidosectionfooter->copy}}
            </p>
            <div class="credits">

             Designed by <a href="https://siscop.net">Siscop</a>
            </div>
          </div>

          <div class="col-lg-9 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#inicio">Inicio</a>
              </li>

              <li class="list-inline-item">
                <a href="#servicios">Servicios</a>
              </li>

              <li class="list-inline-item">
                <a href="/about">Acerca de</a>
              </li>

              <li class="list-inline-item">
                <a href="#articulos">Artículos</a>
              </li>

              <li class="list-inline-item">
                <a href="#contact">Contacto</a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="{{$contenidosectionfooter->twitter_link}}"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="{{$contenidosectionfooter->facebook_link}}"><i class="fab fa-facebook"></i></a>
                <a target="_blank" href="{{$contenidosectionfooter->instagram_link}}"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>

            <ul class="list-inline">
              <li class="list-inline-item"><a target="_blank" href="/login">Admin&nbsp;&nbsp;<i class="fas fa-user"></i></li></a>
            </ul>
          </div>


        </div>
      </div>
    </div>
  </footer>
  @endforeach
  @endsection

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
