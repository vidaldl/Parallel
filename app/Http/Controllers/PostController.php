<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Posts\CreatePostsRequest;
use App\Http\Requests\Posts\UpdatePostsRequest;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;

use Image;


class PostController extends Controller
{
  //Constructor

  public function __construct() {
    $this->middleware('verifyCategoriesCount')->only(['create', 'store',]);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {


        // Upload the image
        //$image = $request->image->store('posts');
        //upload it
        $image = $request->file('image'); //->store('content');
        //Image Intervention
        $finalImage = Image::make($image);
        $random = rand();
        $originalPath = public_path().'/storage/content/original/';
        $finalPath = public_path().'/storage/posts/';
        $finalImage->save($originalPath.$random.$image->getClientOriginalName());
        $finalDummy = $finalImage->basename;
        $finalDummyName = 'content/original/'.$finalDummy;
        Storage::delete($finalDummyName);
        //moment of transformation
        $width = NULL;
        $height = 280;

        $finalImage->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();

        });

        // $finalImage->resize(150,150);
        $finalImage->save($finalPath.$random.$image->getClientOriginalName());
        $finalImageName = 'posts/'.$finalImage->basename;


        // create the post
        $post = Post::create([
          'title' => $request->title,
          'category_id' => $request->category,
          'description' => $request->description,
          'contenido' => $request->contenido,
          'image' => $finalImageName,
          'published_at' => $request->published_at
        ]);

        // if ($request->tags) {
        //   $post->tags()->attach($request->tags);
        // }

        // flash message
        session()->flash('success', 'El post fue creado!');
        //redirect user
        return redirect(route('posts.index'));
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
    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostsRequest $request, Post $post)
    {

        $data = $request->only(['title', 'description', 'category', 'published_at', 'contenido']);
        $data['category_id'] = $request->category;
        //check if new image
        if ($request->hasFile('image')) {
          //upload it
          $image = $request->file('image'); //->store('content');
          //Image Intervention
          $finalImage = Image::make($image);
          $random = rand();
          $originalPath = public_path().'/storage/content/original/';
          $finalPath = public_path().'/storage/posts/';
          $finalImage->save($originalPath.$random.$image->getClientOriginalName());
          $finalDummy = $finalImage->basename;
          $finalDummyName = 'content/original/'.$finalDummy;
          Storage::delete($finalDummyName);
          //moment of transformation
          $width = 640;
          $height = 280;

          $finalImage->resizeCanvas($width, $height);
          $imageWidth = $finalImage->width();

          //$finalImage->crop(640, 280);
          Storage::delete($post->image);
          // $finalImage->resize(150,150);
          $finalImage->save($finalPath.$random.$image->getClientOriginalName());
          $finalImageName = 'posts/'.$finalImage->basename;

          $data['image'] = $finalImageName;
        }

        //Update Attributes
        $post->update($data);


        //flash
        session()->flash('success', 'El Post fué actualizado');
        //redirect
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //Do not use route model binding
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if ($post->trashed()) {
          $post->deleteImage();
          $post->forceDelete();
          session()->flash('success', 'Post eliminado permanentemente');
          return redirect(route('trashed-posts.index'));
        }else {
          $post->delete();
          session()->flash('success', 'Post enviado a la papelera');
          return redirect(route('posts.index'));
        }

    }

    public function trashed() {
      $trashed = Post::onlyTrashed()->get();
      return view('posts.index')->with('posts', $trashed);
    }

    public function restore($id) {
      $post = Post::withTrashed()->where('id', $id)->firstOrFail();
      $post->restore();
      session()->flash('success', 'El Post Fue Restaurado');
      return redirect()->back();
    }
}
