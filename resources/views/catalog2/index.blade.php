@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Segundo Catálogo de Productos</h1>
  @if (\Request::is('trashed-catalog2'))
    <a href="{{ route('catalog2.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Artículos<span></a>
</div>

  @else
    <a href="{{ route('catalog2.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Nuevo Artículo<span></a>

</div>
<div class="col-md-12">
  <!-- LINE/SPACE -->
  @foreach($orders as $item)
    @if($item->id == 15)
  <form method="POST" action="{{route('line.update', 15)}}">
    @csrf
    <div class="line-space card col-md-8 offset-md-2 mt-4 mb-4">
      <a href="#" style="text-decoration: none">
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
      <div id="collapse3">
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
</div>
<div class="card mb-5">
  <form method="POST" class="container" action="{{route('catalog2.section.update', 1)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title" class="col-form-label">Titulo de la seccion</label>
      <input id="title" onchange="this.form.submit()" type="input" name="title" value="{{$catalog_section2s[0]->title}}" class="form-control @error('title') is-invalid @enderror">
        @error('title')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="form-group">
      <button class="btn btn-success float-right mb-3">Actualizar</button>
    </div>
  </form>
</div>
@endif
@if($catalog_item2s->count() > 0)
<div class="card">
  <div class="card-body table-hover" >
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Titulo</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="table-striped">

          @foreach($catalog_item2s as $item)
          <tr>
              <td>
                <img src="{{ '/storage/' . $item->img_primaria }}" width="120" alt="">
              </td>
              <td>
                <h4>{{ $item->title }}</h4>
              </td>
                <form method="POST" action="{{ route('catalog2.destroy', $item->id) }}">
                  @csrf
                  @method('DELETE')
              <td>
                  <span class="float-right">

                      <button  type="submit" class="btn btn-circle btn-danger float-right ml-3">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @if($item->trashed())
                    <form class="float-right" action="{{ route('restore-catalog2', $item->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-success btn-inverse" >
                        <i class="fas fa-trash-restore"></i>&nbsp; Restaurar
                      </button>
                    </form>
                    @else
                    <a href="{{ route('catalog2.edit', $item->id) }}" class="btn btn-success btn-inverse float-right" >
                      <i class="fas fa-edit"></i>&nbsp; Editar
                    </a>
                    @endif


                  </span>
                </h4>
              </td>

            @endforeach
          </tr>
        </tbody>

      </table>
      <div class="container-fluid">
        <div class="row">
          <a class="ml-auto btn btn-danger" href="{{route('trashed-catalog2.index')}}"><i class="fas fa-trash"></i>&nbsp;Papelera</a>
        </div>
      </div>
    </div>
  </div>
</div>

  @else
  <div class="card" style="min-height: 300px;">
    <div class="container mt-5">
      <h3 class="h3 text-center text-gray-800">Ahora mismo no hay articulos en la Papelera del Segundo catálogo</h3>
    </div>
  </div>


  @endif

</div>

@endsection
