@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<style media="screen">
.tabdiv {
  /*border-top: 1px solid #c7c7c7*/
  min-height: 450px;
  background: white !important;
  padding: 10px 0;
  /*border-bottom: 4px solid #E95855 !important;*/
}

.spans {
  border-bottom: 4px solid #E5E5E5 !important;
  color: #ccc !important;
  font-weight: 300;
  line-height: 186px !important;
  display: block;
  text-align: center;
  font-size: 24px;
}

.tabs UL.horizontal {
  list-style: none outside none;
  margin: 0;
}

.li {
  background: white;
  border-bottom: 4px solid #E5E5E5;
  margin: 0 10px 0 0;
  display: inline-block;
}

.a {
  color: #ccc;
  display: block;
  font-size: 18px;
  font-weight: 300;
  padding: 14px 24px;
  text-decoration: none;
}

.li:hover {
  background: #466699;
  border-bottom: 4px solid #2165D1;
}

.tabs .li:hover A {
  color: white;
}
.actives {
  background: #466699 !important;
  border-bottom: 4px solid #2165D1 !important;
}

.actives A {
  color: white !important;
}

</style>
<link rel="stylesheet" href="{{asset('lib/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('lib/cropper/cropper.css')}}">
<link rel="stylesheet" href="{{asset('lib/iconpicker/css/fontawesome-iconpicker.css')}}">
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Editar Sección Contacto</h1>
  <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-arrow-left fa-sm "></i></span><span class="text"> &nbsp;Secciones<span></a>
