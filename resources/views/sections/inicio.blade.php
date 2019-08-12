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
                  <a class="hero-brand" href="{{redirect('home')}}" title="Home"><img height="100%" class="img-fluid logo-bottom d-fixed" width="600px;" src="{{'/storage/' . $contenidosection1s[1]->logo}}"></a>
                  @else
                  <a class="hero-brand" href="{{redirect('home')}}" title="Home"><img height="100%" class="img-fluid logo-bottom d-fixed" width="350px;" src="{{'/storage/' . $contenidosection1s[1]->logo}}"></a>
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
