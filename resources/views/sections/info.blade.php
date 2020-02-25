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
<div id="info" class=""></div>

<div class="container clearfix">
  <div class="promo promo-dark promo-flat " style="background-color: {{$contenidosection3s[0]->background_color}}">
  	<div class="container row" style="padding: 25px 5px;">
      <div class="col-md-7 my-auto">
        <h3 class="t400 ls1 ml-4" style="color: {{$contenidosection3s[0]->text_color}}">{{$contenidosection3s[0]->title}}</h3>
        <div class="dark ml-4" style="color: {{$contenidosection3s[0]->text_color}}">{!! $contenidosection3s[0]->contenido !!}</div>
      </div>
    	<div class="col-md-5 my-auto">
        <a target="_blank" href="{{$contenidosection3s[0]->link}}" style="color: {{$contenidosection3s[0]->text_color}}" class="button col-md-12 mx-auto button-dark button-large button-rounded text-center">{{$contenidosection3s[0]->button}}</a>
      </div>
    </div>
  </div>
</div>