</div>
  <div class="row justify-content-center">
    <div class="col-md-12 d-none d-sm-none d-md-none d-lg-block"><iframe class="" src="/#contact"  width="100%" height="450"></iframe></div>
    <div class="card mt-3 col-md-8 mb-5">
        <div class="card-body">

              <div class="form-group d-none d-sm-block d-md-block d-lg-none">
                Aqui va el menu
              </div>
              <div class="form-group">
                <label class="col-form-label">Logo del Menu</label><br>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLogo">Subir Logo &nbsp;&nbsp;<i class="fas fa-image"></i></a>
              </div>
              <div class="form-group mb-3">
                <h4>Secciones Activas:</h4>
              </div>

                <form class="form-group" action="{{route('menu.update', 1)}}" method="POST">
                  @csrf
                  <label for="inicio" class="col-form-label">Inicio</label>
                  <div class="input-group">

                    <input id="inicio" type="input" name="inicio" class="form-control @error('inicio') is-invalid @enderror"  value="{{ $menu_items[0]->item_inicio }}">
                      @error('inicio')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit">Actualizar</button>
                    </div>
                  </div>

                </form>

              @foreach($order as $menu_item)
                @if($menu_item->display == 1)
                  <div class="form-group">
                    <div class="input-group">
                    <!-- <label for="{{$menu_item->name}}" class="col-form-label">{{$menu_item->name}}</label> -->
                    <input id="{{$menu_item->section}}" type="input" name="{{$menu_item->section}}" class="form-control @error('{{$menu_item->section}}') is-invalid @enderror"  value="{{$menu_item->menu_name}}" {{$menu_item->menu_display == 1 ? "" : "disabled"}}>
                      @error('{{$menu_item->section}}')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      <div class="input-group-append">
                        <button class="btn btn-warning" type="button" id="enable{{$menu_item->id}}"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning" type="button" id="disable{{$menu_item->id}}"><i class="fas fa-eye-slash"></i></button>
                        <button class="btn btn-success" type="button" id="update{{$menu_item->id}}">Actualizar</button>

                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
              <!-- <div class="form-group">
                <button id="ajButton" class="btn btn-success float-right">Actualizar</button>
              </div> -->

            <form autocomplete="off" class="col-md-12" method="POST" action="{{route('menuSide.update', $styles[0]->id)}}">
              @csrf
              <div class="col-md-12">

              <div class="row justify-content-center">

                <!-- ICONOS1 -->
                <div class="col-md-8 mt-5">
                  <h4>Link 1</h4>
                  <div class="form-group">
                    <label for="button_secondary">Mostrar:</label>
                    <select class="ml-3" name="show_link_1" onchange="this.form.submit()">
                      <option value="1" {{ $styles[0]->show_link_1 == '1' ? 'selected' : '' }}>Mostrar</option>
                      <option value="0" {{ $styles[0]->show_link_1 == '0' ? 'selected' : '' }}>Esconder</option>
                    </select>
                    <div class="input-group row" style="border: 1px solid grey;border-radius:5px;">
                      <div class="col-md-8 mt-3">
                        <select name="link_mode_1" onchange="this.form.submit()">
                          <option value="1" {{ $styles[0]->link_mode_1 == '1' ? 'selected' : '' }}>Ícono</option>
                          <option value="2" {{ $styles[0]->link_mode_1 == '2' ? 'selected' : '' }}>Texto</option>
                        </select>
                      </div>

                      <div class="col-md-8 mt-3 mb-3">
                      @if($styles[0]->link_mode_1 == '1')
                      <input id="custom_icon_1" type="hidden" data-placement="bottomRight" class="form-control @error('custom_icon_1') is-invalid @enderror"  name="custom_icon_1" value="{{ $styles[0]->custom_icon_1 }}">
                      <div class="btn-group">
                         <button type="button" class="btn btn-primary iconpicker-component"><i
                                 class="{{  $styles[0]->custom_icon_1 }}"></i></button>
                         <button type="button" class="icp1 icp-dd1 btn btn-primary dropdown-toggle"
                                 data-selected="fa-car" data-toggle="dropdown">
                             <span class="caret"></span>
                         </button>
                         <div class="dropdown-menu"></div>
                       </div>
                      @else

                      @endif

                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <label for="custom_link_text_1">Texto del Enlace</label><br>
                  <input  class="form-control col-md-6"  name="custom_link_text_1" type="text" id="custom_link_text_1" value="{{ $styles[0]->custom_link_text_1 }}">
                </div>
                <div class="form-group">
                  <label for="custom_link_address_1">Especifique Enlace</label><br>
                  <input list="sections" class="form-control col-md-6"  name="custom_link_address_1" type="text" id="custom_link_address_1" placeholder="Http://" value="{{ $styles[0]->custom_link_address_1 }}">
                  <small class="form-text text-muted">Asegurece de que el Link Contiene &nbsp;HTTP:// &nbsp;Antes de la Dirección</small>
                </div>
              </div>
              <!-- /ICONOS1 -->

              <!-- ICONOS2 -->
                <div class="col-md-8 mt-5">
                  <h4>Link 2</h4>
                  <div class="form-group">
                    <label for="button_secondary">Mostrar:</label>
                    <select class="ml-3" name="show_link_2" onchange="this.form.submit()">
                      <option value="1" {{ $styles[0]->show_link_2 == '1' ? 'selected' : '' }}>Mostrar</option>
                      <option value="0" {{ $styles[0]->show_link_2 == '0' ? 'selected' : '' }}>Esconder</option>
                    </select>
                    <div class="input-group row" style="border: 1px solid grey;border-radius:5px;">
                      <div class="col-md-8 mt-3">
                        <select name="link_mode_2" onchange="this.form.submit()">
                          <option value="1" {{ $styles[0]->link_mode_2 == '1' ? 'selected' : '' }}>Ícono</option>
                          <option value="2" {{ $styles[0]->link_mode_2 == '2' ? 'selected' : '' }}>Texto</option>
                        </select>
                      </div>

                      <div class="col-md-8 mt-3 mb-3">
                        @if($styles[0]->link_mode_2 == '1')
                          <input id="custom_icon_2" type="hidden" data-placement="bottomRight" class="form-control @error('custom_icon_2') is-invalid @enderror"  name="custom_icon_2" value="{{ $styles[0]->custom_icon_2 }}">
                          <div class="btn-group">
                             <button type="button" class="btn btn-primary iconpicker-component"><i
                                     class="{{  $styles[0]->custom_icon_2 }}"></i></button>
                             <button type="button" class="icp2 icp-dd2 btn btn-primary dropdown-toggle"
                                     data-selected="fa-car" data-toggle="dropdown">
                                 <span class="caret"></span>
                             </button>
                             <div class="dropdown-menu"></div>
                         </div>
                       @else

                       @endif
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <label for="custom_link_text_1">Texto del Enlace</label><br>
                  <input class="form-control col-md-6"  name="custom_link_text_2" type="text" id="custom_link_text_2" value="{{ $styles[0]->custom_link_text_2 }}">
                </div>
                <div class="form-group">
                  <label for="custom_link_address_1">Especifique Enlace</label><br>
                  <input list="sections" class="form-control col-md-6"  name="custom_link_address_2" type="text" id="custom_link_address_2" placeholder="Http://" value="{{ $styles[0]->custom_link_address_2 }}">
                  <small class="form-text text-muted">Asegurece de que el Link Contiene &nbsp;HTTP:// &nbsp;Antes de la Dirección</small>
                </div>

                </div>
              <!-- /ICONOS2 -->

              <!-- ICONOS LINK SECTION LIST -->
              <datalist id="sections">
                <option value="#inicio">Inicio</option>
                <option value="#servicios">Servicios</option>
                <option value="#infoSlider">Slider de Info.</option>
                <option value="#articulos">Artículos</option>
                <option value="#contact">Contacto</option>
              </datalist>
              <!-- /ICONOS LINK SECTION LIST -->
              </div>
              <div class="row">
                <button type="submit" class="btn btn-success mx-auto mt-5 mb-3">Actualizar</button>
              </div>
              </div>
            </form>
        </div>
    </div>
  </div>
</div>

