@extends('layouts.index')
@section('style')

@endsection

@section('content')
<!-- Header -->
  <header id="header" class="transparent-header full-header " data-sticky-class="not-dark">
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

<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>{{$portfolioItems->title}}</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Inicio</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$portfolioItems->title}}</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<div class="single-post nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2>{{$portfolioItems->subtitle}}</h2>
								</div><!-- .entry-title end -->



								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<a href="#"><img src="{{'/storage/' . $portfolioItems->screenshot}}" alt="Blog Single"></a>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									{!! $portfolioItems->contenido !!}

									<!-- Post Single - Content End -->

									<!-- Tag Cloud
									============================================= -->
									<div class="tagcloud clearfix bottommargin">
										@foreach($portfolioItems->portfolio_category->pluck('name') as $cat)
											<a href="#">{{$cat}}</a>
										@endforeach
									</div><!-- .tagcloud end -->

									<div class="clear"></div>



								</div>
							</div><!-- .entry end -->


							<!-- Empresa
							============================================= -->
							<div class="card">
								<div class="card-header"><strong>Desarollado por <a href="#">{{$portfolioItems->author}}</a></strong></div>
								<div class="card-body">
									<div class="author-image">
										<img src="{{'/storage/' . $portfolioItems->logo}}" alt="" class="rounded-circle">
									</div>
									{{$portfolioItems->author_bio}}
								</div>
							</div><!-- Post Single - Author End -->



								<div class="clear"></div>

						</div>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget clearfix">

								<h4>{{$portfolioItems->link_title}}</h4>
								<a href="{{$portfolioItems->link}}" class="mr-auto button button-rounded button-reveal button-border button-large tright button-green">
									<i class="{{$portfolioItems->button_icon}}"></i>
									<span>{{$portfolioItems->button_text}}</span>
								</a>

							</div>


						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->
@endsection

@include('sections.footer')
