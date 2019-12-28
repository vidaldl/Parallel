<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Style;
use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.index')
        ->with('styles', Style::all())
        ->with('order', Order::all());
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
        $menu_name = $request->input('menu_name');

        $data = array('menu_name'=>$menu_name);
        DB::table('orders')->where('id', $id)->update($data);

        session()->flash('success', 'Menú Actualizado');
    }


    public function display(Request $request, $id) {
      $menu_display = $request->input('menu_display');

      $data = array('menu_display'=>$menu_display);
      DB::table('orders')->where('id', $id)->update($data);
      $order = Order::all();
      return response()->json($order);
    }

    public function menuSideUpdate(Request $request, $id)
    {
      $custom_icon_1 = $request->input('custom_icon_1');
      $custom_link_text_1 = $request->input('custom_link_text_1');
      $custom_link_address_1 = $request->input('custom_link_address_1');
      $show_link_1 = $request->input('show_link_1');

      $custom_icon_2 = $request->input('custom_icon_2');
      $custom_link_text_2 = $request->input('custom_link_text_2');
      $custom_link_address_2 = $request->input('custom_link_address_2');
      $show_link_2 = $request->input('show_link_2');

      $data = array("custom_icon_1"=>$custom_icon_1,
      "custom_link_text_1"=>$custom_link_text_1,
      "custom_link_address_1"=>$custom_link_address_1,
      "show_link_1"=>$show_link_1,
      "custom_icon_2"=>$custom_icon_2,
      "custom_link_text_2"=>$custom_link_text_2,
      "custom_link_address_2"=>$custom_link_address_2,
      "show_link_2"=>$show_link_2);
      DB::table('styles')->update($data);
      session()->flash('success', 'La informacion ha sido actualizada');
      //redirect
      return redirect()->back();
    }

}
