<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;


class BlogController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('dashboard.blog.index', compact(['products']));
    }



    public function getBlogList()
    {
        $blogs = Blog::all();

        return view('dashboard.blog.list', compact(['blogs']));
    }

    public function create($id)
    {
        $product = Product::findOrFail($id);


        return view('dashboard.blog.create', compact('product'));
    }

    public function store(Request $request, $id)
    {

        $blog = new Blog();
        $blog->product_id = $id;
        // dd($blog->product_id);
        $blog->title = $request->title;
        $blog->content = $request->content;

        $blog->save();

        // return response()->json($blog);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editForm($id)
    {
        $Blog = Blog::findOrFail($id);
        return view('dashboard.Blog.edit-form', compact('Blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $blog = Blog::findOrFail($id);

        // Gán các thuộc tính mới
        $blog->name = $request->blog_name;

        // Lưu
        $blog->save();

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::findOrFail($id);
        $Blog->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