<!--modal logo-->
<div class="modal fade" id="modalLogo" tabindex="-1" role="dialog" aria-labelledby="modalLogo" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#4066D4;">
      <button style="color:white;" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
              <label for="logo" class="col-form-label">Imagen de Logo</label>
              <form id="logo" method="POST" class="logo dropzone" action="{{route('menuLogo.update', 1)}}" enctype="multipart/form-data">
                @csrf
              </form>
              </div>
            </div>
            <div class="col-md-8">

              <img style="width:100%;" src="{{'/storage/' . $menu_items[0]->logo}}" class="logoThumb img-fluid img-thumbnail rounded">
            <div class="editador d-none" style="height:450px; background-color: #000;">
            </div>
            </div>
          </div>
      </div>
      <div class="modal-footer buttons">
        <button class="buttonConfirm btn btn-primary d-none">Confirmar</button>
      </div>
    </div>
  </div>
</div>
<!-- End modal logo -->
@endsection

@section('script')
<script src="{{asset('lib/iconpicker/js/fontawesome-iconpicker.js')}}"></script>
<script src="{{asset('lib/dropzone/dropzone.js')}}"></script>
<script src="{{asset('lib/cropper/cropper.js')}}"></script>
<script>
$(document).ready(function () {
$('.icp-dd1').iconpicker();
$('.icp-dd2').iconpicker();
});
$('.icp1').on('iconpickerSelected', function (e) {
  $('#custom_icon_1').get(0).value = e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
});
$('.icp2').on('iconpickerSelected', function (e) {
  $('#custom_icon_2').get(0).value = e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
});
</script>
<script>
Dropzone.options.logo = {
   paramName: "logo",
   addRemoveLinks: true,
   transformFile: function(file, done) {
      var myDropZone = this;
      var editor = $('.editador');
      var logoThumb = $('.logoThumb');
      $(logoThumb).addClass('d-none');
      $(editor).removeClass('d-none');
      $(editor).addClass('d-block');
      // Create confirm button at the top left of the viewport
      var buttonConfirm = $('.buttonConfirm');
      $(buttonConfirm).removeClass('d-none');
      $(buttonConfirm).addClass('d-block');
      $(buttonConfirm).click(function() {
        // Get the canvas with image data from Cropper.js
         var canvas = cropper.getCroppedCanvas({
           width: 720,
           height: 310
         });
         // Turn the canvas into a Blob (file object without a name)
         canvas.toBlob(function(blob) {
           // Create a new Dropzone file thumbnail
            myDropZone.createThumbnail(
              blob,
              myDropZone.options.thumbnailWidth,
              myDropZone.options.thumbnailHeight,
              myDropZone.options.thumbnailMethod,
              false,
              function(dataURL) {

                // Update the Dropzone file thumbnail
                myDropZone.emit('thumbnail', file, dataURL);
                // Return the file to Dropzone
                done(blob);
            });
         });
        // Remove the editor from the view
        $(buttonConfirm).removeClass('d-block');
        $(buttonConfirm).addClass('d-none');


      });

      // Create an image node for Cropper.js
     var image = new Image();
     image.src = URL.createObjectURL(file);
     // editor.appendChild(image);
     $(image).appendTo(editor)
     // Create Cropper.js
     var cropper = new Cropper(image, { aspectRatio: 4/2 });



   },
   init: function () {
      this.on("complete", function (file) {
        if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {

          setTimeout(
            function()
            {
              location.reload();
            }, 1500);
        }
      });
    }
  };



@foreach($order as $menu_item)
  @if($menu_item->display == 1)
    //Update Button
     $("#update{{$menu_item->id}}").click(function(e){
        e.preventDefault();

          var menu_name = $("#{{$menu_item->section}}").val();

          $.ajax({
                 type:'POST',
                 dataType: 'json',
                 url:'/menu-update/{{$menu_item->id}}',
                 data:{"_token": "{{ csrf_token() }}",
                 menu_name:menu_name
                },
                 success:function(data){
                    alert(data.success);
                 }
              });
          });
      //Visibility Button
      //Enable
      $("#enable{{$menu_item->id}}").click(function(e){
        e.preventDefault();
        var menu_display = 1;
        $('#{{$menu_item->section}}').removeAttr('disabled');
        $.ajax({
               type:'POST',
               dataType: 'json',
               url:'/menu-display/{{$menu_item->id}}',
               data:{"_token": "{{ csrf_token() }}",
               menu_display:menu_display
              },

            });
      });
      //Disable
      $("#disable{{$menu_item->id}}").click(function(e){
        e.preventDefault();
        var menu_display = 0;
        $('#{{$menu_item->section}}').attr('disabled', 'disabled');
        $.ajax({
               type:'POST',
               dataType: 'json',
               url:'/menu-display/{{$menu_item->id}}',
               data:{"_token": "{{ csrf_token() }}",
               menu_display:menu_display
              },

            });
      });

    @endif
  @endforeach


</script>
@endsection
