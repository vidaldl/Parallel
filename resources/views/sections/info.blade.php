<!--
<section class="cta" id="info" style="{{ $contenidosection2s[0]->display == '0' ? 'color: black;background-color: #FFFFFF;' : '' }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12 text-lg-left text-center">
        <h2 class="mb-3">
            {{$contenidosection3s[0]->title}}
          </h2>
      <div class="contenidoStyle">

          {!! $contenidosection3s[0]->contenido !!}

      </div>
      </div>

      <div id="articuloss" class="col-lg-3 col-sm-12 text-lg-right text-center align-self-center">
        <a class="btn {{ $contenidosection2s[0]->display == '0' ? 'btn-full' : 'btn-ghost' }}" href="/about">{{$contenidosection3s[0]->button}}&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section> -->
<div id="info" class="clear"></div>

<div class="container clearfix">
  <div class="promo promo-dark promo-flat bottommargin-lg">
  	<h3 class="t400 ls1">{{$contenidosection3s[0]->title}}</h3>
    <div class="dark">{!! $contenidosection3s[0]->contenido !!}</div>
  	<a href="#" class="button button-dark button-large button-rounded">{{$contenidosection3s[0]->button}}</a>
  </div>
</div>
