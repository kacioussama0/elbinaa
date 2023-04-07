<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        $categories = Category::all()->where('type','=','posts');
         return view('admin.posts.index',compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->where('type','=','posts');
        return view('admin.posts.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request -> validate([
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'required',
            'content' => 'required',
        ]);

        $image = '';

        if($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail')->store('posts/' , 'public');
        }


        $post = Post::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'thumbnail' => $image,
            'content' => $request->content,
            'published' => (!empty($request->published)) ? 1 : 0,
        ]);

        if($post) {
            return redirect()->to('posts')->with(['success' => 'تم إضافة المقال بنجاح']);
        }

        return  abort(500);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all()->where('type','=','posts');
        return view('admin.posts.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request -> validate([
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);


        if($request->hasFile('thumbnail')) {
            Storage::delete('public/' . $post->thumbnail);
            $image = $request->file('thumbnail')->store('posts' , 'public');
        }


        $post->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'thumbnail' => (!empty($image)) ? $image :  $post -> thumbnail,
            'content' => $request['content'],
            'published' => (!empty($request->published)) ? 1 : 0,
        ]);

        if($post) {
            return redirect()->to('posts')->with(['success' => 'تم تعديل المقال بنجاح']);
        }

        return  abort(500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->delete()) {
            return redirect()->to('posts')->with(['success' => 'تم حذف المقال بنجاح']);
        }
        return  abort(500);

    }
}
