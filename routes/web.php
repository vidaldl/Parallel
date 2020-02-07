<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');
Route::get('/about', 'IndexController@about');



Route::get('/blog', 'IndexController@blog');


Auth::routes(['verify' => true, 'register' => false]);


Route::get('home', 'HomeController@index')->name('home');
Route::get('homeInactive', 'HomeController@indexInactive')->name('home.inactive');

//Order Sections
Route::post('/order', 'IndexController@order');
// Contact Form
Route::post('/cForm', 'IndexController@mail')->name('send.contact');



//Portfolio
Route::resource('portfolioCategories', 'Portfolio\PortfolioCategoryController');
Route::resource('portfolioItems', 'Portfolio\PortfolioItemController', ['except' => ['update']]);
Route::post('/portfolioItem/{id}', 'Portfolio\PortfolioItemController@update')->name('portfolioItems.update');
Route::get('trashed-portfolioItems', 'Portfolio\PortfolioItemController@trashed')->name('trashed-portfolioItems.index');
Route::put('restore-portfolioItems/{portfolioItem}', 'Portfolio\PortfolioItemController@restore')->name('restore-portfolio-items');
Route::get('/redirectPortfolioItem', 'Portfolio\PortfolioCategoryController@redirect');


//Portfolio Gallery
Route::get('/portfolioGallerySection/{id}', 'PortfolioGalleryController@editSection')->name('portfolioGallerySection.index');
Route::post('/portfolioGallerySectionUpdate/{id}', 'PortfolioGalleryController@updateSection')->name('portfolioGallerySection.update');
Route::resource('portfolioGallery', 'PortfolioGalleryController', ['except' => ['update']]);
Route::post('/portfolioGallery/{id}', 'PortfolioGalleryController@update')->name('portfolioGallery.update');
Route::get('trashed-gallery', 'PortfolioGalleryController@trashed')->name('trashed-gallery.index');
Route::put('restore-gallery/{link}', 'PortfolioGalleryController@restore')->name('restore-gallery');

  //Portfolio Images
Route::post('/portfolioGalleryImageCreate/{id}', 'PortfolioGalleryController@imageCreate')->name('portfolioGalleryImage.create');
Route::post('/portfolioGalleryImageDestroy/{id}', 'PortfolioGalleryController@imageDestroy')->name('portfolioGalleryImage.destroy');
Route::post('/portfolioGalleryImage/{id}', 'PortfolioGalleryController@imageUpdate')->name('portfolioGalleryImage.update');

//Pricing
// Route::get('/editPricing', 'HomeController@pricingEdit')->name('pricing.edit');
// Route::post('/updatePricing/{id}', 'HomeController@pricingUpdate')->name('pricing.update');
Route::resource('pricing', 'PricingController', ['except' => ['update']]);
Route::post('/pricingUpdate/{id}', 'PricingController@pricingUpdate')->name('pricing.update');


Route::post('pricingItemCreate/{id}', 'PricingController@pricingItemsCreate')->name('pricingItem.create');
Route::post('pricingItemDestroy/{id}', 'PricingController@pricingItemDestroy')->name('pricingItem.destroy');
Route::post('pricingSection/{id}', 'PricingController@sectionUpdate')->name('pricingSection.update');



