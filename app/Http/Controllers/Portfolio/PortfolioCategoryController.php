<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Portfolio\CreatePortfolioCategoriesRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioCategoriesRequest;

use App\Portfolio\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio/index')->with('portfolioCategories', PortfolioCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePortfolioCategoriesRequest $request)
    {
      PortfolioCategory::create([
        'name' => $request->name
      ]);

      session()->flash('success', 'Portfolio: Categoría Creada');

      return redirect(route('portfolioCategories.index'));
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
    public function edit(PortfolioCategory $portfolioCategory)
    {
      return view('portfolio.create')->with('portfolioCategory', $portfolioCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioCategoriesRequest $request, PortfolioCategory $portfolioCategory)
    {
      $portfolioCategory->update([
        'name' => $request->name
      ]);

      session()->flash('success', 'Categoría Actualizada');

      return redirect(route('portfolioCategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioCategory $portfolioCategory)
    {
    //   if ($category->posts->count() > 0) {
    //   session()->flash('error', 'La Categoria no puede ser eliminada porque esta asociada a algún Artículo');
    //   return redirect()->back();
    // }


      $portfolioCategory->delete();
      session()->flash('success', 'La categoria ha sido eliminada');

      return redirect(route('portfolioCategories.index'));
    }
}