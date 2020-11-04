<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->with('children')->get();

        return view('category.view', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        
        return view('category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('cate_logo');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move('images/categories', $fileName);
        Category::create([
            'cate_name' => $request->input('cate_name'),
            'cate_desc' => $request->input('cate_desc'),
            'cate_logo' => $fileName,
            'parent_id' => $request->input('parent_id'),
        ]);

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cateId)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cateId)
    {
        $cate = Category::findOrFail($cateId);
        $categories = Category::whereNull('parent_id')->get();

        return view('category.edit', compact('cate', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cateId)
    {
        $cate = Category::findOrFail($cateId);
        $file = $request->file('cate_logo');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move('images/categories', $fileName);
        $cate->cate_name = $request->input('cate_name');
        $cate->cate_desc = $request->input('cate_desc');
        $cate->cate_logo = $fileName;
        $cate->parent_id = $request->input('parent_id');
        $cate->save();

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cateId)
    {
        $cate = Category::findOrFail($cateId);
        $cate->delete();

        return redirect()->route('admin.category.index');
    }
}
