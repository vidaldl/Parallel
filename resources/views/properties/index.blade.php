@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Propiedades</h1>
  @if(str_contains(Request::fullUrl(), '/trashed-properties'))
    <a href="{{ route('properties.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Volver a Propiedades<span></a>
  @else
  <a href="{{ route('properties.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Nueva Propiedad<span></a>
  <a href="{{ route('trashed-properties.index')}}" class="d-none d-sm-inline-block btn btn-danger btn-icon-split shadow-sm"><span class="icon text-white"><i class="fas fa-plus fa-trash "></i></span><span class="text"> &nbsp;Papelera<span></a>
  @endif
</div>
@if($properties->count() > 0)
<div class="card">
  <div class="card-body table-hover" >
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ciudad</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="table-striped">

          @foreach($properties as $property)
          <tr>
              <td>
                <img src="{{'storage/' . $property->image}}" height="90" width="100" alt="">
              </td>
              <td>
                  {{ $property->name }}
              </td>
              <td>
                <form method="POST" action="{{ route('properties.destroy', $property->id) }}">
                  @csrf
                  @method('DELETE')
                <h4>{{ $property->city }}
              </td>
              <td>
                  <span class="float-right">

                      <button  type="submit" class="btn btn-circle btn-danger float-right ml-3">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @if($property->trashed())
                    <form class="float-right" action="{{ route('restore-properties', $property->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-success btn-inverse" >
                        <i class="fas fa-trash-restore"></i>&nbsp; Restaurar
                      </button>
                    </form>
                    @else
                    <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-success btn-inverse float-right" >
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
    </div>
  </div>
</div>

  @else
    @if(str_contains(Request::fullUrl(), '/trashed-properties'))
    <h3 class="h3 text-center text-gray-800">No hay nada en la Papelera.</h3>
    @else
    <h3 class="h3 text-center text-gray-800">Ahora mismo no hay Propiedades</h3>
    @endif
  @endif

</div>


@endsection
