<div class="container clearfix">

					<div class="line"></div>
					<div class="row">


					<!-- Portfolio Filter
					============================================= -->
						<ul class="portfolio-filter clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
              @foreach($portfolio_categories as $category)
                <li><a href="#" data-filter=".pf-{{str_replace(' ', '', $category->name)}}">{{$category->name}}</a></li>
					    @endforeach
						</ul><!-- #portfolio-filter end -->
					</div>
					<div class="portfolio-container">
						<div id="portfolio" class="portfolio grid-container">
              @foreach($portfolio_items as $item)
                <div class="item portfolio-item col-md-3 mt-5 @foreach($item->portfolio_category->pluck('name') as $ca)pf-{{str_replace(' ', '', $ca)}} @endforeach ">
									<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
										<div class="fbox-icon">
											<a href="#"><i style="background-image: url({{ '/storage/' . $item->image }}); background-size: contain; background-repeat: no-repeat;" class="i-alt"></i></a>
										</div>
										<h3>{{$item->title}}<span class="subtitle">{{$item->subtitle}}</span></h3>
									</div>
								</div>
              @endforeach
						</div>
						<div class="row">
						<div class="pagination-container mx-auto topmargin nobottommargin">

							<ul class="pagination nomargin"></ul>

						</div>
						</div>
					</div>



					<div class="clear"></div>

				</div>
@push('scripts')

<script>
//this will execute on page load(to be more specific when document ready event occurs)
jQuery(document).ready(function($){

			$('.portfolio-container').pajinate({
				items_per_page : 8,
				item_container_id : '#portfolio',
				nav_panel_id : '.pagination-container ul',
				show_first_last: false
			});

			$( '.pagination a' ).click(function() {
				var t=setTimeout(function(){ $( '.flexslider .slide' ).resize(); },1000);
			});

		});
</script>
@endpush
