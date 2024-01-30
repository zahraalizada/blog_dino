<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();;
            ImageManager::gd()->read($image)->cover(150,150)->save(public_path('uploads/thumbnails/'.$imageName));
            ImageManager::gd()->read($image)->save(public_path('uploads/'.$imageName));
            $data['image'] = $imageName;
        }
        if ($request->hasFile('title_image')) {
            $image = $request->file('title_image');
            $imageName = $image->hashName();;
            ImageManager::gd()->read($image)->cover(150,150)->save(public_path('uploads/thumbnails/'.$imageName));
            ImageManager::gd()->read($image)->save(public_path('uploads/'.$imageName));
            $data['title_image'] = $imageName;
        }


        Post::create($data);
        return redirect()->route('admin.post.index');
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
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
