<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Servicios\UpdateServiciosRequest;
use App\Http\Requests\Servicios\CreateServiciosRequest;
use App\Servicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('servicios.index')->with('servicios', Servicio::all());
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
    public function store(CreateServiciosRequest $request, Servicio $servicio)
    {

      if ($servicio->count() < 6) {
        // code...

      $servicioCreate = $servicio::create([
        'icon' => $request->icon,
        'title' => $request->title,
        'contenido' => $request->contenido
      ]);

      // flash message
      session()->flash('success', 'El post fue creado!');
      //redirect user
      return redirect(route('servicios.index'));
    } else {

      // flash message
      session()->flash('error', 'El número de servicios creados ha llegado al máximo');
      //redirect user
      return redirect(route('servicios.index'));
    }



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

        return view('servicios.create')->with('servicio', $servicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiciosRequest $request, Servicio $servicio)
    {
        $data = $request->only(['icon', 'title', 'contenido']);
        $servicio->update($data);
        session()->flash('success', 'Servicio actualizado');
        //redirect
        return redirect(route('servicios.index'));
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
