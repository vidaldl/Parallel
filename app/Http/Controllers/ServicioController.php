<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

use App\Http\Requests\UpdateServicios;
use App\Http\Requests\Servicios\CreateServiciosRequest;
use App\Servicio;
use App\ContenidoSection2;
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('servicios.index')->with('servicios', Servicio::all())->with('contenido_section2s', ContenidoSection2::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
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
      $title = $request->input('title');
      $contenido = $request->input('contenido');
      $contenido_modal = $request->input('contenido_modal');

      $data = array('icon'=>$icon, 'title'=>$title, 'contenido'=>$contenido,  'contenido_modal'=>$contenido_modal);
      DB::table('servicios')->insert($data);

      // flash message
      session()->flash('success', 'El post fue creado!');
      //redirect user
      return redirect(route('servicio.redirect'));

    }

    public function redirect() {
      $latest = DB::table('servicios')->orderBy('id', 'desc')->first();

       return redirect('servicios/' . $latest->id . '/edit');
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
    public function edit(Servicio $servicio)
    {

        return view('servicios.create')->with('servicio', $servicio);
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


        if ($request->hasFile('image')) {
          $this->validate($request, [
            'image' => 'image|required|mimes:png,svg'
         ]);
        $imageOld = DB::table('servicios')->where('id', $id)->first();

        //upload it
        $image = $request->file('image')->store('content/servicios');
        Storage::delete($imageOld->image);
        $data=array('image'=>$image);
        DB::table('servicios')->where('id', $id)->update($data);
      }else {

        $icon = $request->input('icon');
        $title = $request->input('title');
        $contenido = $request->input('contenido');
        $contenido_modal = $request->input('contenido_modal');
        $data = array('icon'=>$icon, 'title'=>$title, 'contenido'=>$contenido,  'contenido_modal'=>$contenido_modal);
        DB::table('servicios')->where('id', $id)->update($data);

        session()->flash('success', 'Servicio actualizado');
        //redirect
        return redirect(route('servicios.index'));
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
      $servicio = Servicio::withTrashed()->where('id', $id)->firstOrFail();

      if ($servicio->trashed()) {
        $servicio->forceDelete();
        session()->flash('success', 'Servicio eliminado permanentemente');
        return redirect(route('trashed-servicios.index'));
      }else {
        $servicio->delete();
        session()->flash('success', 'Servicio enviado a la papelera');
        return redirect(route('servicios.index'));
    }
  }

  public function trashed() {
    $trashed = Servicio::onlyTrashed()->get();
    return view('servicios.index')->with('servicios', $trashed);
  }
  public function restore($id) {
    $servicio = Servicio::withTrashed()->where('id', $id)->firstOrFail();
    $servicio->restore();
    session()->flash('success', 'Servicio Restaurado');
    return redirect()->back();
  }
}
