<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::paginate(4);
        $categories = Category::all();

        return view('dashboard.product.index', compact(['categories', 'products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('dashboard.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->product_name;
        // dd($request->category);
        $product->category_id = $request->category;
        $product->title = $request->title;

        $product->benefit = $request->content_benefit;
        $product->info = $request->info;
        if ($request->hasFile('image_illustration')) {

            $image = $request->file('image_illustration');
            $path = $image->store('images', 'public');
            $product->illustration = $path;
        }
        if ($request->hasFile('image_product')) {

            $image = $request->file('image_product');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }

        if ($request->hasFile('image_product')) {

            $image = $request->file('image_product');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.product.edit', compact(['product', 'categories']));
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
        // $validatedData = $request->validate(
        //     [
        //         'category' => 'bail|required',
        //     ],
        //     [
        //         'category.required' => 'Vui lòng chọn thể loại sản phẩm'
        //     ]
        // );

        // $product = Product::create($validatedData);
        $product = Product::findOrFail($id);
        $product->name = $request->product_name;
        $product->category_id = $request->category;
        $product->benefit = $request->content_benefit;
        $product->title = $request->title;
        $product->info = $request->info;
        if ($request->hasFile('illustration_image')) {
            // Nếu không thì in ra thông báo
            $image = $request->file('illustration_image');
            $storedPath = $image->move('images', $image->getClientOriginalName());
            $product->illustration = $storedPath;
        }
        if ($request->hasFile('product_image')) {

            $product_image = $request->file('product_image');
            $storedPath = $product_image->move('images', $product_image->getClientOriginalName());

            $product->image = $storedPath;
        }

        if ($request->hasFile('banner')) {

            $banner = $request->file('banner');
            $storedPath = $banner->move('images', $banner->getClientOriginalName());

            $product->banner = $storedPath;
        }
        // Nếu có thì thục hiện lưu trữ file vào public/images

        $product->save();


        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully');
    }



    // public function showbenefit($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return response()->json($product);
    // }


    // show product benefit
    public function getProductBenefit($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.product.showbenefit', compact('product'));
    }
    // show product illustration

    public function getProductIllustration($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.product.illustration', compact('product'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['success' => 'Sản phẩm đã được xóa thành công']);
    }
}
