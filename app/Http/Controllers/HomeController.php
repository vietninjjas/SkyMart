<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
use App\Deal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::all();
        $products = Product::All();
        $proCount =1;
        $cateCount =1;
        $deals = Deal::all();
        $categories = Category::with('products')->get();
        $topSales = Product::where('pro_sale', 1)->orderBy('updated_at', 'desc')->get();
        $hots = Product::orderBy('view', 'desc')->get();
        
        return view('home', compact(
            'banners',
            'categories',
            'products',
            'proCount',
            'topSales',
            'hots',
            'deals',
            'cateCount'
        ));
    }

    public function search(Request $request){
        $cate = Category::all();
        $key = $request->get('key');
        $resultFind = Product::where('pro_name', 'like', '%'.$key.'%')->orWhere('cate_id', 'like', '%'.$key.'%')->orWhere('pro_old_price', '=', "$key")->get();
        return view('user.search', array('key' => $key, 'resultFind' => $resultFind, 'cate' => $cate));
    }
}
