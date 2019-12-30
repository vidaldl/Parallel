<section id="slider" class="slider-element swiper-no-swiping slider-parallax swiper_wrapper clearfix" data-grab="false">

	<div class="slider-parallax-inner">

		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide dark" style="background-image: url({{ '/storage/' . $contenidosection1s[0]->background_image }});">
					<div class="overlay"></div>
					<div class="container clearfix">

						<div class="slider-caption slider-caption-center">
							<h2 data-animate="fadeInUp">{{$contenidosection1s[0]->title}}</h2>
							<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{!! $contenidosection1s[0]->tagline !!}</p>
							<a href="{{$contenidosection1s[0]->link}}" style="color: #fff;" class="button button-rounded button-light button-green button-large button-border d-none d-md-inline-block">
								<span>{{$contenidosection1s[0]->button}}</span>
							</a>
						</div>



					</div>
				</div>
			</div>
		</div>

	</div>

</section>