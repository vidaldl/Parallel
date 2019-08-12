@foreach($contenidosection2s as $contenidosection2)

  <section class="features {{ $contenidosection2->display == '0' ? 'd-none' : '' }}" id="servicios">
    <div class="container">
      <h2 class="text-center">
          {{$contenidosection2->title}}
        </h2>
@endforeach
      <div class="row">
      @foreach($servicios as $servicio)
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon ">
                <span class="{{ $servicio->icon }}"></span>
              </div>
            </div>

            <div>
              <h3>{{ $servicio->title }}</h3>
              <p>
                {!! $servicio->contenido !!}
              </p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
