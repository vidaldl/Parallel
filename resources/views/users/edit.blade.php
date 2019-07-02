@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row justify-content-center">
  <div class="card col-md-8 mb-5">
    <div class="card-body">
      <form autocomplete="off" method="POST" action="{{ route('users.update-profile') }}" >
        @csrf
        @method('PUT')

        <div class="row">
          <div class="form-group col-md-2">

            <img  class="img-profile rounded-circle img-fluid display-block"  src="{{ Gravatar::src($user->username) }}" alt="">
            <!-- <label for="imagen" class="col-form-label">Avatar</label>
            <input id="image" type="file" class="form-control" name="image"> -->
          </div>
          <div class="form-group col-md-10">
            <label for="username" class="">Nombre de Usuario</label>
            <input name="username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}">
            @error('username')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        </form>
        <div class="form-group mt-3">
          <label>Password</label><br>
          <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form2').submit();" class="btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-lock fa-sm "></i></span><span class="text"> &nbsp;Cambiar Password<span></a>
        </div>
        <form id="logout-form" action="{{ route('logout.reset') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Cambiar Password</button>
        </form>


        <div class="form-group">
          <button type="submit" class="btn btn-success float-right">
            Actualizar
          </button>
        </div>


    </div>
  </div>
</div>




</div>
@endsection
