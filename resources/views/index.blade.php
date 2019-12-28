@extends('layouts.index')

@section('style')
  @include('indexStyle')

@endsection

@section('content')

  <!-- Header -->
  <header id="header" class="transparent-header transparent-header-responsive full-header dark" data-sticky-class="not-dark">
    <div id="header-wrap">
      <div class="container clearfix">
        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
        <!-- Logo
        ============================================= -->
        <!-- <div id="logo">
          <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
          <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
        </div>-->
        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="dark">
          <ul>
            <li><a href="#slider"><div>Inicio</div></a></li>
            @foreach($orders as $item)
              @if($item->display == 1 && $item->menu_display == 1)
                <li><a href="#{{$item->section}}"><div>{{$item->menu_name}}</div></a></li>
              @endif
            @endforeach

          </ul>
          <ul style="border: none;">
            <li data-toggle="tooltip" data-placement="bottom" title="{{$styles[0]->custom_link_text_1}}">
  						<a class="{{$styles[0]->show_link_1 == 0 ? 'd-none' : ''}}" href="{!! $styles[0]->custom_link_address_1 !!}"><i class="{{$styles[0]->custom_icon_1}} fa-2x"></i></a>
  					</li>

            <li data-toggle="tooltip" data-placement="bottom" title="{{$styles[0]->custom_link_text_2}}">
  						<a class="{{$styles[0]->show_link_2 == 0 ? 'd-none' : ''}}" href="{!! $styles[0]->custom_link_address_2 !!}"><i class="{{$styles[0]->custom_icon_2}} fa-2x"></i></a>
  					</li>
          </ul>


							</div>
						</div>
        </nav><!-- #primary-menu end -->
      </div>
    </div>
  </header><!-- #header end -->
  <!-- #header -->

  <!--INICIO-->
  @include('sections.inicio')
  <!--/INICIO -->

<div id="content" style="margin-bottom: 0px;">
  <div class="content-wrap">
    @foreach($orders as $order)
      @php
        $path = 'sections.' . $order->section ;
      @endphp
      @if($order->display == 1)
        @include($path)
      @endif
    @endforeach
  </div>
</div>


@endsection

<!--Footer-->
@include('sections.footer')
<!--/Footer-->



@section('script')
<script type="text/javascript">

  $(document).ready(function() {

    $(".lol").each(function () {
      len=$(this).text().length;
      str= $(this).text().substr(0,130);
      lastIndexOf = str.lastIndexOf(" ");
      if(len>130) {
          $(this).text(str.substr(0, lastIndexOf) + '...');
      }
    });
    $('.flexslider').flexslider({
  animation: "slide"
});
  });

  $(window).load(function() {
    var height1 = $('.imageH').height();
    var height2 = $('.btnH').height();
    var sum = height1 - height2 - height2;
    $('.textHeight').css('min-height', sum + 'px');
    var windowWidth = $(window).width();

    if (windowWidth < 768) {
      $('#btnH').addClass('mt-5')
    }
  });

</script>

@endsection
