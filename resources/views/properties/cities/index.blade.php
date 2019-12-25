@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Sectores </h1>
  @if(str_contains(Request::fullUrl(), '/trashed-cities'))
    <a href="{{ route('cities.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Volver a Sectores<span></a>
  @else
  <a href="{{ route('cities.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Agregar Sector<span></a>
  <a href="{{ route('trashed-cities.index')}}" class="d-none d-sm-inline-block btn btn-danger btn-icon-split shadow-sm"><span class="icon text-white"><i class="fas fa-plus fa-trash "></i></span><span class="text"> &nbsp;Papelera<span></a>
  @endif

</div>
@if($cities->count() > 0)
<div class="card">
  <div class="card-body table-hover" >
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Sector</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="table-striped">

          @foreach($cities as $city)
          <tr>
              <td>
                <h4>{{ $city->name }}</h4>
              </td>
                <form method="POST" action="{{ route('cities.destroy', $city->id) }}">
                  @csrf
                  @method('DELETE')
              <td>
                  <span class="float-right">

                      <button  type="submit" class="btn btn-circle btn-danger float-right ml-3">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @if($city->trashed())
                    <form class="float-right" action="{{ route('restore-cities', $city->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-success btn-inverse" >
                        <i class="fas fa-trash-restore"></i>&nbsp; Restaurar
                      </button>
                    </form>
                    @else
                    <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-success btn-inverse float-right" >
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
    @if(str_contains(Request::fullUrl(), '/trashed-cities'))
    <h3 class="h3 text-center text-gray-800">No hay nada en la Papelera.</h3>
    @else
    <h3 class="h3 text-center text-gray-800">Ahora mismo no hay Sectores. <a href="{{route('cities.create')}}">Agrega el Primero</a>.</h3>
    @endif
  @endif

</div>

@endsection
