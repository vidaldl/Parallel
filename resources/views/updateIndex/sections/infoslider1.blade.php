<!-- Info Slider -->
  <div class="col-md-12 mb-4">
    <!-- LINE/SPACE -->
    @foreach($orders as $item)
      @if($item->id == 2)
    <form method="POST" action="{{route('line.update', 2)}}">
      @csrf
      <div class="line-space card col-md-8 offset-md-2 mt-4 mb-4">
        <a href="#" style="text-decoration: none" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          <div class="card-header py-3">
          <div class="row">
            <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Espacio entre:</h6></span>
                @if($item->line == 0)
                  <select onchange="this.form.submit()" name="line-display-hidden" class="col-md-6  float-right">
                    <option selected>Nada</option>
                    <option value = "1">Línea</option>
                    <option value = "2">Margen</option>
                  </select>
                @endif
          </div>
        </div>
        </a>
        @if($item->line != 0)
        <div id="collapse9" class="collapse">
          <div class="card-body row">
          <div class="col-md-6 offset-md-3">
            <div class="row">
              <div class="col-md-6">
                <label for="line-display">Espacio:</label>
                <select name="line-display" onchange="this.form.submit()">
                  <option value="0">No Mostrar</option>
                @if($item->line == 1)
                  <option value="1" selected>Línea</option>
                  <option value="2">Margen</option>
                  @elseif($item->line == 2)
                  <option value="1">Línea</option>
                  <option value="2" selected>Margen</option>
                  @endif
                </select>
              </div>
              <div class="col-md-6 {{$item->line == 2 ? 'd-none' : ''}}">

                  <label for="line-display">Estilo de Línea:</label>
                  <select name="line-style" onchange="this.form.submit()">
                    @if($item->line_style == 1)
                      <option value="1" selected>Parcial</option>
                      <option value="2">Completo</option>
                    @elseif($item->line_style == 2)
                      <option value="1">Parcial</option>
                      <option value="2" selected>Completo</option>
                    @endif
                  </select>

              </div>
            </div>
          </div>
        </div>
        </div>
        @endif
      </div>
    </form>
      @endif
    @endforeach
    <!-- END LINE/SPACE -->

    <div class="card shadow mb-4">
      <a href="#" style="text-decoration: none" data-toggle="collapse" data-target="#infoslider1_2" aria-expanded="true" aria-controls="infoslider1_2">
        <div class="card-header py-3">
        <form method="POST" action="{{route('infoSlider.display', $info_slider_texts[0]->id)}}">
          @csrf
          <div class="row">
            <div class="col-md-1">
              <div class="handle"><i class="fas fa-arrows-alt"></i></div>
            </div>
            <span class="col-md-5"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion</h6></span>
              <select onchange="this.form.submit()" name="infoslider1" class="col-md-6  float-right">
                @foreach($orders as $order)
                @if($order->section == 'infoslider1' && $order->display == 1)
                <option selected value="1">Mostrar</option>
                <option value="0">Esconder</option>
                @elseif($order->section == 'infoslider1' && $order->display == 0)
                <option value="1">Mostrar</option>
                <option selected value="0">Esconder</option>
                @endif
                @endforeach
              </select>
          </div>
        </form>
      </div>
      </a>
      <div id="infoslider1_2" class="collapse">
        <div class="card-body row">
        <div class="col-md-6">
          <img class="img-fluid" src="{{asset('img/sections/infoSlider.png')}}">
        </div>
        <div class=" col-md-6">
          <div class="row">
            <a class="btn btn-success mx-auto mt-5" href="editInfoSlider/{{$info_slider_texts[0]->id}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
<!-- /Info Slider -->
