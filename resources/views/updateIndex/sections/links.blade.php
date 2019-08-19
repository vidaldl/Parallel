<!-- links -->
  <div class="col-md-12 mb-4 {{ $link_sections[0]->display == '0' ? 'd-none' : ''}}">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
    <form method="POST" action="{{route('link.display', $link_sections[0]->id)}}">
      @csrf
      <div class="row">
        <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Enlaces Destacados</h6></span>
          <select onchange="this.form.submit()" name="link" class="col-md-6 float-right">
            <option value="1" {{ $link_sections[0]->display == '1' ? 'selected' : '' }}>Mostrar</option>
            <option value="0" {{ $link_sections[0]->display == '0' ? 'selected' : '' }}>Esconder</option>
          </select>
      </div>
    </form>
      </div>
      <div class="card-body row">
        <div class="col-md-6">
          <img class="img-fluid" src="{{asset('img/sections/enlaces.png')}}">
        </div>
        <div class=" col-md-6">
          <div class="row">
            <a class="btn btn-success mx-auto mt-5" href="editlink/{{$link_sections[0]->id}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- links -->
