<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContenidoSectionFooter;
use App\Order;
use App\FooterLink;

use DB;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{

  public function sectionFooterEdit($id) {
    return view('updateIndex/sectionFooter')
    ->with('orders', Order::orderBy('order')->get())
    ->with('contenidosectionfooters', ContenidoSectionFooter::all());
  }

  public function sectionFooterUpdate(Request $request, $id) {
    if($request->hasFile('logo')){
      $this->validate($request, [
          'logo' => 'image|required|mimes:png,jpg,jpeg,svg'
       ]);
       //delete old
       $latest = DB::table('contenido_section_footers')->where('id', $id)->first();
       Storage::delete($latest->logo);


      //upload it
      $logo = $request->file('logo')->store('content/footer');

      $data =array('logo' => $logo);
      DB::table('contenido_section_footers')->where('id', $id)->update($data);
    }
    elseif ($request->has('style')) {
      $style = $request->input('style');

      $data = array("style"=>$style);
      DB::table('contenido_section_footers')->where('id', $id)->update($data);
      session()->flash('success', 'La sección fue actualizada');
      //redirect
      return redirect()->back();
    }
    else{
    $copy = $request->input('copy');
    $social_title = $request->input('social_title');
    $acerca = $request->input('acerca');


    $data=array(
      "copy"=>$copy,
      "social_title"=>$social_title,
      "acerca"=>$acerca
    );
    DB::table('contenido_section_footers')->update($data);
    session()->flash('success', 'La sección fue actualizada');
    //redirect
    return redirect()->back();
    }
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('footer.index')->with('footer_links', FooterLink::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('footer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $icon = $request->input('icon');
      $link = $request->input('link');
      $color = $request->input('color');
      $back_color = $request->input('back_color');

      $data = array(
      'icon' => $icon,
      'link' => $link,
      'color' => $color,
      'back_color' => $back_color
      );

      DB::table('footer_links')->insert($data);

      session()->flash('success', 'Se Ha creado el Enlace');
      //redirect
      return redirect(route('footer.index'));
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
    public function edit($id)
    {
      return view('footer.create')->with('footer_links', FooterLink::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $icon = $request->input('icon');
      $link = $request->input('link');
      $color = $request->input('color');
      $back_color = $request->input('back_color');

      $data = array(
      'icon' => $icon,
      'link' => $link,
      'color' => $color,
      'back_color' => $back_color
      );

      DB::table('footer_links')->where('id', $id)->update($data);

      session()->flash('success', 'Se Ha actualizado el Enlace');
      //redirect
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $item = FooterLink::withTrashed()->where('id', $id)->firstOrFail();

      if ($item->trashed()) {

          $item->forceDelete();
          session()->flash('error', 'Enlace eliminado permanentemente');
          return redirect(route('trashed-footer.index'));

      }else {
        $item->delete();
        session()->flash('success', 'Artículo enviado a la papelera');
        return redirect(route('footer.index'));
    }
    }

    public function trashed() {
      $trashed = FooterLink::onlyTrashed()->get();
      return view('footer.index')->with('footer_links', $trashed);
    }

    public function restore($id) {
      $item = FooterLink::withTrashed()->where('id', $id)->firstOrFail();
      $item->restore();
      session()->flash('success', 'Enlace Restaurado');
      return redirect()->back();
    }
}
