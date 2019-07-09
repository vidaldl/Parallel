@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Servicios</h1>

    <a href="{{ route('servicios.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Nuevo Servicio<span></a>


</div>
@if($servicios->count() > 0)
<div class="card">
  <div class="card-body table-hover" >
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Icono</th>
            <th scope="col">Titulo</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="table-striped">

          @foreach($servicios as $servicio)
          <tr>
              <td>
                <div class="feature-icon">
                  <span class="fa fa-{{ $servicio->icon }}"></span>
                </div>
              </td>
              <td>
                <h4>{{ $servicio->title }}</h4>
              </td>
                <form method="POST" action="{{ route('servicios.destroy', $servicio->id) }}">
                  @csrf
                  @method('DELETE')
              <td>
                  <span class="float-right">

                      <button  type="submit" class="btn btn-circle btn-danger float-right ml-3">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @if($servicio->trashed())
                    <form class="float-right" action="{{ route('restore-servicios', $servicio->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-success btn-inverse" >
                        <i class="fas fa-trash-restore"></i>&nbsp; Restaurar
                      </button>
                    </form>
                    @else
                    <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-success btn-inverse float-right" >
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

    <h3 class="h3 text-center text-gray-800">Ahora mismo no hay Servicios</h3>

  @endif

</div>

@endsection
