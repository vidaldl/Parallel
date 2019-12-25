<!-- CAROUSEL -->
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix {{ $contenidosection1s[0]->carousel == 0 ? 'd-none' : '' }}" data-autoplay="7000" data-speed="650" data-loop="true">

  <div class="slider-parallax-inner">

    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">

        <div class="swiper-slide dark" style="background-image: url({{ '/storage/' . $contenidosection1s[1]->background_image }});">
          <div class="overlay"></div>
          <div class="container clearfix">

            <div class="slider-caption slider-caption-center">
              <div class="d-none d-md-block"><img class="img-fluid " src="{{'/storage/' . $contenidosection1s[1]->logo }}" style="height: 300px" alt=""></div>
              <h2 data-animate="fadeInUp">{{$contenidosection1s[1]->title}}</h2>
              <div class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{!! $contenidosection1s[1]->tagline !!}</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide dark" style="background-image: url({{ '/storage/' . $contenidosection1s[2]->background_image }});">
          <div class="overlay"></div>
          <div class="container clearfix">
            <div class="slider-caption d-none d-xl-block">
              <img src="{{'/storage/' . $contenidosection1s[2]->logo }}" alt="">
            </div>
            <div class="slider-caption slider-caption-right">
              <h2 data-animate="fadeInUp">{{$contenidosection1s[2]->title}}</h2>
              <div class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{!! $contenidosection1s[2]->tagline !!}</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide dark" style="background-image: url({{ '/storage/' . $contenidosection1s[3]->background_image }});">
          <div class="overlay"></div>
          <div class="container clearfix">
            <div class="slider-caption">
              <h2 data-animate="fadeInUp">{{$contenidosection1s[3]->title}}</h2>
              <div class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{!! $contenidosection1s[3]->tagline !!}</div>
            </div>
            <div class="slider-caption slider-caption-right d-none d-xl-block">
              <img src="{{'/storage/' . $contenidosection1s[3]->logo }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="slider-arrow-left d-none d-sm-block"><i class="icon-angle-left"></i></div>
      <div class="slider-arrow-right d-none d-sm-block"><i class="icon-angle-right"></i></div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>
<!-- END CAROUSEL -->
