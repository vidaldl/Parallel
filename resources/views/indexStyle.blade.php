<style>
.button-green { background-color: {{$styles[0]->button_primary}}; }
.button-green:hover,
.button-reveal.button-green:hover,
.button-border.button-green:hover,
.button-border.button-green.button-fill:before {
	background-color: {{$styles[0]->button_secondary}} !important;
}



.slider-caption .slider-caption-h2 {
	font-size: {{$contenidosection1s[0]->title_size}}px;
}

.slider-caption .slider-caption-p {
	font-size: {{$contenidosection1s[0]->subtitle_size}}px;
}
@foreach($contenidosection1s as $cont)

.overlay{{$cont->id}} {
    position: absolute;
    width: 100%;
    height: 100%;

    /* opacity: 0.3; */
    transition: all 0.2s ease-out;

    @if($cont->overlay < 100)
      background: rgba(0, 0, 0, 0.{{$cont->overlay}});
    @else
      background: rgba(0, 0, 0, 1);
    @endif


}

@endforeach
</style>
