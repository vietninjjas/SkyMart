<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Review;
use App\Order;
use App\proChillImage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        $countModal = 1;

        return view('product.view', compact('products', 'countModal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('pro_image');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move('images/products', $fileName);
        $product = new Product();
        $product->pro_name = $request->input('pro_name');
        $product->cate_id = $request->input('cate_id');
        $product->pro_desc = $request->input('pro_desc');
        $product->pro_image = $fileName;
        $product->quantity = $request->input('quantity');
        $product->pro_old_price = $request->input('pro_old_price');
        $product->pro_new_price = $request->input('pro_new_price');
        $product->pro_sale = $request->input('pro_sale');
        $product->save();

        foreach($request->file('chill_image') as $fileChill)
        {
            $nameChill = uniqid() . '_' . $fileChill->getClientOriginalName();;
            $fileChill->move('images/chillImageProducts', $nameChill);
            $chillImage = new proChillImage();
            $chillImage->pro_id = $product->pro_id;
            $chillImage->chill_image = $nameChill;
            $chillImage->save();
        }

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::all();
        $product = Product::findOrFail($id);
        $product->increment('view');
        $productOrderSame = Product::inRandomOrder()->limit(3)->get();
        $countReview = 1;

        return view('product.product-detail', compact('product', 'products', 'productOrderSame', 'countReview'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $pro = Product::findOrFail($id);

        return view('product.edit', compact('pro', 'categories'));
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
        $pro = Product::findOrFail($id);
        $file = $request->file('pro_image');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move('images/products', $fileName);
        $pro->pro_name = $request->input('pro_name');
        $pro->cate_id = $request->input('cate_id');
        $pro->pro_desc = $request->input('pro_desc');
        $pro->pro_image = $fileName;
        $pro->quantity = $request->input('quantity');
        $pro->pro_old_price = $request->input('pro_old_price');
        $pro->pro_new_price = $request->input('pro_new_price');
        $pro->pro_sale = $request->input('pro_sale');
        $pro->save();

        foreach($request->file('chill_image') as $fileChill)
        {
            $nameChill = uniqid() . '_' . $fileChill->getClientOriginalName();;
            $fileChill->move('images/chillImageProducts', $nameChill);
            $chillImage = new proChillImage();
            $chillImage->pro_id = $id;
            $chillImage->chill_image = $nameChill;
            $chillImage->save();
        }

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::findOrFail($id);
        $pro->proChillImages()->delete();
        $pro->reviews()->delete();
        $pro->wishlists()->delete();
        $pro->delete();


        return redirect()->route('admin.product.index');
    }
}
