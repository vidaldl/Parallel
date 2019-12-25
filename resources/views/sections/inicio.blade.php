@if ($contenidosection1s[0]->carousel == 1)
  @include('sections.inicio.carousel')
@endif

@if($contenidosection1s[0]->carousel == 0)
  @include('sections.inicio.static')
@endif
