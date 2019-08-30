<!-- Pricing -->
  <div class="col-md-12 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
    <form method="POST" action="{{route('pricing.display', $pricings[0]->id)}}">
      @csrf
      <div class="row">
        <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Sección de Precios</h6></span>
          <select onchange="this.form.submit()" name="pricing" class="col-md-6  float-right">
            @foreach($orders as $order)
            @if($order->section == 'pricing' && $order->display == 1)
            <option selected value="1">Mostrar</option>
            <option value="0">Esconder</option>
            @elseif($order->section == 'pricing' && $order->display == 0)
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
          <img class="img-fluid" src="{{asset('img/sections/pricing.png')}}">
        </div>
        <div class=" col-md-6">
          <div class="row">
            <a class="btn btn-success mx-auto mt-5" href="editPricing">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Pricing -->
