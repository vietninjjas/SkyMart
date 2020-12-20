<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
use App\Deal;
use App\Review;

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
        $CateParentCount = 1;
        $deals = Deal::all();
        $categories = Category::with('products')->get();
        $topSales = Product::where('pro_sale', 1)->orderBy('updated_at', 'desc')->distinct('cate_id')->get();
        $hots = Product::orderBy('view', 'desc')->paginate(57);

        return view('home', compact(
            'banners',
            'categories',
            'products',
            'proCount',
            'CateParentCount',
            'topSales',
            'hots',
            'deals',
            'cateCount'
        ));
    }

    public function search(Request $request){
        $cate = Category::all();
        $key = $request->get('key');
        $resultFind = Product::where('pro_name', 'like', '%'.$key.'%')->orWhere('cate_id', 'like', '%'.$key.'%')->orWhere('pro_new_price', '=', "$key")->get();
        return view('user.search', array('key' => $key, 'resultFind' => $resultFind, 'cate' => $cate));
    }

    public function filter(Request $request) {
        $cate = Category::all();
        $star = $request->get('star');
        $min = $request->get('min');
        $max = $request->get('max');
        $ketqua = Product::whereBetween('pro_new_price', ["$min", "$max"])->get();

        $ketqua1 = Review::Where('rate', '<', "$star")->get();

        return view('user.filter', array('ketqua' => $ketqua,'ketqua1' => $ketqua1, 'max' => $max, 'cate' => $cate));
    }

    public function contact()
    {
        return view('about');
    }
}
