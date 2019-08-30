@section('footer')

<footer class="site-footer {{ $contenidosectionfooters[0]->display == '0' ? 'd-none' : '' }}" id="footer">
  <div class="bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-xs-12 text-lg-left text-center">
          <p class="copyright-text">
            © {{$contenidosectionfooters[0]->copy}}
          </p>
          <div class="credits">

           Designed by <a href="https://siscop.net">Siscop</a>
          </div>
        </div>

        <div class="col-lg-9 col-xs-12 text-lg-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#inicio">Inicio</a>
            </li>

            <li class="list-inline-item">
              <a href="#servicios">Servicios</a>
            </li>

            <li class="list-inline-item">
              <a href="/about">Acerca de</a>
            </li>

            <li class="list-inline-item">
              <a href="#articulos">Artículos</a>
            </li>

            <li class="list-inline-item">
              <a href="#contact">Contacto</a>
            </li>
            <li class="list-inline-item">
              <a target="_blank" href="{{$contenidosectionfooters[0]->twitter_link}}"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="{{$contenidosectionfooters[0]->facebook_link}}"><i class="fab fa-facebook"></i></a>
              <a target="_blank" href="{{$contenidosectionfooters[0]->instagram_link}}"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
          <ul class="list-inline">
            <li class="list-inline-item"><a target="_blank" href="/login">Admin&nbsp;&nbsp;<i class="fas fa-user"></i></li></a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

@endsection
