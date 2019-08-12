<div id="infoSlider" class="infoSlider {{$info_slider_texts[0]->display == 0 ? 'd-none' : ''}}" style="border-top: 1px solid #E1E4EA;">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div id="" class="col-md-12 textHeight">
            <h2>{!! $info_slider_texts[0]->title !!}</h2>
            {!! $info_slider_texts[0]->contenido !!}
          </div>
          @if(!empty($info_slider_texts[0]->button) && !empty($info_slider_texts[0]->link))
          <div id="" class="mb-5 mx-auto btnH" >
            <a href="{{ $info_slider_texts[0]->link }}" class="btn" style="color:#ffff;">{{ $info_slider_texts[0]->button }}</a>
          </div>
          @endif
        </div>
      </div>
      <div class="col-md-6 imageH" id="" style="overflow: hidden;">
        <div class="flexslider">
          <ul class="slides">
            @if(empty($info_slider_texts[0]->video))
              @foreach($info_slider_images as $images)
              <li>
                <img src="{{ 'storage/' . $images->image }}" />
              </li>
              @endforeach
            @else
              <li>
                <video controls muted autoplay loop src="{{ '/storage/' . $info_slider_texts[0]->video }}" width="100%" >

                </video>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
