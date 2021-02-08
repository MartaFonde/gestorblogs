<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPost($id) {
        $blog = Blog::with("posts")->findOrFail($id);
        return view("showPost", compact("blog"));
    }

    
    public function createPost($id) {
        return view("createPost",compact("id"));
    }

    public function storePost(Request $request, $id) {
        $this->validate(request(), [
            "title" => "required",
            "content" => "required"
        ]);
        $post = new Post();
        $post->id = $request->input('id') ?: null;
        $post->user_id = auth()->id();
        $post->blog_id = $id;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return back(); //Me devuelve a la misma página
    }   
}
