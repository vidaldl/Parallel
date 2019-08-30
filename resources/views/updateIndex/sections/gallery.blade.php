<!-- Gallery -->
  <div class="col-md-12 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <form method="POST" action="{{route('galleries.display')}}">
          @csrf
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Seccion de Galería</h6></span>
              <select onchange="this.form.submit()" name="gallery" class="col-md-6  float-right">
                @foreach($orders as $order)
                @if($order->section == 'gallery' && $order->display == 1)
                <option selected value="1">Mostrar</option>
                <option value="0">Esconder</option>
                @elseif($order->section == 'gallery' && $order->display == 0)
                <option value="1">Mostrar</option>
                <option selected value="0">Esconder</option>
                @endif
                @endforeach
              </select>
          </div>
        </form>
      </div>
      <div class="card-body row">
        <div class="col-md-6">
          <img class="img-fluid" src="{{asset('img/sections/gallery.png')}}">
        </div>
        <div class=" col-md-6">
          <div class="row">
            <a class="btn btn-success mx-auto mt-5" href="{{route('galleries.index')}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /Gallery -->
