@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{isset($post) ? 'Editar Post' : 'Nuevo Post'}}</h1>
  <a href="{{route('posts.index')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Posts<span></a>
</div>


<div class="row justify-content-center">
  <div class="card col-md-8 mb-5">
    <div class="card-body">
      <form autocomplete="off" method="POST" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($post))
          @method('PUT')
        @endif

        <div class="row">
          <div class="form-group col-md-8">
            <label for="title" class="">Titulo del Post</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{isset($post) ? $post->title : ''}}">
            @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group col-md-4 float-right">
            <label for="category">Categoria</label>
            <select name="category" id="category" class="col-md-10 form-control">
              @foreach($categories as $category)
                <option value="{{ $category->id }}"
                  @if(isset($post))
                    @if($category->id === $post->category_id)
                      selected
                    @endif
                  @endif
                  >
                  {{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label for="description" class="col-form-label">Descripcion del Post</label>
          <textarea id="description" name="description" cols="5" rows="1" class="form-control @error('description') is-invalid @enderror" >{{ isset($post) ? $post->description : '' }}</textarea>
          @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="contenido" class="col-form-label">Contenido del Post</label>
          <textarea id="contenido" name="contenido" class="@error('contenido') is-invalid @enderror">{{isset($post) ? $post->contenido : ''}}</textarea>

          @error('contenido')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="image" class="col-form-label">Imagen de Portada</label>
          <input id="image" type="file" class="form-control" name="image">
        </div>
        @if(isset($post))
        <div class="form-group">
          <img src="{{'/storage/' . $post->image}}" class="img-fluid img-thumbnail rounded">
        </div>
        @endif
        <div class="form-group ">
          <label for="published_at" class="label">Publicado en</label>
          <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input id="published_at" class="form-control @error('published_at') is-invalid @enderror" name="published_at" value="{{ isset($post) ? $post->published_at : ''}}">
          </div>
          @error('published_at')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>


        <div class="form-group">
          <button type="submit" class="btn btn-success float-right">
            {{ isset($post) ? 'Guardar' : 'Publicar' }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>


@endsection



@section('script')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
  <script>
  $(document).ready(function() {
  $('#contenido').summernote({
    toolbar: [
      // [groupName, [list of button]]
      //['style', ['style']],
       ['font', ['bold', 'underline']],
       //['fontname', ['fontname']],
       ['color', ['color']],
       //['para', ['ul', 'ol', 'paragraph']],
       //['table', ['table']],
       ['insert', ['link', 'picture', 'video']],
       //['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
  $("#contenido").summernote("foreColor", "blue");
  $("#contenido").summernote("backColor", "red");
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script type="text/javascript">
    defaultDate: new Date()
    flatpickr('#published_at', {
      defaultDate: new Date()
    })
  </script>
@endsection

@section('css')
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@endsection
