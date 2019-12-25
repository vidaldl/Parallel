@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Datos Generales </h1>
  @if(str_contains(Request::fullUrl(), '/trashed-features'))
    <a href="{{ route('features.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Datos Generales<span></a>
  @else
  <a href="{{ route('features.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Agregar Dato General<span></a>
  <a href="{{ route('trashed-features.index')}}" class="d-none d-sm-inline-block btn btn-danger btn-icon-split shadow-sm"><span class="icon text-white"><i class="fas fa-plus fa-trash "></i></span><span class="text"> &nbsp;Papelera<span></a>
  @endif

</div>
@if($features->count() > 0)
<div class="card">
  <div class="card-body table-hover" >
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Dato</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="table-striped">

          @foreach($features as $feature)
          <tr>
              <td>
                <h4>{{ $feature->feature_name }}</h4>
              </td>
                <form method="POST" action="{{ route('features.destroy', $feature->id) }}">
                  @csrf
                  @method('DELETE')
              <td>
                  <span class="float-right">

                      <button  type="submit" class="btn btn-circle btn-danger float-right ml-3">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @if($feature->trashed())
                    <form class="float-right" action="{{ route('restore-features', $feature->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-success btn-inverse" >
                        <i class="fas fa-trash-restore"></i>&nbsp; Restaurar
                      </button>
                    </form>
                    @else
                    <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-success btn-inverse float-right" >
                      <i class="fas fa-edit"></i>&nbsp; Editar
                    </a>
                    @endif


                  </span>
              </td>

            @endforeach
          </tr>
        </tbody>

      </table>
    </div>
  </div>
</div>

  @else
    @if(str_contains(Request::fullUrl(), '/trashed-features'))
    <h3 class="h3 text-center text-gray-800">No hay nada en la Papelera.</h3>
    @else
    <h3 class="h3 text-center text-gray-800">Ahora mismo no hay Datos. <a href="{{route('features.create')}}">Agrega el Primero</a>.</h3>
    @endif
  @endif

</div>

@endsection
