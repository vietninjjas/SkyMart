<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Review;
use App\Product;
use App\Charts\OrderChart;
use App\Order;
use Carbon\Carbon;
use App\Category;
use App\Charts\TopProductChart;
use App\Charts\CategoryChart;
use App\Charts\OrderStatusChart;

class DashboardController extends Controller
{
    public function index(){
        $user_total = User::where('role', 0)->count();
        $admin_total = User::where('role', 1)->count();
        $user_male = User::where('gender', 1)->count();
        $user_female = User::where('gender', 0)->count();
        $user_buy = User::all();
        $review_total = Review::all()->count();
        // order chart
        $currentYear = Carbon::now()->year;
        $orderChart = new OrderChart;
        $orderChart->labels([
            trans('admin.chart.jan'),
            trans('admin.chart.feb'),
            trans('admin.chart.mar'),
            trans('admin.chart.apr'),
            trans('admin.chart.may'),
            trans('admin.chart.jun'),
            trans('admin.chart.jul'),
            trans('admin.chart.aug'),
            trans('admin.chart.sep'),
            trans('admin.chart.oct'),
            trans('admin.chart.nov'),
            trans('admin.chart.dec'),
        ]);
        $orderChart->dataset(trans('admin.chart.order_chart'), 'line', collect([
            Order::whereBetween('created_at', [$currentYear.'-1-1 00:00:00', $currentYear.'-1-31 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-2-1 00:00:00', $currentYear.'-2-30 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-3-1 00:00:00', $currentYear.'-3-31 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-4-1 00:00:00', $currentYear.'-4-30 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-5-1 00:00:00', $currentYear.'-5-31 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-6-1 00:00:00', $currentYear.'-6-30 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-7-1 00:00:00', $currentYear.'-7-31 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-8-1 00:00:00', $currentYear.'-8-31 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-9-1 00:00:00', $currentYear.'-9-30 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-10-1 00:00:00', $currentYear.'-10-31 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-11-1 00:00:00', $currentYear.'-11-30 23:59:59'])->count(),
            Order::whereBetween('created_at', [$currentYear.'-12-1 00:00:00', $currentYear.'-12-31 23:59:59'])->count(),
        ]))->backgroundColor('Gray81');

        // best product
        $bestProducts = Product::orderBy('view', 'DESC')->limit(5)->get();

        //product follow price
        $prices = Product::orderBy('pro_new_price', 'DESC')->limit(5)->get();

        // categories chart
        $categories = Category::where('parent_id', null)->get();
        $cateLabel = [];
        $cateData = [];
        foreach($categories as $cate){
            $cateLabel[] = $cate->cate_name;
            $cateData[] = $cate->children->count();
        }
        $cateChart = new CategoryChart;
        $cateChart->labels($cateLabel);
        $cateChart->dataset(trans('admin.chart.category_con'), 'line', collect($cateData));

        // order status chart
        $orderSttChart = new OrderStatusChart;
        $orderSttChart->labels([
            trans('admin.orders.order_status.wait'),
            trans('admin.orders.order_status.shippingNotPay'),
            trans('admin.orders.order_status.shippingPaid'),
            trans('admin.orders.order_status.complete'),
            trans('admin.orders.order_status.cancelled'),
        ]);
        $orderSttChart->dataset(trans('admin.chart.order_status_total'), 'bar', collect([
            Order::where('order_status', 0)->count(),
            Order::where('order_status', 1)->count(),
            Order::where('order_status', 2)->count(),
            Order::where('order_status', 3)->count(),
            Order::where('order_status', 4)->count(),
        ]));

        return view('admin', compact(
            'user_total',
            'admin_total',
            'user_male',
            'user_female',
            'review_total',
            'user_buy',
            'orderChart',
            'bestProducts',
            'prices',
            'cateChart',
            'orderSttChart'
        ));

    }
}
