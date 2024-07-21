<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(1);
        $blogs = Blog::with("category")->paginate(6);
        return view("pages.blog")->with(["user" => $user, "blogs" => $blogs]);
    }
    public function indexAdmin()
    {

        $blogs = Blog::with("category")->get();
        return view("admin.blogs")->with("blogs", $blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.blog.create")->with("categories", $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::create([
            "title" => $request->title,
            "user_id" => 1,
            "content" => $request->content,
            "read_time" => $request->read_time,
            "category_id" => $request->category_id,
            "image" =>  $request->file("image")->store("blog", "public"),
        ]);
        return redirect("/admin/blog")->with("success", "post created succesfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::with('category')->find($id);

        if (!$blog) {
            abort(404, 'Blog post not found');
        }

        $relatedPosts = Blog::with("category")->where('category_id', $blog->category->id)
            ->where('id', '!=', $id)
            ->take(2)
            ->get();
        // dd($relatedPosts);
        $user = User::find(1);

        return view('pages.article')->with([
            'blog' => $blog,
            'relatedPosts' => $relatedPosts,
            'user' => $user,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Blog::find($id);
        $post->delete();
        return redirect()->back()->with("success", " post deleted");
    }
}