Route::middleware(['auth'])->group(function () {

// ================================== Display ========================================
Route::post('/display-portfolio-programs', 'DisplayController@portfolioprogramsDisplay');
Route::post('/display-pricing', 'DisplayController@pricingDisplay');
Route::post('/display-frase', 'DisplayController@fraseDisplay');
Route::post('/display-servicios', 'DisplayController@serviciosDisplay');
Route::post('/display-links', 'DisplayController@linksDisplay');
Route::post('/display-infoslider1', 'DisplayController@infoslider1Display');
Route::post('/display-infoslider2', 'DisplayController@infoslider2Display');
Route::post('/display-infoslider3', 'DisplayController@infoslider3Display');
Route::post('/display-info', 'DisplayController@infoDisplay');
Route::post('/display-articulos', 'DisplayController@articulosDisplay');
Route::post('/display-contact', 'DisplayController@contactDisplay');
Route::post('/display-portfolio-gallery', 'DisplayController@portfoliogalleryDisplay')->name('portfolioGallery.display');
// Route::post('/display-footer/{id}', 'HomeController@sectionFooterDisplay')->name('sectionFooter.display');

// ================================== EditSections ========================================
//LINE BETWEEN
Route::post('/line-update/{id}', 'IndexController@lineUpdate')->name('line.update');


// MENU
Route::get('/menu', 'MenuController@index')->name('menu.index');
Route::post('/menu-update/{id}', 'MenuController@update')->name('menu.update');
Route::post('/menu-display/{id}', 'MenuController@display');
Route::post('/menuSide-update/{id}', 'MenuController@menuSideUpdate')->name('menuSide.update');
Route::post('/menuLogo-update/{id}', 'MenuController@logo')->name('menuLogo.update');




//Frase section
Route::get('/frase/{id}', 'HomeController@fraseEdit')->name('frase.edit');
Route::post('/frase/{id}', 'HomeController@fraseUpdate')->name('frase.update');


//Properties Features
Route::resource('features', 'FeaturesController');
Route::get('trashed-features', 'FeaturesController@trashed')->name('trashed-features.index');
Route::put('restore-features/{feature}', 'FeaturesController@restore')->name('restore-features');
//Properties Cities
Route::resource('cities', 'CitiesController');
Route::get('trashed-cities', 'CitiesController@trashed')->name('trashed-cities.index');
Route::put('restore-cities/{city}', 'CitiesController@restore')->name('restore-cities');

//Properties Section
Route::get('/editProp/{id}', 'PropertyController@propertiesSectionEdit')->name('propSection.edit');
Route::post('/updateprop/{id}', 'PropertyController@propertiesSectionUpdate')->name('propSection.update');
Route::post('/displayprop/{id}', 'PropertyController@propertiesSectionDisplay')->name('propSection.display');


//Properties
Route::resource('properties', 'PropertyController');
// Property update
// Route::post('/property/{id}', 'PropertyController@update')->name('property.update');
Route::get('trashed-properties', 'PropertyController@trashed')->name('trashed-properties.index');
Route::put('restore-properties/{property}', 'PropertyController@restore')->name('restore-properties');


//Styles
Route::post('/style-update/{id}', 'HomeController@styleUpdate')->name('style.update');


//Section1
Route::get('/editsection1/{id}', 'HomeController@section1Edit')->name('section1.edit');
Route::post('/updatesection1/{id}', 'HomeController@section1Update')->name('section1.update');

Route::post('/carouselsection1/{id}', 'HomeController@section1Carousel')->name('section1.carousel');
Route::post('/style-pick/{id}', 'HomeController@sliderStyleUpdate')->name('sliderStyle.update');
//Section2
Route::get('/editsection2/{id}', 'HomeController@section2Edit')->name('section2.edit');
Route::post('/updatesection2/{id}', 'HomeController@section2Update')->name('section2.update');

//Links
Route::get('/editlink/{id}', 'HomeController@linkEdit')->name('link.edit');
Route::post('/updatelink/{id}', 'HomeController@linkUpdate')->name('link.update');

//Slider information
Route::get('/editInfoSlider/{id}', 'HomeController@infoSliderEdit')->name('info-slider-text.edit');
Route::post('/updateInfoSlider/{id}', 'HomeController@infoSliderUpdate')->name('infoSlider.update');
Route::delete('/delete-slider-video/{id}', 'HomeController@deleteSliderVideo')->name('delete.sliderVideo');
Route::post('/store-slider-image', 'HomeController@storeSliderImage')->name('store.sliderImage');
Route::post('/update-slider-image/{id}', 'HomeController@updateSliderImage')->name('update.sliderImage');
Route::delete('/delete-slider-image/{id}', 'HomeController@deleteSliderImage')->name('delete.sliderImage');
//Slider information2
Route::get('/editInfoSlider2/{id}', 'HomeController@infoSlider2Edit')->name('info-slider-text2.edit');
Route::post('/updateInfoSlider2/{id}', 'HomeController@infoSlider2Update')->name('infoSlider2.update');
Route::delete('/delete-slider-video2/{id}', 'HomeController@deleteSliderVideo2')->name('delete.sliderVideo2');
Route::post('/store-slider-image2', 'HomeController@storeSliderImage2')->name('store.sliderImage2');
Route::post('/update-slider-image2/{id}', 'HomeController@updateSliderImage2')->name('update.sliderImage2');
Route::delete('/delete-slider-image2/{id}', 'HomeController@deleteSliderImage2')->name('delete.sliderImage2');
//Slider information3
Route::get('/editInfoSlider3/{id}', 'HomeController@infoSlider3Edit')->name('info-slider-text3.edit');
Route::post('/updateInfoSlider3/{id}', 'HomeController@infoSlider3Update')->name('infoSlider3.update');
Route::delete('/delete-slider-video3/{id}', 'HomeController@deleteSliderVideo3')->name('delete.sliderVideo3');
Route::post('/store-slider-image3', 'HomeController@storeSliderImage3')->name('store.sliderImage3');
Route::post('/update-slider-image3/{id}', 'HomeController@updateSliderImage3')->name('update.sliderImage3');
Route::delete('/delete-slider-image3/{id}', 'HomeController@deleteSliderImage3')->name('delete.sliderImage3');

//Section3
Route::get('/editsection3/{id}', 'HomeController@section3Edit')->name('section3.edit');
Route::post('/updatesection3/{id}', 'HomeController@section3Update')->name('section3.update');

//Section4
Route::get('/editsection4/{id}', 'HomeController@section4Edit')->name('section4.edit');
Route::post('/updatesection4/{id}', 'HomeController@section4Update')->name('section4.update');

//Section5
Route::get('/editsection5/{id}', 'HomeController@section5Edit')->name('section5.edit');
Route::post('/updatesection5/{id}', 'HomeController@section5Update')->name('section5.update');

//Section Footer
Route::get('/editsectionFooter/{id}', 'HomeController@sectionFooterEdit')->name('sectionFooter.edit');
Route::post('/updatesectionFooter/{id}', 'HomeController@sectionFooterUpdate')->name('sectionFooter.update');

//Abut Page
Route::get('/edit-about/{id}', 'HomeController@aboutEdit')->name('about.edit');
Route::post('/update-about/{id}', 'HomeController@aboutUpdate')->name('about.update');

// Posts functionality
Route::resource('categories', 'CategoriesController');
Route::resource('tags', 'TagsController');
Route::resource('posts', 'PostController', ['except' => ['update']]);
Route::get('trashed-posts', 'PostController@trashed')->name('trashed-posts.index');
Route::put('restore-posts/{post}', 'PostController@restore')->name('restore-posts');

  // Post update
Route::post('/posts/{id}', 'PostController@update')->name('posts.update');
//redirect1
Route::get('/redirect1', 'PostController@redirect1');
Route::get('/redirect2', 'LinkController@redirect2');
Route::get('/redirectProperty', 'PropertyController@redirectProperty');




Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');
Route::put('users/profile', 'UsersController@update')->name('users.update-profile');
Route::post('logout-reset', 'UsersController@logoutReset')->name('logout.reset');
Route::get('password-redirect', 'UsersController@passwordRedirect')->name('password.redirect');

// Servicios functionality
Route::resource('servicios', 'ServicioController', ['except' => ['update']]);
Route::post('servicios/{id}', 'ServicioController@update')->name('servicio.update');
Route::get('trashed-servicios', 'ServicioController@trashed')->name('trashed-servicios.index');
Route::put('restore-servicios/{servicio}', 'ServicioController@restore')->name('restore-servicios');
Route::get('/redirectServicio', 'ServicioController@redirect')->name('servicio.redirect');

//Links
Route::resource('links', 'LinkController');
Route::get('trashed-links', 'LinkController@trashed')->name('trashed-links.index');
Route::put('restore-links/{link}', 'LinkController@restore')->name('restore-links');
});

Route::middleware(['auth','admin'])->group(function() {
  Route::get('users', 'UsersController@index')->name('users.index');
  Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
});
