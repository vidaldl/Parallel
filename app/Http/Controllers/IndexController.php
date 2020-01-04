<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Servicio;
use App\ContenidoSection1;
use App\menu_item;
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
use App\Order;
use App\Links;
use App\LinkSection;
use App\Gallery;
use App\GallerySection;
use App\SectionProperty;
use App\Frase;
use App\Portfolio\PortfolioCategory;
use App\Portfolio\PortfolioItem;
use App\MenuItem;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudDeContacto;




class IndexController extends Controller
{

    public function mail() {


      $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'number' => 'nullable',
        'subject' => 'required',
        'message' => 'required'
      ]);

      Mail::to('test@test.com')->send(new SolicitudDeContacto($data));

      // flash message
      session()->flash('success', 'Su mensaje a sido Enviado! Estaremos en contacto lo más rapido posible.');
      //redirect user
      return redirect('/#contact');
    }



    public function index() {
      return view('index')->with('posts', Post::orderByDesc('id')->paginate(5))
      ->with('orders', Order::orderBy('order')->get())
      ->with('contenidosection1s', ContenidoSection1::all())
      ->with('menu_item', MenuItem::all())
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
      ->with('links', Links::all())
      ->with('link_sections', LinkSection::all())
      ->with('galleries', Gallery::all())
      ->with('galleries_count', Gallery::select('slide')->distinct()->pluck('slide'))
      ->with('column_count', Gallery::select('column')->distinct()->pluck('column'))
      ->with('gallery_sections', GallerySection::all())
      ->with('section_properties', SectionProperty::all())
      ->with('frases', Frase::all())
      ->with('portfolio_categories', PortfolioCategory::all())
      ->with('portfolio_items', PortfolioItem::all())
      ->with('users', User::all());
    }


    public function order(Request $request) {
      $order = DB::table('orders')->orderBy('order')->get();
      $itemID = $request->input('itemID');
      $itemIndex = $request->input('itemIndex');

      foreach ($order as $item) {
        $data=array('order'=>$itemIndex);
        return DB::table('orders')->where('id', '=', $itemID)->update($data);
      }

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
