

  <section class="features" id="servicios">
    <div class="container">
      <h2 class="text-center">
          {{$contenidosection2s[0]->title}}
        </h2>

      <div class="row">
      @foreach($servicios as $servicio)
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon ">
                <span class="{{ $servicio->icon }}"></span>
              </div>
            </div>

            <div class="toShorten">
              <h3>{{ $servicio->title }}</h3>

                {!! $servicio->contenido !!}

            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>

@push('scripts')
  <script>
    $('.toShorten p').shorten({
      "showChars" : 150,
    	"moreText"	: "Leer Más",
    	"lessText"	: "Menos",
    });
  </script>
@endpush
