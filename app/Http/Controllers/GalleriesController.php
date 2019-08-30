<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gallery\GalleryRequest;

use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Http\Request;
use App\Gallery;
use App\GallerySection;


class GalleriesController extends Controller
{

    public function display(Request $request) {
      $display = $request->input('gallery');
      $data=array("display"=>$display);
      DB::table('orders')->where('section', 'gallery')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }

    public function updateSection(Request $request) {
      $title = $request->input('title');
      $subtitle = $request->input('subtitle');
      $back_color = $request->input('back_color');

      $data=array("title"=>$title, "subtitle"=>$subtitle, "back_color"=>$back_color);
      DB::table('gallery_sections')->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('galleries.index')->with('galleries', Gallery::all())->with('gallery_sections', GallerySection::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
      $type = $request->input('type');
      $table = Gallery::count();
      // $t = Gallery::select('column')->distinct()->pluck('column')->count();
      if ($type == 'image') {
        if ($table >= 0 && $table <= 4) { //Slide 1
          $slide = 1;
          $alertss = 'más de 2';
          if ($table >= 0 && $table <= 1) {
            $column = 1;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);

            }if($table >= 2 && $table <= 4) {
              $column = 2;
              $image = $request->image->store('gallery');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $image,
                'title' => $title
              ]);
            }
          }
        if($table >= 5 && $table <= 9){ //Slide 2
          $slide = 2;
          if ($table >= 5 && $table <= 6) {
            $column = 1;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
          } if ($table >= 7 && $table <= 9) {
            $column = 2;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
          }
          }
        if($table >= 10 && $table <= 14){ //Slide 3
          $slide = 3;
          if ($table >= 10 && $table <= 11) {
            $column = 1;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
            }
          if ($table >= 12 && $table <= 14) {
            $column = 2;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
          }
        }
        if($table >= 15 && $table <= 19){ //Slide 4
          $slide = 4;
          if ($table >= 15 && $table <= 16) {
            $column = 1;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
          }
          if ($table >= 17 && $table <= 19) {
            $column = 2;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
          }
        }
        if($table >= 20 && $table <= 24){ //Slide 5
          $slide = 5;
          if ($table >= 20 && $table <= 21) {
            $column = 1;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
          }
          if ($table >= 22 && $table <= 24) {
            $column = 2;
            $image = $request->image->store('gallery');
            $title = $request->input('title');
            $save = Gallery::create([
              'type' => $type,
              'slide' => $slide,
              'column' => $column,
              'object' => $image,
              'title' => $title
            ]);
          }
        }
      }

      if ($type == 'video') {
          if ($table >= 0 && $table <= 4) { //Slide 1
            $slide = 1;
            $alertss = 'más de 2';
            if ($table >= 0 && $table <= 1) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);

              }if($table >= 2 && $table <= 4) {
                $column = 2;
                $link = $request->input('link');
                $title = $request->input('title');
                $save = Gallery::create([
                  'type' => $type,
                  'slide' => $slide,
                  'column' => $column,
                  'object' => $link,
                  'title' => $title
                ]);
              }
            }
          if($table >= 5 && $table <= 9){ //Slide 2
            $slide = 2;
            if ($table >= 5 && $table <= 6) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            } if ($table >= 7 && $table <= 9) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
            }
          if($table >= 10 && $table <= 14){ //Slide 3
            $slide = 3;
            if ($table >= 10 && $table <= 11) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
              }
            if ($table >= 12 && $table <= 14) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
          }
          if($table >= 15 && $table <= 19){ //Slide 4
            $slide = 4;
            if ($table >= 15 && $table <= 16) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
            if ($table >= 17 && $table <= 19) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
          }
          if($table >= 20 && $table <= 24){ //Slide 5
            $slide = 5;
            if ($table >= 20 && $table <= 21) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
            if ($table >= 22 && $table <= 24) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
          }
        }

      if ($type == 'text') {
          if ($table >= 0 && $table <= 4) { //Slide 1
            $slide = 1;
            $alertss = 'más de 2';
            if ($table >= 0 && $table <= 1) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);

              }if($table >= 2 && $table <= 4) {
                $column = 2;
                $link = $request->input('link');
                $title = $request->input('title');
                $save = Gallery::create([
                  'type' => $type,
                  'slide' => $slide,
                  'column' => $column,
                  'object' => $link,
                  'title' => $title
                ]);
              }
            }
          if($table >= 5 && $table <= 9){ //Slide 2
            $slide = 2;
            if ($table >= 5 && $table <= 6) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            } if ($table >= 7 && $table <= 9) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
            }
          if($table >= 10 && $table <= 14){ //Slide 3
            $slide = 3;
            if ($table >= 10 && $table <= 11) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
              }
            if ($table >= 12 && $table <= 14) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
          }
          if($table >= 15 && $table <= 19){ //Slide 4
            $slide = 4;
            if ($table >= 15 && $table <= 16) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
            if ($table >= 17 && $table <= 19) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
          }
          if($table >= 20 && $table <= 24){ //Slide 5
            $slide = 5;
            if ($table >= 20 && $table <= 21) {
              $column = 1;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
            if ($table >= 22 && $table <= 24) {
              $column = 2;
              $link = $request->input('link');
              $title = $request->input('title');
              $save = Gallery::create([
                'type' => $type,
                'slide' => $slide,
                'column' => $column,
                'object' => $link,
                'title' => $title
              ]);
            }
          }
        }

      // flash message
      session()->flash('success', 'La imagen fué subida');
      //redirect user
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
      return view('galleries.update')->with('gallery', $gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateGal(Request $request, $id)
    {
      $table = Gallery::all()->where('id', $id)->first();
      //IMAGE
      if ($table->type == 'image') {
        $oldImage = DB::table('galleries')->where('id', $id)->first();
        $this->validate($request, [
            'image' => 'image|required|mimes:png,jpg,jpeg,svg'
         ]);
        //upload it
        $object = $request->file('image')->store('gallery/');
        $title = $request->input('title');
        Storage::delete($oldImage->object);
        $data=array('object'=>$object, 'title'=>$title);
        DB::table('galleries')->where('id', $id)->update($data);
      }
      //VIDEO
      if ($table->type == 'video') {
        $object = $request->input('link');
        $title = $request->input('title');

        $data=array('object'=>$object, 'title'=>$title);
        DB::table('galleries')->where('id', $id)->update($data);
        session()->flash('success', 'Se ha actualizado el Contenido');
        return redirect()->back();
      }
      if ($table->type == 'text') {
        $object = $request->input('link');
        $title = $request->input('title');

        $data=array('object'=>$object, 'title'=>$title);
        DB::table('galleries')->where('id', $id)->update($data);
        session()->flash('success', 'Se ha actualizado el Contenido');
        return redirect()->back();
      }


  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $element = Gallery::where('id', $id)->first();
      Storage::delete($element->object);
      $element->delete();
      session()->flash('error', 'Se ha borrado la imagen');
      //redirect
      return redirect()->back();
    }
}
