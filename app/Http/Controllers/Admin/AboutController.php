<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::get();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();;
            ImageManager::gd()->read($image)->cover(150,150)->save(public_path('uploads/thumbnails/'.$imageName));
            ImageManager::gd()->read($image)->save(public_path('uploads/'.$imageName));
            $data['image'] = $imageName;

        }
        About::create($data);
        return redirect()->route('admin.about.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();;
            ImageManager::gd()->read($image)->cover(150,150)->save(public_path('uploads/thumbnails/'.$imageName));
            ImageManager::gd()->read($image)->save(public_path('uploads/'.$imageName));
            $data['image'] = $imageName;
        }
        else{
            $data['image'] = $about->image;
        }

        $about->update($data);
        return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'About item delete.');

    }
}
