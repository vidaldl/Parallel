
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix swiper-no-swiping {{ $contenidosection1s[0]->carousel == 1 ? 'd-none' : '' }}" data-grab="false">

  <div class="slider-parallax-inner">

    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">

        <div class="swiper-slide dark" style="background-image: url({{ '/storage/' . $contenidosection1s[0]->background_image }});">
          <div class="overlay{{$contenidosection1s[0]->id}}"></div>
          <div class="container clearfix">

            <div class="slider-caption slider-caption-center dark">
              <div class="d-none d-md-block"><img class="img-fluid " src="{{'/storage/' . $contenidosection1s[0]->logo }}" style="height: 300px" alt=""></div>
              <h2 data-animate="fadeInUp">{{$contenidosection1s[0]->title}}</h2>
              <div class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{!! $contenidosection1s[0]->tagline !!}</div>
              <a href="{{$contenidosection1s[0]->link}}" style="color: #fff;" class="button button-rounded button-light button-green button-large button-border tright d-none d-md-inline-block">
							<span>{{$contenidosection1s[0]->button}}</span>
							</a>
            </div>
          </div>
        </div>


      </div>
    </div>

  </div>

</section>
