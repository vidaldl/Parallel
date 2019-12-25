@section('css')

@endsection
<div class="container clearfix">
<div id="section-nextgen" class="page-section bottommargin-lg">
	<div class="row clearfix">

		<div class="col-lg-7 center pf-icons pf-illustrations alt">
      <!-- IMAGE -->
      <div class="portfolio-image">
        <div class="fslider" data-arrows="true" data-speed="400" data-pause="4000">
          <div class="flexslider">
            <div class="slider-wrap">
              @foreach($info_slider_images as $images)
              <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{ 'storage/' . $images->image }}" alt="Morning Dew"></a></div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="portfolio-overlay" data-lightbox="gallery">
          <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
          <a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
          <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
      </div>
      <!-- /IMAGE -->
		</div>

		<div class="col-lg-5">
			<div class="topmargin-lg d-none d-lg-block"></div>
			<div class="emphasis-title bottommargin-sm">
				<h2 style="font-size: 42px;" class="font-body ls1 t400">{!! $info_slider_texts[0]->title !!}</h2>
			</div>
			<p style="color: #777;" class="lead">{!! $info_slider_texts[0]->contenido !!}</p>
			<a href="{{ $info_slider_texts[0]->link }}" class="section-more-link">Learn More <i class="icon-angle-right"></i></a>
		</div>

	</div>
</div>

</div>
