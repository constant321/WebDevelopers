<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
   

    public function index()
    {
      $blogs = blog::latest()->paginate(5);
      return view('blogs.index', compact('blogs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
       return view('blogs.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'blog_name'=>'required',
            'blog_description'=>'required',
        ]);

        blog::create($request->all());
        return redirect()->route('blogs.index')
            ->with('success','Blog created successfully. ');
    }


    public function show(blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }


    
    public function edit(blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

  
    public function update(Request $request, blog $blog)
    {
        $request->validate([

        ]);
        $blog->update($request->all());

        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully');
    }

   
    public function destroy(blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
}
