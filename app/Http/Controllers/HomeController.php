<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateSection1Request;
use App\Http\Requests\SliderImageRequest;
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
use Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')
        ->with('contenidosection1s', ContenidoSection1::all())
        ->with('contenidosection2s', ContenidoSection2::all())
        ->with('contenidosection3s', ContenidoSection3::all())
        ->with('contenidosection4s', ContenidoSection4::all())
        ->with('contenidosection5s', ContenidoSection5::all())
        ->with('contenidosectionfooters', ContenidoSectionFooter::all())
        ->with('contenidoabouts', ContenidoAbout::all())
        ->with('styles', Style::all())
        ->with('info_slider_images', InfoSliderImage::all())
        ->with('info_slider_texts', InfoSliderText::all());
    }

    /*Info Slider Image -------------------------------------------------------------------------------->*/
    public function storeSliderImage (SliderImageRequest $request) {
       $slide = $request->slide->store('slides');
       $post = InfoSliderImage::create([
         'image' => $slide
       ]);
       // flash message
       session()->flash('success', 'La imagen fué subida');
       //redirect user
       return redirect()->back();
    }

    public function updateSliderImage (Request $request, $id) {
      $this->validate($request, [
          'slide' => 'image|required|mimes:png,jpg,jpeg,svg'
       ]);
      $slideOld = DB::table('info_slider_images')->where('id', $id)->first();
      //upload it
      $slide = $request->file('slide')->store('slides');
      Storage::delete($slideOld->image);
      // $finalDataName = 'content/'.$logo;
      $data=array('image'=>$slide);
      DB::table('info_slider_images')->where('id', $id)->update($data);

      session()->flash('success', 'La imagen ha sido actualizada');
      //redirect
      return redirect()->back();
    }

    public function deleteSliderImage (InfoSliderImage $slide, $id) {
      Storage::delete($slide->image);
      $image = InfoSliderImage::where('id', $id)->first();
      Storage::delete($image->image);
      $image->delete();
      session()->flash('error', 'Se ha borrado la imagen');
      //redirect
      return redirect()->back();
    }




    /*Info Slider Text -------------------------------------------------------------------------------->*/
    public function infoSliderEdit ($id) {
      return view('updateIndex/infoslider')
      ->with('info_slider_images', InfoSliderImage::all())
      ->with('info_slider_texts', InfoSliderText::all());
    }

    public function infoSliderUpdate(Request $request, $id) {
      $title = $request->input('title');
      $contenido = $request->input('contenido');
      $button = $request->input('button');

      $data=array("title"=>$title, "contenido"=>$contenido, "button"=>$button);
      DB::table('info_slider_texts')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }

    public function infoSliderDisplay(Request $request, $id) {
      $display = $request->input('infoSlider');
      $data=array("display"=>$display);
      DB::table('info_slider_texts')->where('id', $id)->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }


    /*Styles Update -------------------------------------------------------------------------------->*/
    public function styleUpdate (Request $request, $id) {
      $primary_color = $request->input('primary_color');
      $button_primary = $request->input('button_primary');
      $button_secondary = $request->input('button_secondary');

      $data = array("primary_color"=>$primary_color,"button_primary"=>$button_primary,"button_secondary"=>$button_secondary);
      DB::table('styles')->update($data);
      session()->flash('success', 'El Color ha sido Cambiado');
      //redirect
      return redirect()->back();
    }



    /*About Page -------------------------------------------------------------------------------->*/
    public function aboutEdit($id) {
      return view('updatePage/about')->with('contenidoabouts', ContenidoAbout::all());
    }

    public function aboutUpdate(Request $request, $id) {
      $mision = $request->input('mision');
      $vision = $request->input('vision');
      $valores = $request->input('valores');
      $map = $request->input('map');

      $data=array("mision"=>$mision, "vision"=>$vision, "valores"=>$valores, "map"=>$map,);
      DB::table('contenido_abouts')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }


    /*SECTION 1 -------------------------------------------------------------------------------->*/
    public function section1Carousel(Request $request, $id) {
      $carousel = $request->input('carousel');
      $data=array("carousel"=>$carousel);
      DB::table('contenido_section1s')->where('id', $id)->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }
    public function section1Edit($id) {
      return view('updateIndex/section1')->with('contenidosection1s', ContenidoSection1::all());
    }

    public function section1Update(Request $request, $id) {
      $title = $request->input('title');
      $tagline = $request->input('tagline');
      $button = $request->input('button');
      $displayImage = $request->input('displayImage');
      $logo = NULL;


      // Logo ---------------------------------------------------------------
      if ($request->hasFile('logo')) {
        $this->validate($request, [
            'logo' => 'image|required|mimes:png,svg'
         ]);
        $logoOld = DB::table('contenido_section1s')->where('id', $id)->first();

        //upload it
        $logo = $request->file('logo')->store('content');
        //Image Intervention
        // $finalImage = Image::make($logo);
        // $random = rand();
        // $originalPath = public_path().'/storage/content/original/';
        // $finalPath = public_path().'/storage/content/';
        // $finalImage->save($originalPath.$random.$logo->getClientOriginalName());
        // $finalDummy = $logo->basename;
        // $finalDummyName = 'content/original/'.$finalDummy;
        //moment of transformation
        // $width = 350;
        // $height = 250;
        // $finalImage->width() > $finalImage->height() ? $width=null : $height=null;
        // $finalImage->resize($width, $height, function ($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $finalImage->resize(150,150);
        // $logo->save($finalPath.$random.$logo->getClientOriginalName());
        // Storage::delete($finalDummyName);
        Storage::delete($logoOld->logo);


        // $finalDataName = 'content/'.$logo;
        $data=array('logo'=>$logo);
        DB::table('contenido_section1s')->where('id', $id)->update($data);

        session()->flash('success', 'La sección fue actualizada con la imagen');
        //redirect
        return redirect()->back();
      }

      //BACKGROUND -------------------------------------------------------
        elseif ($request->hasFile('background')) {
          $this->validate($request, [
              'background' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
           ]);
         $logoOld = DB::table('contenido_section1s')->where('id', $id)->first();
         $background = $request->file('background')->store('content');

          // $finalImage = Image::make($background);
          // $random = rand();
          // $originalPath = public_path().'/storage/content/original/';
          // $finalPath = public_path().'/storage/content/';
          // $finalImage->save($finalPath.$random.$background->getClientOriginalName());
          // $finalDummy = $finalImage->basename;
          // $finalDummyName = 'content/original/'.$finalDummy;
          // //moment of transformation
          // $width = NULL;
          // $height = '100vh';

          // $finalImage->resize($width, $height, function ($constraint) {
          //     $constraint->aspectRatio();
          // });
          // $finalImage->resize(150,150);
          // $finalImage->save($finalPath.$random.$background->getClientOriginalName());
          // Storage::delete($finalDummyName);
          Storage::delete($logoOld->background_image);

          // $finalDataName = 'content/'.$finalImage->basename;
          $data=array('background_image'=>$background);
          DB::table('contenido_section1s')->where('id', $id)->update($data);

          session()->flash('success', 'La Imagen de Fondo fue actualizada');
          //redirect
          return redirect()->back();

        }
        else {
        $data=array("title"=>$title,"tagline"=>$tagline,"button"=>$button, "carousel"=>$displayImage);
        DB::table('contenido_section1s')->where('id', $id)->update($data);
        session()->flash('success', 'La sección fue actualizada');
        //redirect
        return redirect()->back();

        }

      //check if new image

      //Update Attributes

      //flash

    }

    public function section1Display(Request $request, $id) {
      $display = $request->input('section1');
      $data=array("display"=>$display);
      DB::table('contenido_section1s')->where('id', $id)->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }
    /*SECTION 2 -------------------------------------------------------------------------------->*/
    public function section2Edit($id) {
      return view('updateIndex/section2')->with('contenidosection2s', ContenidoSection2::all());
    }

    public function section2Update(Request $request, $id) {
      $title = $request->input('title');

      $data=array("title"=>$title);
      DB::table('contenido_section2s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }
    public function section2Display(Request $request, $id) {
      $display = $request->input('section2');
      $data=array("display"=>$display);
      DB::table('contenido_section2s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }


    /*SECTION 3 -------------------------------------------------------------------------------->*/
    public function section3Edit($id) {
      return view('updateIndex/section3')->with('contenidosection3s', ContenidoSection3::all());
    }

    public function section3Update(Request $request, $id) {
      $title = $request->input('title');
      $contenido = $request->input('contenido');
      $button = $request->input('button');

      $data=array("title"=>$title, "contenido"=>$contenido, "button"=>$button);
      DB::table('contenido_section3s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }

    public function section3Display(Request $request, $id) {
      $display = $request->input('section3');
      $data=array("display"=>$display);
      DB::table('contenido_section3s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }


    /*SECTION 4 -------------------------------------------------------------------------------->*/
    public function section4Edit($id) {
      return view('updateIndex/section4')->with('contenidosection4s', ContenidoSection4::all());
    }
    public function section4Update(Request $request, $id) {
      $title = $request->input('title');
      $tagline = $request->input('tagline');
      $button = $request->input('button');

      $data=array("title"=>$title, "tagline"=>$tagline, "button"=>$button);
      DB::table('contenido_section4s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }

    public function section4Display(Request $request, $id) {
      $display = $request->input('section4');
      $data=array("display"=>$display);
      DB::table('contenido_section4s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }


    /*SECTION 5 -------------------------------------------------------------------------------->*/
    public function section5Edit($id) {
      return view('updateIndex/section5')->with('contenidosection5s', ContenidoSection5::all());
    }

    public function section5Update(Request $request, $id) {
      $title = $request->input('title');
      $address = $request->input('address');
      $email = $request->input('email');
      $number = $request->input('number');

      $data=array("title"=>$title, "address"=>$address, "email"=>$email, "number"=>$number);
      DB::table('contenido_section5s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }

    public function section5Display(Request $request, $id) {
      $display = $request->input('section5');
      $data=array("display"=>$display);
      DB::table('contenido_section5s')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }



    /*SECTION Footer -------------------------------------------------------------------------------->*/
    public function sectionFooterEdit($id) {
      return view('updateIndex/sectionFooter')->with('contenidosectionfooters', ContenidoSectionFooter::all());
    }

    public function sectionFooterUpdate(Request $request, $id) {
      $copy = $request->input('copy');
      $facebook_link = $request->input('facebook_link');
      $instagram_link = $request->input('instagram_link');
      $twitter_link = $request->input('twitter_link');

      $data=array("copy"=>$copy, "facebook_link"=>$facebook_link, "instagram_link"=>$instagram_link, "twitter_link"=>$twitter_link);
      DB::table('contenido_section_footers')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }

    public function sectionFooterDisplay(Request $request, $id) {
      $display = $request->input('sectionFooter');
      $data=array("display"=>$display);
      DB::table('contenido_section_footers')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }




}
