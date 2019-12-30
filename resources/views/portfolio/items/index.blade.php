@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Portfolio: Artículos</h1>
  @if (Request::is('trashed-portfolioItems'))
    <a href="{{ route('portfolioItems.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Portfolio: Artículos<span></a>
  @else
    <a class="btn btn-danger" href="{{route('trashed-portfolioItems.index')}}"><i class="fas fa-trash"></i>&nbsp;Papelera</a>
    <a href="{{ route('portfolioItems.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Nuevo Artículo<span></a>
  @endif
</div>
@if($portfolioItems->count() > 0)
<div class="card">
  <div class="card-body table-hover" >
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Icono</th>
            <th scope="col">Titulo</th>
            <th scope="col">Categorias</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="table-striped">

          @foreach($portfolioItems as $item)
          <tr>
              <td>
                <img src="{{ '/storage/' . $item->image }}" width="120" alt="">
              </td>
              <td>
                <h4>{{ $item->title }}</h4>
              </td>
              <td>
              <a href="{{route('portfolioCategories.index')}}">
                @foreach($item->portfolio_category->pluck('name') as $ca)
                  @if($loop->last)
                  {{$ca}}.
                  @else
                  {{$ca}},
                 @endif
                @endforeach
              </a>
              </td>
                <form method="POST" action="{{ route('portfolioItems.destroy', $item->id) }}">
                  @csrf
                  @method('DELETE')
              <td>
                  <span class="float-right">

                      <button  type="submit" class="btn btn-circle btn-danger float-right ml-3">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                    @if($item->trashed())
                    <form class="float-right" action="{{ route('restore-portfolio-items', $item->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-success btn-inverse" >
                        <i class="fas fa-trash-restore"></i>&nbsp; Restaurar
                      </button>
                    </form>
                    @else
                    <a href="{{ route('portfolioItems.edit', $item->id) }}" class="btn btn-success btn-inverse float-right" >
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
          <a class="ml-auto btn btn-danger" href="{{route('trashed-portfolioItems.index')}}"><i class="fas fa-trash"></i>&nbsp;Papelera</a>
        </div>
      </div>
    </div>
  </div>
</div>

  @else
    @if (Request::is('trashed-portfolioItems'))
      <h3 class="h3 text-center text-gray-800">Ahora mismo no hay Artículos en la Papelera</h3>
    @else
      <h3 class="h3 text-center text-gray-800">Ahora mismo no hay Artículos</h3>
    @endif
  @endif

</div>

@endsection
