<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Response;
use Illuminate\Support\Facades\Storage;

use App\Portfolio\PortfolioItem;
use App\Portfolio\PortfolioCategory;
use App\Http\Requests\Portfolio\UpdatePortfolioItemsRequest;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('portfolio.items.index')->with('portfolioItems', PortfolioItem::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('portfolio.items.create')->with('portfolioCategories', PortfolioCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $title = $request->input('title');
      $subtitle = $request->input('subtitle');

      if ($request->hasFile('image')) {
      $this->validate($request, [
          'image' => 'image|required|mimes:png,jpg,jpeg,svg'
       ]);
      //upload it
      $image = $request->file('image')->store('content/portfolio');

      $data =array('image' => $image);

      $latest = DB::getPdo('portfolio_items')->lastInsertId();
      return redirect('portfolioItems/' . $latest . '/edit');

    }else {
      $data = array('title'=>$title, 'subtitle'=>$subtitle);
      $dataUpload = DB::table('portfolio_items')->insert($data);
      session()->flash('success', 'Artículo actualizado');
      $latest = DB::getPdo('portfolio_items')->lastInsertId();
      return redirect('portfolioItems/' . $latest . '/edit');
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

    public function redirect() {
      $latest = DB::table('portfolio_items')->orderBy('id', 'desc')->first();

       return redirect('portfolioItems/' . $latest->id . '/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioItem $portfolioItem)
    {
      return view('portfolio.items.create')->with('portfolioItem', $portfolioItem)->with('portfolioCategories', PortfolioCategory::all());
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
      $portfolio = PortfolioItem::find($id);
      // dd($portfolio->title);
      // $portfolio->portfolio_category()->attach(2);


      $title = $request->input('title');
      $subtitle = $request->input('subtitle');
      $categories = $request->input('categories');
      $portfolio->portfolio_category()->sync($categories);
      $oldImage = DB::table('portfolio_items')->where('id', $id)->first();
      if ($request->hasFile('image')) {
          $this->validate($request, [
              'image' => 'image|required|mimes:png,jpg,jpeg,svg'
           ]);
          //upload it

          $image = $request->file('image')->store('content/portfolio');
          //Image Intervention

          Storage::delete($oldImage->image);

          $data=array('image'=>$image);
          DB::table('portfolio_items')->where('id', $id)->update($data);

        } else {
          $data = array('title'=>$title, 'subtitle'=>$subtitle);
          DB::table('portfolio_items')->where('id', $id)->update($data);
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
      $portfolioItems = PortfolioItem::withTrashed()->where('id', $id)->firstOrFail();
      if ($portfolioItems->trashed()) {
      $portfolioItems->deleteImage();
      $portfolioItems->forceDelete();
      session()->flash('error', 'Artículo eliminado permanentemente');
      return redirect(route('trashed-portfolioItems.index'));
    }else {
      $portfolioItems->delete();
      session()->flash('success', 'Artículo enviado a la papelera');
      return redirect(route('portfolioItems.index'));
  }
    }

public function trashed() {
  $trashed = PortfolioItem::onlyTrashed()->get();
  return view('portfolio.items.index')->with('portfolioItems', $trashed);
}
public function restore($id) {
  $portfolioItems = PortfolioItem::withTrashed()->where('id', $id)->firstOrFail();
  $portfolioItems->restore();
  session()->flash('success', 'Portfolio: Artículo Restaurado');
  return redirect()->back();
}
}
