<!-- Info Slider 2 -->
  <div class="col-md-12 mb-4 {{ $info_slider_text2s[0]->display == '0' ? 'd-none' : ''}}">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
    <form method="POST" action="{{route('infoSlider2.display', $info_slider_text2s[0]->id)}}">
      @csrf
      <div class="row">
        <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion 2</h6></span>
          <select onchange="this.form.submit()" name="infoSlider" class="col-md-6  float-right">
            <option value="1" {{ $info_slider_text2s[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
            <option value="0" {{ $info_slider_text2s[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
          </select>
      </div>
    </form>
      </div>
      <div class="card-body row">
        <div class="col-md-6">
          <img class="img-fluid" src="{{asset('img/sections/infoSlider.png')}}">
        </div>
        <div class=" col-md-6">
          <div class="row">
            <a class="btn btn-success mx-auto mt-5" href="editInfoSlider2/{{$info_slider_text2s[0]->id}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /Info Slider 2 -->
