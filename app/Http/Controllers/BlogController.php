<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('blog.index')->with(['posts' => $posts]);
    }
    public function store(Request $request){
        Post::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'post' => $request->post
        ]);
        return back();
    }
}
