@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Enlaces Destacados</h1>
  @if (\Request::is('trashed-catalog'))
    <a href="{{ route('catalog.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Artículos<span></a>
</div>

  @else
    <a href="{{ route('catalog.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Nuevo Artículo<span></a>

</div>
<div class="card mb-5">
  <form method="POST" class="container" action="{{route('catalog.section.update', 1)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title" class="col-form-label">Titulo de la seccion</label>
      <input id="title" onchange="this.form.submit()" type="input" name="title" value="{{$catalog_sections[0]->title}}" class="form-control @error('title') is-invalid @enderror">
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
@if($catalog_items->count() > 0)
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

          @foreach($catalog_items as $item)
          <tr>
              <td>
                <img src="{{ '/storage/' . $item->img_primaria }}" width="120" alt="">
              </td>
              <td>
                <h4>{{ $item->title }}</h4>
              </td>
                <form method="POST" action="{{ route('catalog.destroy', $item->id) }}">
                  @csrf
                  @method('DELETE')
              <td>
                  <span class="float-right">

                      <button  type="submit" class="btn btn-circle btn-danger float-right ml-3">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @if($item->trashed())
                    <form class="float-right" action="{{ route('restore-catalog', $item->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-success btn-inverse" >
                        <i class="fas fa-trash-restore"></i>&nbsp; Restaurar
                      </button>
                    </form>
                    @else
                    <a href="{{ route('catalog.edit', $item->id) }}" class="btn btn-success btn-inverse float-right" >
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
          <a class="ml-auto btn btn-danger" href="{{route('trashed-catalog.index')}}"><i class="fas fa-trash"></i>&nbsp;Papelera</a>
        </div>
      </div>
    </div>
  </div>
</div>

  @else
  <div class="card" style="min-height: 300px;">
    <div class="container mt-5">
      <h3 class="h3 text-center text-gray-800">Ahora mismo no hay articulos en la Papelera del catálogo</h3>
    </div>
  </div>


  @endif

</div>

@endsection
