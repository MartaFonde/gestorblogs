<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('create');
    }


    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:2|unique:blogs'       //en la peticion de crear el blog ... requisitos
        ]);

        Blog::create(request()->only('name'));
        return redirect(route('index'));
    }

        

    public function index()
    {
        $blogs = Blog::withCount("posts")->paginate(2);
        // Queremos obtener todos los blogs, paginados de dos en dos, y que nos diga
        // cuántos post tiene cada blog (whitCount)
        return view('index', compact('blogs'));
    }

    public function destroy($id)
    {
        if (request()->isMethod("DELETE")) {
            try {
                $blog = Blog::findOrFail($id);
                $blog->posts()->delete();
                $blog->delete();
                return redirect(route("index"));
            } catch (Exception $ex) {
                dd($ex);
            }
        }
    }

    public function show($id)
    {
        $blog = Blog::with("posts")->findOrFail($id);
        return view("show", compact("blog"));
    }
}
