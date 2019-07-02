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
</style>
@endsection

@section('content')

@foreach($contenidosection1s as $contenidosection1)
  <section class="hero" id="inicio" style="background-image: url({{ '/storage/' . $contenidosection1->background_image }});">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="{{redirect('home')}}" title="Home"><img height="100%" width="350px;" src="{{'/storage/' . $contenidosection1->logo}}"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          {{$contenidosection1->title}}
          </h1>

        <p class="tagline">
          {{$contenidosection1->tagline}}
        </p>
        <a class="btn btn-full" href="#servicios">{{$contenidosection1->button}}</a>
      </div>
    </div>

  </section>
  <!-- /Hero -->
@endforeach
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
          <li ><a href="{{url('http://ghidalgo.com/webapp/login')}}"><i class="fa fa-user-alt" style="font-size:17px;"></i>&nbsp;&nbsp;Clientes</a></li>
          <li><a href="{{url('http://ghidalgo.com/webapp/login')}}"><i class="fa fa-building" style="font-size:17px;"></i>&nbsp;&nbsp;Administración</a></li>
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
  <section class="features" id="servicios">
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
                <span class="fa fa-{{ $servicio->icon }}"></span>
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
  <!-- /Features -->
  <!-- Call to Action -->
@foreach($contenidosection3s as $contenidosection3)
  <section class="cta" id="acercas">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 text-lg-left text-center">
          <h2 class="mb-3">
              {{$contenidosection3->title}}
            </h2>

          <p style="color:white;">
            {!! $contenidosection3->contenido !!}
          </p>
        </div>

        <div id="articuloss" class="col-lg-3 col-sm-12 text-lg-right text-center align-self-center">
          <a class="btn btn-ghost " href="/about">{{$contenidosection3->button}}</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /Call to Action -->
  @endforeach

@foreach($contenidosection4s as $contenidosection4)
  <!-- Articulos -->

  <section class="portfolio" id="articulos">
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
        @foreach($posts as $post)
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block card-image-div">
              <a href="#" data-toggle="modal" data-target="#modal{{ $post->id }}"><img alt="" src="{{ '/storage/' . $post->image }}">
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
        <a href="/blog" class="btn mx-auto mt-4">{{$contenidosection4->button}}&nbsp;<i class="fas fa-chevron-down"></i></a>
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
  <section id="contact">
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
              <p>{{$contenidosection5->email}}</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>{{$contenidosection5->number}}</p>
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
  <footer class="site-footer" id="footer">
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
                <a target="_blank" href="{{$contenidosectionfooter->twitter_link}}"><i class="fab fa-twitter"></i></a> <a target="_blank" href="{{$contenidosectionfooter->facebook_link}}"><i class="fab fa-facebook"></i></a> <a target="_blank" href="{{$contenidosectionfooter->instagram_link}}"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>

          </div>

        </div>
      </div>
    </div>
  </footer>
  @endforeach
  @endsection
