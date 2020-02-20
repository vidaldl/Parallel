<style>
@foreach($footer_links as $item)
.social-icon{{$item->id}}:hover{
	background-color: {{$item->back_color}};
}
@endforeach
.button-catalog {
	text-shadow: none !important;
	color: {{$catalog_sections[0]->button_text_color}} !important;
}

.button-catalog2 {
	text-shadow: none !important;
	color: {{$catalog_section2s[0]->button_text_color}} !important;
}

.button-catalog3 {
	text-shadow: none !important;
	color: {{$catalog_section3s[0]->button_text_color}} !important;
}

.catalog-button {
	background-color: {{$catalog_sections[0]->button_primary}} !important;
}

.catalog-button:hover {
	background-color: {{$catalog_sections[0]->button_secondary}} !important;
}

.catalog-button2 {
	background-color: {{$catalog_sections[0]->button_primary}} !important;
}

.catalog-button2:hover {
	background-color: {{$catalog_section2s[0]->button_secondary}} !important;
}

.catalog-button3 {
	background: {{$catalog_section3s[0]->button_primary}} !important;
}

.catalog-button3:hover {
	background-color: {{$catalog_section3s[0]->button_secondary}} !important;
}

::selection {
	background: {{$styles[0]->button_secondary}};
}

::-moz-selection {
	background: {{$styles[0]->button_secondary}}; /* Firefox */
}

::-webkit-selection {
	background: {{$styles[0]->button_secondary}}; /* Safari */
}

.sale-flash {
	background-color: {{$styles[0]->button_primary}};
}

.portfolio-filter li a:hover {
    color: {{$styles[0]->button_secondary}};
}


.button-green { background-color: {{$styles[0]->button_primary}}; }
.button-green:hover,
.button-reveal.button-green:hover,
.button-border.button-green:hover,
.button-border.button-green.button-fill:before {
	background-color: {{$styles[0]->button_secondary}} !important;
}

.portfolio-filter li.activeFilter a {
	background-color:  {{$styles[0]->button_primary}};
}

.owl-carousel .owl-dots .owl-dot {
	background-color: {{$styles[0]->button_primary}};
}

a {
    color: {{$styles[0]->button_primary}};
}

.button {
    background-color: {{$styles[0]->button_primary}};
}

.color {
    color: {{$styles[0]->button_primary}} !important;
}


.feature-box.fbox-plain .fbox-icon i,
.feature-box.fbox-plain .fbox-icon img {
    color: {{$styles[0]->button_primary}};
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
