<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Tag;
use App\Servicio;
use App\ContenidoSection1;
use App\ContenidoSection2;
use App\ContenidoSection3;
use App\ContenidoSection4;
use App\ContenidoSection5;
use App\ContenidoSectionFooter;
use App\ContenidoAbout;
use App\Style;
use App\InfoSliderImage;
use App\InfoSliderText;
use App\InfoSliderImage2;
use App\InfoSliderText2;
use App\InfoSliderImage3;
use App\InfoSliderText3;
use App\Pricing;
use App\User;



use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
      return view('index')->with('posts', Post::orderByDesc('id')->paginate(5))
      ->with('contenidosection1s', ContenidoSection1::all())
      ->with('contenidosection2s', ContenidoSection2::all())
      ->with('contenidosection3s', ContenidoSection3::all())
      ->with('contenidosection4s', ContenidoSection4::all())
      ->with('contenidosection5s', ContenidoSection5::all())
      ->with('contenidosectionfooters', ContenidoSectionFooter::all())
      ->with('servicios', Servicio::all())
      ->with('pricings', Pricing::all())
      ->with('styles', Style::all())
      ->with('info_slider_images', InfoSliderImage::all())
      ->with('info_slider_texts', InfoSliderText::all())
      ->with('info_slider_image2s', InfoSliderImage2::all())
      ->with('info_slider_text2s', InfoSliderText2::all())
      ->with('info_slider_image3s', InfoSliderImage3::all())
      ->with('info_slider_text3s', InfoSliderText3::all())
      ->with('users', User::all());

    }

    public function blog() {

      return view('blog')
      ->with('contenidosection1s', ContenidoSection1::all())
      ->with('categories', Category::all())->with('tags', Tag::all())
      ->with('posts', Post::paginate(16))
      ->with('contenidosection4s', ContenidoSection4::all())
      ->with('contenidosection5s', ContenidoSection5::all())
      ->with('contenidosectionfooters', ContenidoSectionFooter::all())
      ->with('styles', Style::all())
      ->with('users', User::all());

    }

    public function about() {
      return view('about')
      ->with('contenidosection5s', ContenidoSection5::all())
      ->with('contenidoabouts', ContenidoAbout::all())
      ->with('contenidosectionfooters', ContenidoSectionFooter::all())
      ->with('styles', Style::all());
    }
}
