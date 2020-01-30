@extends('layouts.index')

@section('content')
<div id="wrapper" class="clearfix">


  <!-- Page Title
  ============================================= -->
  <section id="page-title">
    @php
      $dire = Request::url();
      $final = strstr($dire, 'portfolioGallery/', true)
    @endphp
    <div class="container clearfix">
      <h1>{{$gallery_items->title}}</h1>
      <div id="portfolio-navigation">
        @if($previous)
          <a href="{{$final . 'portfolioGallery/' .$previous->id}}"><i class="icon-angle-left"></i></a>
        @endif
        <a href="/#gallery"><i class="icon-line-grid"></i></a>
        @if($next)
          <a href="{{$final . 'portfolioGallery/' .$next->id}}"><i class="icon-angle-right"></i></a>
        @endif
      </div>
    </div>

  </section><!-- #page-title end -->

  <!-- Content
  ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">
<!-- VIDEO -->
@if($gallery_items->display_type == 1)
      	<div class="col_two_third portfolio-single-image nobottommargin">
      		<iframe id="video" src="{{$gallery_items->video}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      	</div>
@else
  @if($gallery_items->gallery_images->count() > 1)
<!-- GALLERY -->
        <div class="col_two_third portfolio-single-image nobottommargin">
          <div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
            <div class="flexslider">
              <div class="slider-wrap">
                @foreach($gallery_items->gallery_images as $image)
                <div class="slide" data-thumb="{{'/storage/' . $image->image}}"><a href="#"><img src="{{'/storage/' . $image->image}}" alt=""></a></div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
  @else
<!-- IMAGE -->
        <div class="col_two_third portfolio-single-image nobottommargin">
          @foreach($gallery_items->gallery_images as $image)
            <a href="#"><img src="{{'/storage/' . $image->image}}" alt=""></a>
          @endforeach
        </div>
  @endif
@endif








        <!-- Portfolio Single Content
        ============================================= -->
        <div class="col_one_third portfolio-single-content col_last nobottommargin">

          <!-- Portfolio Single - Description
          ============================================= -->
          <div class="fancy-title title-bottom-border">
            <h2>{{$gallery_items->desc_title}}</h2>
          </div>
          <div>{!! $gallery_items->desc !!}</div>
          <!-- Portfolio Single - Description End -->

          <div class="line"></div>

          <!-- Portfolio Single - Meta
          ============================================= -->
          <!-- <ul class="portfolio-meta bottommargin">
            <li><span><i class="icon-user"></i>Created by:</span> John Doe</li>
            <li><span><i class="icon-calendar3"></i>Completed on:</span> 17th March 2014</li>
            <li><span><i class="icon-lightbulb"></i>Skills:</span> HTML5 / PHP / CSS3</li>
            <li><span><i class="icon-link"></i>Client:</span> <a href="#">Google</a></li>
          </ul> -->
          <!-- Portfolio Single - Meta End -->

          <!-- Portfolio Single - Share
          ============================================= -->
          <div class="si-share clearfix">
            <span>Share:</span>
            <div>
              <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" class="social-icon si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>
              <a href="https://twitter.com/home?status={{ Request::url() }}" class="social-icon si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
              <a href="https://pinterest.com/pin/create/button/?url={{ Request::url() }}" class="social-icon si-borderless si-pinterest">
                <i class="icon-pinterest"></i>
                <i class="icon-pinterest"></i>
              </a>
              <a href="mailto:info@example.com?&subject=&body={{ Request::url() }}" class="social-icon si-borderless si-email3">
                <i class="icon-email3"></i>
                <i class="icon-email3"></i>
              </a>
            </div>
          </div>
          <!-- Portfolio Single - Share End -->

        </div><!-- .portfolio-single-content end -->

        <div class="clear"></div>

        <div class="divider divider-center"><i class="icon-circle"></i></div>




      </div>

    </div>

  </section><!-- #content end -->
</div>
@endsection

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
      var url = $('#video').attr('src');
      var urlId = youtube_parser(url);

      $('#video').attr('src', 'https://www.youtube.com/embed/' + urlId);


});
</script>
@endpush
