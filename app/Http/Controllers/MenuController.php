<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Style;
use App\MenuItem;
use DB;
use Illuminate\Support\Facades\Storage;

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
        ->with('menu_item', MenuItem::all())
        ->with('order', Order::all());
    }


    public function logo(Request $request, $id) {
      $this->validate($request, [
          'logo' => 'image|required|mimes:png,svg'
       ]);
      $imageOld = DB::table('menu_items')->where('id', $id)->first();

      //upload it
      $logo = $request->file('logo')->store('content/menu');
      Storage::delete($imageOld->logo);
      $data=array('logo'=>$logo);
      DB::table('menu_items')->where('id', $id)->update($data);
    }

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

        $link_mode_1 = $request->input('link_mode_1');
        $link_mode_2 = $request->input('link_mode_2');
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
        "show_link_2"=>$show_link_2,
        "link_mode_1"=>$link_mode_1,
        "link_mode_2"=>$link_mode_2);
        DB::table('styles')->where('id', $id)->update($data);
        session()->flash('success', 'La informacion ha sido actualizada');
        //redirect
        return redirect()->back();

    }

}
