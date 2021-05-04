<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::withTrashed()
            ->get();

        return view('dashboard.category.index', compact(['categories']));
    }



    public function getCategoryList()
    {
        $categories = Category::all();

        return view('dashboard.category.list', compact(['categories']));
    }

    public function create()
    {
        $categories = Category::all();

        return view('dashboard.category.create', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        // $validator = CategoryRequest::make($request->all());
        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->error()->all()]);
        // }
        $category = new Category();
        $category->name = $request->category_name;
        $category->save();

        return response()->json($category);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editForm($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.edit-form', compact('category'));
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
        $category = Category::findOrFail($id);

        // Gán các thuộc tính mới
        $category->name = $request->category_name;

        // Lưu
        $category->save();

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
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
