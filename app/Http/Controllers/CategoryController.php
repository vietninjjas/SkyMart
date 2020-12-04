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
        $fileLogo = $request->file('cate_logo');
        $fileNameLogo = uniqid() . '_' . $fileLogo->getClientOriginalName();
        $fileLogo->move('images/categories/logos', $fileNameLogo);
        $fileImage = $request->file('cate_image');
        $fileNameImage = uniqid() . '_' . $fileImage->getClientOriginalName();
        $fileImage->move('images/categories/images', $fileNameImage);
        Category::create([
            'cate_name' => $request->input('cate_name'),
            'cate_desc' => $request->input('cate_desc'),
            'cate_logo' => $fileNameLogo,
            'cate_image' => $fileNameImage,
            'parent_id' => $request->input('parent_id'),
        ]);

        return redirect()->route('admin.category.index')->with('add_success', trans('admin.message.add_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cateId)
    {
        $categories = Category::all();
        $cate = Category::findOrFail($cateId);

        return view('category.show', compact('cate', 'categories'));
    }

    public function filterProductCategory($search)
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

        $fileLogo = $request->file('cate_logo');
        $fileNameLogo = uniqid() . '_' . $fileLogo->getClientOriginalName();
        $fileLogo->move('images/categories/logos', $fileNameLogo);
        $fileImage = $request->file('cate_image');
        $fileNameImage = uniqid() . '_' . $fileImage->getClientOriginalName();
        $fileImage->move('images/categories/images', $fileNameImage);
        
        $cate->cate_name = $request->input('cate_name');
        $cate->cate_desc = $request->input('cate_desc');
        $cate->cate_image = $fileNameImage;
        $cate->cate_logo = $fileNameLogo;
        $cate->parent_id = $request->input('parent_id');
        $cate->save();

        return redirect()->route('admin.category.index')->with('update_success', trans('admin.message.update_success'));
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

        return redirect()->route('admin.category.index')->with('del_success', trans('admin.message.del_success'));
    }
}
