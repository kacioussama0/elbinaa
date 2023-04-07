<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->where('type','=','images');
        return view('admin.photos.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->where('type','=','images');
        return view('admin.photos.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'images' => 'required'
        ]);


        $images = $request -> images;


        foreach ($images as $image) {
            $fileName = explode('/',$image)[2];
            Storage::move('public/'. $image,'public/images/' . $fileName);
            Files::create([
                'name' => $fileName,
                'path' => 'images/' . $fileName,
                'category_id' => $request->category_id,
                'type' => 'image'
            ]);
        }

        return redirect()->to('photos');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $files)
    {
        //
    }

    public function uploadPhoto(Request $request) {


        if($request->hasFile('images')){

            $files = $request->file('images');

            foreach ($files as $file) {

                return
                    $file -> store('tmp/' . uniqid() , 'public');
            }

            return  '';

        }
    }

    public function revert(Request $request) {
        return $request->file('images');

    }
}
