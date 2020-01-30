<div id="gallery" class="section notopmargin noborder nobottommargin" >

  <div class="container clearfix">

    <div class="heading-block center nobottommargin">
      <h2>{{$gallery_sections[0]->title}}</h2>
      <span>{{$gallery_sections[0]->subtitle}}</span>
    </div>

  </div>

</div>

<!-- Portfolio Items
============================================= -->
<div class="container-fluid clearfix">
  <div class="portfolio row justify-content-center portfolio-nomargin portfolio-notitle portfolio-full clearfix">
    @foreach($gallery_items as $item)

        @if($item->display_type == 1)
        <!-- VIDEO -->
        <article class="col-md-3 portfolio-item pf-graphics pf-uielements">
          <div class="portfolio-image">
            <a href="#">
              <img id="videoThumb{{$item->id}}" alt="Mac Sunglasses">
            </a>
            <div class="portfolio-overlay">
              <a id="video{{$item->id}}" href="{{$item->video}}" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
              <a href="{{route('portfolioGallery.show', $item->id)}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
            </div>
          </div>
          <div class="portfolio-desc">
            <h3><a href="{{route('portfolioGallery.show', $item->id)}}">{{$item->title}}</a></h3>
            <span><a href="{{route('portfolioGallery.show', $item->id)}}">{{$item->subtitle}}</a></span>
          </div>
        </article>
        @else
          @if($item->gallery_images->count() > 1)
          <!-- Carousel Fotos -->
          <article class="col-md-3 portfolio-item pf-icons pf-illustrations">
            <div class="portfolio-image">
              <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                <div class="flexslider">
                  <div class="slider-wrap">
                    @foreach($item->gallery_images as $image)
                      <div class="slide"><a href="#"><img src="{{'/storage/' . $image->image}}" alt="Morning Dew"></a></div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="portfolio-overlay" data-lightbox="gallery">
                @foreach($item->gallery_images as $image)
                  <a href="{{'/storage/' . $image->image}}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                @endforeach
                <a href="{{route('portfolioGallery.show', $item->id)}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="{{route('portfolioGallery.show', $item->id)}}">{{$item->title}}</a></h3>
              <span><a href="{{route('portfolioGallery.show', $item->id)}}">{{$item->subtitle}}</a></span>
            </div>
          </article>
          @else
          <!-- FOTO Unica -->
          <article class="col-md-3 portfolio-item pf-media pf-icons">
            <div class="portfolio-image">
              <a href="#">
                @foreach($item->gallery_images as $image)
                  <img src="{{'/storage/' . $image->image}}" alt="Open Imagination">
                @endforeach
              </a>
              <div class="portfolio-overlay">
                @foreach($item->gallery_images as $image)
                  <a href="{{'/storage/' . $image->image}}" class="left-icon" data-lightbox="image"><i class="fas fa-image"></i></a>
                  <a href="{{route('portfolioGallery.show', $item->id)}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                @endforeach
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="{{route('portfolioGallery.show', $item->id)}}">{{$item->title}}</a></h3>
              <span><a href="{{route('portfolioGallery.show', $item->id)}}">{{$item->subtitle}}</a></span>
            </div>
          </article>
          @endif
        @endif

    @endforeach


  </div>
</div>

@push('scripts')
  <script>
  $(document).ready(function() {
    function youtube_parser(url){
      var regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
      var match = url.match(regExp);
      if (match && match[2].length == 11) {
        return match[2];

      } else {
        //error
      }
    }

    @foreach($gallery_items as $item)

        @if($item->display_type == 1)

        var url = $('#video{{$item->id}}').attr('href');
        var urlId = youtube_parser(url);

        $('#videoThumb{{$item->id}}').attr('src', 'https://img.youtube.com/vi/' + urlId + '/0.jpg');
        // $('#video{{$item->id}}').attr('href', 'https://www.youtube.com/watch?v=' + urlId);
        @endif

    @endforeach
  });
  </script>
@endpush
