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

    .btn-ghost:hover {

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
    .features h2 {
      color: {{$styles[0]->primary_color}};
    }
    .feature-col .feature-icon {
      background: {{$styles[0]->primary_color}};
    }
    .feature-col h3 {
      color: {{$styles[0]->primary_color}};
    }
    .cta {
      background-color: {{$styles[0]->primary_color}};
    }
    .portfolio h1 {
      color: {{$styles[0]->primary_color}};
    }
    .infoSlider h2 {
      margin-bottom: 25px;
      color: {{$styles[0]->primary_color}};

    }
    .team h2 {
      color: {{$styles[0]->primary_color}};
    }
    .team .card:hover .card-title-wrap {
      background-color: {{$styles[0]->primary_color}};
    }
    #contact h2 {
      color: {{$styles[0]->primary_color}};
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

.pricing-price {
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
        <div class="carousel-item active" style="background-image: url({{ '/storage/' . $contenidosection1s[1]->background_image }});">
            <div class="overlay"></div>
            <div class="carousel-caption text-center style="top: 50%;transform: translateY(-40%);"">
              <div class="row">
                <div class="col-md-12" style="{{ $contenidosection1s[1]->carousel == 0 ? 'visibility: hidden;' : '' }}">
                  <a class="hero-brand " href="{{redirect('home')}}" title="Home"><img height="100%" width="350px;" src="{{'/storage/' . $contenidosection1s[1]->logo}}"></a>

                </div>
              </div>
              <div class="col-md-12">
                <h1>
                  {{$contenidosection1s[1]->title}}
                </h1>
                <p class="tagline">
                  {{$contenidosection1s[1]->tagline}}
                </p>
                <a class="btn btn-full" href="#servicios">{{$contenidosection1s[1]->button}}</a>
              </div>
            </div>
        </div>
        <!-- /SLIDE 1 -->
        <!-- SLIDE 2 -->
          <div class="carousel-item" style="background-image: url({{ '/storage/' . $contenidosection1s[2]->background_image }});">
              <div class="overlay"></div>
              <div class="carousel-caption" >
                <div class="row">
                  <div class="" style="{{ $contenidosection1s[2]->carousel == 0 ? 'visibility: hidden;' : '' }}">
                    <a class="hero-brand" style="margin-bottom: 10px;"  href="{{redirect('home')}}" title="Home"><img height="100%" width="350px"  src="{{'/storage/' . $contenidosection1s[2]->logo}}"></a>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                  <h1  style="text-align:left;">
                    {{$contenidosection1s[2]->title}}
                    </h1>
                </div>
                <div class="col-md-8" style="text-align:right;">
                  <p class="tagline mb-1" style="margin-top: 12px;">
                    {{$contenidosection1s[2]->tagline}}
                  </p>
                  <a class="btn btn-full " style="border-radius: 3px" href="#servicios">{{$contenidosection1s[2]->button}}</a>
                </div>
                </div>
              </div>
          </div>
        <!-- /SLIDE 2 -->
        <!-- SLIDE 3 -->
          <div class="carousel-item" style="background-image: url({{ '/storage/' . $contenidosection1s[3]->background_image }});">
              <div class="overlay"></div>
              <div class="carousel-caption" style="top: 45%;transform: translateY(-40%);">
                <div class="row">
                  <div class="col-md-6" style="text-align: left;">
                    <h1  style="text-align:left;">
                      {{$contenidosection1s[3]->title}}
                    </h1>
                    <p class="tagline mb-1 " style="margin-top: 12px;">
                      {{$contenidosection1s[3]->tagline}}
                    </p>
                    <a class="btn btn-full mt-4" style="border-radius: 3px" href="#servicios">{{$contenidosection1s[3]->button}}</a>
                  </div>

                  <div class="col-md-6 " style="{{ $contenidosection1s[3]->carousel == 0 ? 'visibility: hidden;' : '' }}">
                    <a class="hero-brand" style="margin-bottom: 10px;"  href="{{redirect('home')}}" title="Home"><img height="100%" width="850px" style=" margin-left: 45px;overflow-y: hidden;"  src="{{'/storage/' . $contenidosection1s[3]->logo}}"></a><!-- <img height="100%" width="850px" style=" margin-left: 45px;overflow-y: hidden;" src="{{asset('img/world.png')}}"> -->
                  </div>
                </div>
                </div>
              </div>
          </div>
        <!-- /SLIDE 3 -->
</div>


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

        <p class="tagline">
          {{$contenidosection1s[0]->tagline}}
        </p>
        <a class="btn btn-full" href="#servicios">{{$contenidosection1s[0]->button}}</a>
      </div>
    </div>

  </section>
  <!-- /Hero -->

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
          <li ><a href="{{url('http://app.ghidalgo.com/')}}"><i class="fa fa-user-alt" style="font-size:17px;"></i>&nbsp;&nbsp;Clientes</a></li>
          <li><a href="{{url('http://app.ghidalgo.com/')}}"><i class="fa fa-building" style="font-size:17px;"></i>&nbsp;&nbsp;Administración</a></li>
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
                {{ $servicio->contenido }}
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

<div id="infoSlider" class="infoSlider {{$info_slider_texts[0]->display == 0 ? 'd-none' : ''}}" style="border-top: 2px solid {{$styles[0]->primary_color}};">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div id="textHeight" class="col-md-12">
            <h2>{!! $info_slider_texts[0]->title !!}</h2>
            <p>{!! $info_slider_texts[0]->contenido !!}</p>
          </div>
          <div id="btnH"class="mb-5 mx-auto">
            <a class="btn" style="color:#ffff;">{{ $info_slider_texts[0]->button }}</a>
          </div>
        </div>
      </div>
      <div class="col-md-8 " id="imageH" style="overflow: hidden;">
        <div class="flexslider">
          <ul class="slides">
            @foreach($info_slider_images as $images)
            <li>
              <img src="{{ 'storage/' . $images->image }}" />
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<!--/Info Slider -->

<!-- PRICING -->

<!-- <div class="pricing" id="pricing">
  <div class="background">
  <div class="containerr">
    <div class="panel pricing-table">

      <div class="pricing-plan" style=" position: relative; min-height: 500px; border: 1px solid black;">
        <div class="col-md-12">
          <img src="{{ 'storage/' . $pricings[0]->image }}" alt="" class="pricing-img">
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
        <div style="position: relative;bottom: 0; border:1px solid black;" class="col-md-12">
          <span class="pricing-price">{{$pricings[0]->price}}</span>
          <a href="#/" class="pricing-button">{{$pricings[0]->button}}</a>
        </div>
      </div>

      <div class="pricing-plan" style=" position: relative; min-height: 500px; border: 1px solid black;">
        <div class="col-md-12">
          <img src="{{ 'storage/' . $pricings[1]->image }}" alt="" class="pricing-img">
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
      <div style="position: relative;bottom: 0; border:1px solid black;" class="col-md-12">
        <span class="pricing-price">{{$pricings[1]->price}}</span>
        <a href="#/" class="pricing-button">{{$pricings[1]->button}}</a>
      </div>
      </div>

      <div class="pricing-plan" >
        <div class="col-md-12">
          <img src="{{ 'storage/' . $pricings[1]->image }}" alt="" class="pricing-img">
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
        <div style="position: relative;bottom: 0; border:1px solid black;" class="col-md-12">
          <span class="pricing-price">{{$pricings[2]->price}}</span>
          <a href="#/" class="pricing-button">{{$pricings[2]->button}}</a>
        </div>
      </div>

    </div>
  </div>
</div>
</div> -->

<!-- /PRICING -->

  <!-- Call to Action -->
@foreach($contenidosection3s as $contenidosection3)
  <section class="cta {{ $contenidosection3->display == '0' ? 'd-none' : '' }}" id="acercas" style="{{ $contenidosection2->display == '0' ? 'color: black;background-color: #FFFFFF;' : '' }}">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 text-lg-left text-center">
          <h2 class="mb-3">
              {{$contenidosection3->title}}
            </h2>
        <div class="contenidoStyle" style="color: #fff;">

            {!! $contenidosection3->contenido !!}

        </div>
        </div>

        <div id="articuloss" class="col-lg-3 col-sm-12 text-lg-right text-center align-self-center">
          <a class="btn {{ $contenidosection2->display == '0' ? 'btn-full' : 'btn-ghost' }}" href="/about">{{$contenidosection3->button}}&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /Call to Action -->
  @endforeach







@foreach($contenidosection4s as $contenidosection4)
  <!-- Articulos -->

  <section class="portfolio {{ $contenidosection4->display == '0' ? 'd-none' : '' }}" id="articulos">
    <div class="container text-center">
      <h2>
          {{$contenidosection4->title}}
        </h2>

      <p>
        {{$contenidosection4->tagline}}
      </p>
    </div>


    <div class="portfolio-grid" >
      <div class="row">
        @foreach($posts->sortByDesc('id') as $post)
          <div class="col-lg-3 col-sm-4 col-xs-12">
            <div class="card card-block card-image-div">
              <a href="#" data-toggle="modal" data-target="#modal{{ $post->id }}"><img class="img-thumbnail" alt="" src="{{ '/storage/' . $post->image }}">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      {{ $post->title }}
                    </h3>
                    <p class="card-text">
                      {{ $post->description }}
                    </p>
                  </div>
                </div></a>
            </div>
          </div>
          @endforeach
        <a href="/blog" class="btn mx-auto mt-4 mb-3">{{$contenidosection4->button}}&nbsp;<i class="fas fa-chevron-down"></i></a>
      </div>
  </section>
@endforeach

@foreach($posts as $post)
<!--MODAL BEGINNIG-->
  <div class="modal fade" id="modal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $post->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#199EB8;">
        <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4 margen">
              <img src="{{ '/storage/' . $post->image }}" style="height:280px" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-8">
              <div class="post-information">
                <h2>{{ $post->title }}</h2>
                  <span><i class="fa fa-user"></i> <small>Grupo Hidalgo</small></span> &nbsp;
                  <span><i class="fa fa-clock-o"></i> <small>{{$post->created_at}}</small></span> &nbsp;
                  <span><i class="fa fa-tags"></i> <small>{{$post->category->name}}</small></span> &nbsp;
              </div>
              <p>{!! $post->contenido !!}</p>
            </div>
          </div>
        </div>
        <div class="modal-footer" style="background-color:#199EB8;">
          <a href="#contact" onclick="$('#modal{{ $post->id }}').modal('hide')">Solicita más información &rarr;</a>
        </div>
      </div>
    </div>
  </div>
  <!--END MODAL-->
@endforeach
  <!-- /Portfolio -->

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
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escribe algo para nosotros!" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
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
      $('.flexslider').flexslider({
    animation: "slide"
  });
    });

    $(window).load(function() {
      var height1 = $('#imageH').height();
      var height2 = $('#btnH').height();
      var sum = height1 - height2 - height2;
      $('#textHeight').css('min-height', sum + 'px');
      console.log($(window).width());
      var windowWidth = $(window).width();

      if (windowWidth < 768) {
        $('#btnH').addClass('mt-5')
      }
    });

  </script>
  @endsection