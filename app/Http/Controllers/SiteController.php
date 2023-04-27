<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {

        $guests = \App\Models\Category::where('slug', 'ضيوف-الشرف')->first()->files;
        $catPosts = \App\Models\Category::where('type','posts')->latest()->get();
        return view('index',compact('guests','catPosts'));
    }

    public function post($slug) {


        $post = Post::where('slug'  , $slug)->first();

        $allPosts = Post::where('category_id'  , $post -> category_id) -> latest()->get();

        $next_page = Post::where('id','>',$post -> id)->min('id');
        $prev_page = Post::where('id','<',$post -> id)->max('id');



        return view('posts',compact('post','allPosts'))
            ->with('next',Post::find($next_page))
            ->with('prev',Post::find($prev_page));

    }


    public function album() {
        $categories = Category::where('type','images')->latest()->get();
        return view('album',compact("categories"));
    }

}
