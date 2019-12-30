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

						<div id="portfolio" class="portfolio grid-container">
              @foreach($portfolio_items as $item)
                <div class="portfolio-item col-md-3 mt-5 @foreach($item->portfolio_category->pluck('name') as $ca)pf-{{str_replace(' ', '', $ca)}} @endforeach ">
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
							<a href="#" style="margin: 50px 0px;" class="mx-auto button button-border button-rounded button-dark button-large">Mostrar Más</a>
						</div>


					<div class="clear"></div>

				</div>
