<div class="container clearfix" id="catalog">
	<div class="notopmargin nobottommargin nobottomborder" style="background-color: #fff">
		<div class="container clearfix">
			<div class="heading-block center nomargin">
				<h3>{{$catalog_section2s[0]->title}}</h3>
			</div>
		</div>
	</div>

	<div class="col_full">

	  <!-- <h4>Related Products</h4> -->

	  <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-loop="false" data-autoplay="10000" data-margin="30" data-pagi="false"  data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
			@foreach($catalog_item2s as $item)
	    	<div class="oc-item">
  	      <div class="product iproduct clearfix">
  	        <div class="product-image">
  						@if($item->img_primaria)
  						<a href="#"><img src="{{'/storage/' . $item->img_primaria}}" alt="Checked Short Dress"></a>
  						@endif
  						@if($item->img_secundaria)
  	          <a href="#"><img src="{{'/storage/' . $item->img_secundaria}}" alt="Checked Short Dress"></a>
  						@endif
  						@if($item->destacado == 1)
  	          <div class="sale-flash">{{$item->destacado_title}}</div>
  						@endif
  	          <div class="product-overlay" data-lightbox="gallery">
  							@if($item->img_primaria)
  	            	<a href="{{'/storage/' . $item->img_primaria}}" class="add-to-cart" data-lightbox="gallery-item"><i class="{{$item->img_icon}}"></i><span>&nbsp;{{$item->img_btn}}</span></a>
  							@endif
  							@if($item->img_secundaria)
  								<a href="{{'/storage/' . $item->img_secundaria}}" class="add-to-cart" data-lightbox="gallery-item"><i class="{{$item->img_icon}}"></i><span>&nbsp;{{$item->img_btn}}</span></a>
  							@endif
  	          </div>
  	        </div>
  	        <div class="product-desc center">
  	          <div class="product-title"><h3><a href="#">{{$item->title}}</a></h3></div>
  	          	@if($item->precio)
  								<div class="product-price">
  									@if($item->destacado == 1)
  									<del>${{$item->precio}}</del>

  									<ins>${{$item->precio_nuevo}}</ins>
  									@else
  									${{$item->precio}}
  									@endif
  								</div>
  							@endif
  							@if($item->button)
  			          <div class="product-rating row">
  									<a href="{{$item->button_link}}" class="col-md-8 mx-auto center button button-small button-rounded button-reveal button-white button-light tright"><i class="{{$item->button_icon}}"></i><span>{{$item->button}}</span></a>
  			          </div>
  							@endif
  	        </div>
  	      </div>
	       </div>
			@endforeach
	  </div>

	</div>
</div>
