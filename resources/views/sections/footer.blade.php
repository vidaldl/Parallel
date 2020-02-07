@section('footer')

<footer id="footer" class="site-footer dark {{ $contenidosectionfooters[0]->display == '0' ? 'd-none' : '' }}" id="footer">
  <!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="#" data-href="#slider">{{$menu_item[0]->item_inicio}}</a>/
							@foreach($orders as $item)
								@if($item->display == 1 && $item->menu_display == 1)
									<a href="#{{$item->section}}">{{$item->menu_name}}</a>/
								@endif
							@endforeach
						</div>
						&copy; Copyright {{$contenidosectionfooters[0]->copy}} {{ now()->year }}

					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="{{$contenidosectionfooters[0]->facebook_link}}" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="{{$contenidosectionfooters[0]->twitter_link}}" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
              <a href="{{$contenidosectionfooters[0]->instagram_link}}" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
							<a href="/login" target="_blank" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-user21"></i>
								<i class="icon-fingerprint"></i>
							</a>
              <br>
                Designed by <a href="https://siscop.net">Siscop</a>
						</div>

					</div>

				</div>

			</div><!-- #copyrights end -->
</footer>

@endsection
