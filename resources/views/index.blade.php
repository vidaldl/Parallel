@extends('layouts.index')

@section('style')
  @include('indexStyle')
@endsection

@section('content')

  <!-- Header -->
  <header id="header" class="full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
      <div class="container-fluid clearfix">
        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
        <!-- Logo
        ============================================= -->
        <div id="logo">
          <a href="/" class="standard-logo"><img src="{{'/storage/' . $menu_item[0]->logo}}"></a>
          <a href="index.html" class="retina-logo"><img src="{{'/storage/' . $menu_item[0]->logo}}" alt="Logo"></a>
        </div>
        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="dark">
          <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
            <li><a href="#" data-href="#slider" style="font-family: {{$fonts[1]->font_name}}"><div>{{$menu_item[0]->item_inicio}}</div></a></li>
            @foreach($orders as $item)
              @if($item->display == 1 && $item->menu_display == 1)
                <li><a href="#" data-href="#{{$item->section}}" style="font-family: {{$fonts[1]->font_name}}"><div>{{$item->menu_name}}</div></a></li>
              @endif
            @endforeach

          </ul>
          <ul style="border: none;">
          @if($styles[0]->show_link_1 == '1')
            @if($styles[0]->link_mode_1 == '1')
              <li data-toggle="tooltip" data-placement="bottom" title="{{$styles[0]->custom_link_text_1}}">
    						<a style="font-family: {{$fonts[1]->font_name}}" href="{!! $styles[0]->custom_link_address_1 !!}"><i class="{{$styles[0]->custom_icon_1}} fa-2x"></i></a>
    					</li>
            @elseif($styles[0]->link_mode_1 == '2')
              <li><a style="font-family: {{$fonts[1]->font_name}}" href="{!! $styles[0]->custom_link_address_1 !!}"><div>{{$styles[0]->custom_link_text_1}}</div></a></li>
            @endif
          @endif
          @if($styles[0]->show_link_2 == '1')
            @if($styles[0]->link_mode_2 == '1')
              <li data-toggle="tooltip" data-placement="bottom" title="{{$styles[0]->custom_link_text_2}}">
    						<a style="font-family: {{$fonts[1]->font_name}}" href="{!! $styles[0]->custom_link_address_2 !!}"><i class="{{$styles[0]->custom_icon_2}} fa-2x"></i></a>
    					</li>
            @elseif($styles[0]->link_mode_2 == '2')
              <li><a style="font-family: {{$fonts[1]->font_name}}" href="{!! $styles[0]->custom_link_address_2 !!}"><div>{{$styles[0]->custom_link_text_2}}</div></a></li>
            @endif
          @endif
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

    @foreach($orders as $order)
      @php
        $path = 'sections.' . $order->section ;
      @endphp
      @if($order->display == 1)
        @if($order->line == 1)
          @if($order->line_style == 1)
            <div class="container">
              <div class="line"></div>
            </div>
          @elseif($order->line_style == 2)
            <div class="line"></div>
          @endif
        @elseif($order->line == 2)
          <div class="topmargin-lg"></div>
        @endif
        @include($path)
      @endif
    @endforeach

    @if($contenidosectionfooters[0]->line == 1)
      @if($contenidosectionfooters[0]->line_style == 1)
        <div class="container">
          <div class="line"></div>
        </div>
      @elseif($contenidosectionfooters[0]->line_style == 2)
        <div class="line"></div>
      @endif
    @elseif($contenidosectionfooters[0]->line == 2)
      <div class="topmargin-lg"></div>
    @endif

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
