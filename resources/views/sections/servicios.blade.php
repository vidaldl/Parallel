<div id="servicios" class="clear"></div>
<div class="section notopmargin nobottommargin nobottomborder" style="background-color: #fff">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h3>{{$contenidosection2s[0]->title}}</h3>
		</div>
	</div>
</div>

<div class="container clearfix bottommargin">
  <div class="row justify-content-center">
	  @foreach($servicios as $servicio)
    <div class="col-md-4 mb-5">
      <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
        <div class="fbox-icon">
          <a href="#"><i class="{{ $servicio->icon }}"></i></a>
        </div>
        <h3>{{ $servicio->title }}</h3>
        <span class="short">{!! $servicio->contenido !!}</span>
      </div>
    </div>
		@endforeach
  </div>
</div>

@push('scripts')
<script src="{{asset('lib/collapser/jquery.collapser.js')}}"></script>
  <script>
    $('.short').collapser({
    	mode: 'lines',
    	truncate: 2,
      ellipsis: '...',
      showText: 'Mostrar Más &darr;',
      hideText: 'Mostrar Menos &uarr;'
    });
    // $('.short').shorten({
    //   "showChars" : 100,
    // 	"moreText"	: "Leer Más",
    // 	"lessText"	: "Menos",
    // });
  </script>
@endpush
