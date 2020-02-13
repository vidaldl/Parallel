
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix swiper-no-swiping {{ $contenidosection1s[0]->carousel == 1 ? 'd-none' : '' }}" data-grab="false">

  <div class="slider-parallax-inner">

    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">

        <div class="swiper-slide dark" style="background-image: url({{ '/storage/' . $contenidosection1s[0]->background_image }});">
          <div class="overlay{{$contenidosection1s[0]->id}}"></div>
          <div class="container clearfix">

            <div class="slider-caption slider-caption-center dark">
              @if($contenidosection1s[0]->display == 0)
                <h2 class="slider-caption-h2 mb-4" data-animate="fadeInUp">{{$contenidosection1s[0]->title}}</h2>
                <div class="slider-caption-p d-none d-sm-block mb-4" data-animate="fadeInUp" data-delay="200">{{ $contenidosection1s[0]->tagline }}</div>
              @else
                <div class="d-none d-md-block mb-5"><img class="img-fluid " src="{{'/storage/' . $contenidosection1s[0]->logo }}" style="height: 450px" alt=""></div>
                <h2 class="slider-caption-h2 d-none d-block d-md-none d-lg-none" data-animate="fadeInUp">{{$contenidosection1s[0]->title}}</h2>
                <div class="slider-caption-p d-none d-sm-block d-md-none d-lg-none" data-animate="fadeInUp" data-delay="200">{{ $contenidosection1s[0]->tagline }}</div>
              @endif
              @if($contenidosection1s[0]->button)
                @if($contenidosection1s[0]->overlay <= 50)
                  <a href="{{$contenidosection1s[0]->link}}" class="button button-amber button-large d-none d-md-inline-block">
                    <span>{{$contenidosection1s[0]->button}}</span>
                  </a>
                @elseif($contenidosection1s[0]->overlay > 50)
                  <a href="{{$contenidosection1s[0]->link}}" style="color: #fff;" class="button button-rounded button-light button-green button-large button-border d-none d-md-inline-block">
                    <span>{{$contenidosection1s[0]->button}}</span>
                  </a>
                @endif
              @endif

            </div>
          </div>
        </div>


      </div>
    </div>

  </div>

</section>
