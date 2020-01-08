<div id="servicios" class="clear"></div>
<div class="section notopmargin nobottommargin nobottomborder" style="background-color: #fff">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h3>{{$contenidosection2s[0]->title}}</h3>
		</div>
	</div>
</div>

<div class="container clearfix bottommargin">
  <div class="row justify-content-center">
	  @foreach($servicios as $servicio)
    <div class="col-md-4 bottommargin-lg">
      <div class="feature-box fbox-small fbox-plain rightmargin-sm" data-animate="fadeIn">
        <div class="fbox-icon">
          <a id="modal{{$servicio->id}}" href="#animatedModal{{$servicio->id}}"><i class="{{ $servicio->icon }}"></i></a>
        </div>
        <h3>{{ $servicio->title }}</h3>
        <p class="short">{{ $servicio->contenido }}</p>
      </div>
    </div>
		@endforeach
  </div>
</div>

@foreach($servicios as $servicio)
<div id="animatedModal{{$servicio->id}}">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div class="close-animatedModal{{$servicio->id}}">
				<a class="mr-3 mt-3 float-right" href="#"><i class="fas fa-3x fa-times-circle ml-auto"></i></a>
    </div>

		<div class="container">
			<div class="topmargin" ></div>
	    <div class="modal-content topmargin-lg">
				<div class="container" style="min-height: 500px;">
					<!-- Portfolio Single Gallery
				============================================= -->
				<div class="col_full portfolio-single-image">
					<div class="fslider swiper-no-swiping" data-arrows="false" data-grab="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide"><a href="#"><img src="{{'/storage/' . $servicio->image}}" alt=""></a></div>
							</div>
						</div>
					</div>
				</div><!-- .portfolio-single-image end -->

				<div class="col_one_third nobottommargin">

					<!-- Portfolio Single - Meta
					============================================= -->
					<div class="card events-meta mb-4">
						<div class="card-body">
							<div class="row justify-content-center">
								<div class="col-md-4 mb-2">
									<i class="{{ $servicio->icon }} fa-4x mx-auto"></i>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p>{{ $servicio->contenido }}</p>
								</div>
							</div>


						</div>
					</div>
					<!-- Portfolio Single - Meta End -->

				</div>

				<!-- Portfolio Single Content
				============================================= -->
				<div class="col_two_third portfolio-single-content col_last nobottommargin">

					<!-- Portfolio Single - Description
					============================================= -->
					<div class="fancy-title title-dotted-border">
						<h2>{{ $servicio->title }}</h2>
					</div>

					<div class="col nobottommargin">
						{!! $servicio->contenido_modal !!}
					</div>
					<!-- Portfolio Single - Description End -->

				</div><!-- .portfolio-single-content end -->

				<div class="clear"></div>
				</div>
	    </div>
		</div>
</div>
@endforeach
@push('scripts')
<script src="{{asset('lib/animatedModal/animatedModal.min.js')}}"></script>
<script src="{{asset('lib/collapser/jquery.collapser.js')}}"></script>
  <script>
@foreach($servicios as $servicio)
	$('#modal{{$servicio->id}}').animatedModal({
		color: 'rgba(0,0,0,0.4)'
	});
@endforeach

    // $('.short').collapser({
    // 	mode: 'lines',
    // 	truncate: 2,
    //   ellipsis: '...',
    //   showText: 'Mostrar Más &darr;',
    //   hideText: 'Mostrar Menos &uarr;'
    // });
    // // $('.short').shorten({
    // //   "showChars" : 100,
    // // 	"moreText"	: "Leer Más",
    // // 	"lessText"	: "Menos",
    // // });
  </script>
@endpush
