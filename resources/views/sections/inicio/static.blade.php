
<!-- STATIC -->
<!-- <section id="slider" class="slider-element slider-parallax slider-parallax-visible" style="background: url({{ '/storage/' . $contenidosection1s[0]->background_image }}); height: 1021px;"  data-height-md="700">

	<div class="slider-parallax-inner dark" style="height: 670px; transform: translateY(0px);">
		<div class="overlay"></div>
    <div class="container clearfix">

		<div class="vertical-middle center" style="position: absolute; top: 50%; width: 100%; padding-top: 0px; padding-bottom: 0px; margin-top: -14px; opacity: 1.27612; z-index:10;">

			<div class="vaina heading-block nobottomborder center" style="color: #ffff;">
      <div class="d-none d-md-block"><img class="img-fluid " src="{{'/storage/' . $contenidosection1s[0]->logo }}" style="height: 300px" alt=""></div>
      <h2>Hello</h2>
      <div class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{!! $contenidosection1s[0]->tagline !!}</div>
			</div>

		</div>
		</div>
	</div>
</section> -->

<!-- END STATIC -->

<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix swiper-no-swiping {{ $contenidosection1s[0]->carousel == 1 ? 'd-none' : '' }}" data-grab="false">

  <div class="slider-parallax-inner">

    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">

        <div class="swiper-slide dark" style="background-image: url({{ '/storage/' . $contenidosection1s[0]->background_image }});">
          <div class="overlay"></div>
          <div class="container clearfix">

            <div class="slider-caption slider-caption-center dark">
              <div class="d-none d-md-block"><img class="img-fluid " src="{{'/storage/' . $contenidosection1s[0]->logo }}" style="height: 300px" alt=""></div>
              <h2 data-animate="fadeInUp">{{$contenidosection1s[0]->title}}</h2>
              <div class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{!! $contenidosection1s[0]->tagline !!}</div>
            </div>
          </div>
        </div>


      </div>
    </div>

  </div>

</section>
