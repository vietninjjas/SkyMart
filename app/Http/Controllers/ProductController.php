<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();

        return view('product.view', compact('products'));
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
        Product::create([
            'pro_name' => $request->input('pro_name'),
            'cate_id' => $request->input('cate_id'),
            'pro_desc' => $request->input('pro_desc'),
            'pro_image' => $fileName,
            'quantity' => $request->input('quantity'),
            'pro_old_price' => $request->input('pro_old_price'),
            'pro_new_price' => $request->input('pro_new_price'),
            'pro_sale' => $request->input('pro_sale'),
        ]);

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
        $product = Product::findOrFail($id);
        
        return $product->increment('view');
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
        $file->move('images/categories', $fileName);
        $pro->pro_name = $request->input('pro_name');
        $pro->cate_id = $request->input('cate_id');
        $pro->pro_desc = $request->input('pro_desc');
        $pro->pro_image = $fileName;
        $pro->quantity = $request->input('quantity');
        $pro->pro_old_price = $request->input('pro_old_price');
        $pro->pro_new_price = $request->input('pro_new_price');
        $pro->pro_sale = $request->input('pro_sale');
        $pro->save();

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
        $pro->delete();

        return redirect()->route('admin.product.index');
    }
}
