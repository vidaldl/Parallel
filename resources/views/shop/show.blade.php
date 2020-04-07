@extends('layouts.index')
@section('style')
  @include('bladeStyles.shop')
@endsection

@section('content')
  <!-- Header -->
  <header id="header" class="full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
      <div class="container clearfix">
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

  <!-- Page Title
		============================================= -->
  <section id="page-title">

			<div class="container clearfix">
				<h1>Pink Printed Dress</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/#shop">{{$menu_item[0]->item_inicio}}</a></li>
          @foreach($orders as $item)
          @if($item->section == 'shop')
					<li class="breadcrumb-item active" aria-current="page">{{$item->menu_name}}</li>
          @endif
          @endforeach
				</ol>
			</div>

		</section><!-- #page-title end -->

    <!-- Content
  ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">

        <div class="single-product">

          <div class="product">

            <div class="col_two_fifth">

              <!-- Product Single - Gallery
              ============================================= -->
              <div class="product-image">
                <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                  <div class="flexslider">
                    <div class="slider-wrap" data-lightbox="gallery">
                      <div class="slide" data-thumb="images/shop/thumbs/dress/3.jpg"><a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                      <div class="slide" data-thumb="images/shop/thumbs/dress/3-1.jpg"><a href="images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                      <div class="slide" data-thumb="images/shop/thumbs/dress/3-2.jpg"><a href="images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
                    </div>
                  </div>
                </div>
                <div class="sale-flash">Sale!</div>
              </div><!-- Product Single - Gallery End -->

            </div>

            <div class="col_three_fifth product-desc col_last">

              <!-- Product Single - Price
              ============================================= -->
              <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div><!-- Product Single - Price End -->

              <!-- Product Single - Rating
              ============================================= -->
              <!-- <div class="product-rating">
                <i class="icon-star3"></i>
                <i class="icon-star3"></i>
                <i class="icon-star3"></i>
                <i class="icon-star-half-full"></i>
                <i class="icon-star-empty"></i>
              </div> -->
              <!-- Product Single - Rating End -->

              <div class="clear"></div>
              <div class="line"></div>

              <!-- Product Single - Quantity & Cart Button
              ============================================= -->
              <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                <div class="quantity clearfix">
                  <input type="button" value="-" class="minus">
                  <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                  <input type="button" value="+" class="plus">
                </div>
                <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
              </form><!-- Product Single - Quantity & Cart Button End -->

              <div class="clear"></div>
              <div class="line"></div>

              <!-- Product Single - Short Description
              ============================================= -->
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
              <p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
              <!-- Product Single - Short Description End -->

              <!-- Product Single - Meta
              ============================================= -->
              <div class="card product-meta">
                <div class="card-body">
                  <div class="si-share noborder clearfix">
                    <span>Share:</span>
                    <div>
                      <a href="#" class="social-icon si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div><!-- Product Single - Meta End -->

              <!-- Product Single - Share
              ============================================= -->
              <!-- Product Single - Share End -->

            </div>



            <div class="col_full nobottommargin">

              <div class="tabs clearfix nobottommargin" id="tab-1">

                <ul class="tab-nav clearfix">
                  <li><a><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Description</span></a></li>


                </ul>

                <div class="tab-container">

                  <div class="tab-content clearfix" id="tabs-1">
                    <p>Pink printed dress,  woven, round neck with a keyhole and buttoned closure at the back, sleeveless, concealed zip up at left side seam, belt loops along waist with slight gathers beneath, brand appliqu?? above left front hem, has an attached lining.</p>
                    Comes with a white, slim synthetic belt that has a tang clasp.
                  </div>


                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="clear"></div><div class="line"></div>

        <div class="col_full nobottommargin">

          <h4>Related Products</h4>

          <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">

            <div class="oc-item">
              <div class="product iproduct clearfix">
                <div class="product-image">
                  <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                  <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                  <div class="sale-flash">50% Off*</div>
                  <div class="product-overlay">
                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                  </div>
                </div>
                <div class="product-desc center">
                  <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                  <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                  <div class="product-rating">
                    <i class="icon-star3"></i>
                    <i class="icon-star3"></i>
                    <i class="icon-star3"></i>
                    <i class="icon-star3"></i>
                    <i class="icon-star-half-full"></i>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section><!-- #content end -->

@endsection

@include('sections.footer')
