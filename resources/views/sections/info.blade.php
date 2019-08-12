@foreach($contenidosection3s as $contenidosection3)
<section class="cta {{ $contenidosection3->display == '0' ? 'd-none' : '' }}" id="acercas" style="{{ $contenidosection2s[0]->display == '0' ? 'color: black;background-color: #FFFFFF;' : '' }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12 text-lg-left text-center">
        <h2 class="mb-3">
            {{$contenidosection3->title}}
          </h2>
      <div class="contenidoStyle">

          {!! $contenidosection3->contenido !!}

      </div>
      </div>

      <div id="articuloss" class="col-lg-3 col-sm-12 text-lg-right text-center align-self-center">
        <a class="btn {{ $contenidosection2s[0]->display == '0' ? 'btn-full' : 'btn-ghost' }}" href="/about">{{$contenidosection3->button}}&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>
@endforeach
