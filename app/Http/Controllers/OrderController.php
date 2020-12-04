<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Order;
use App\Checkout;
use App\Events\NotificationEvent;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\User;

class OrderController extends Controller
{
    protected $notification;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(
        SendNotification $notification
    ){
        $this->notification = $notification;
    }

    public function index()
    {
        $orders = Order::with('checkouts')->latest()->get(); 

        return view('order.view', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('cart.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert order
        if($request->hasFile('bill_image')){
            $file = $request->file('bill_image');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->move('images/cart', $fileName);
            $order = new Order;
            $order ->user_id = Auth::user()->user_id;
            $order ->order_name = $request->input('order_name');
            $order ->order_phone = $request->input('order_phone');
            $order ->order_city = $request->input('order_city');
            $order ->order_district = $request->input('order_district');
            $order ->order_ward = $request->input('order_ward');
            $order ->order_address = $request->input('order_address');
            $order ->ship_method = $request->input('ship_method');
            $order ->pay_method = $request->input('pay_method');
            $order->order_total = Cart::subTotal();
            $order->order_qty = Cart::count();
            $order->bill_image = $fileName;
            $order->save();
        } else {
            $order = new Order;
            $order ->user_id = Auth::user()->user_id;
            $order ->order_name = $request->input('order_name');
            $order ->order_phone = $request->input('order_phone');
            $order ->order_city = $request->input('order_city');
            $order ->order_district = $request->input('order_district');
            $order ->order_ward = $request->input('order_ward');
            $order ->order_address = $request->input('order_address');
            $order ->ship_method = $request->input('ship_method');
            $order ->pay_method = $request->input('pay_method');
            $order->order_total = (string)Cart::subTotal();
            $order->order_qty = Cart::count();
            $order->save();
        }
        $order_id = $order->order_id;

        //insert checkout
        foreach(Cart::content() as $check){
            Checkout::create([
                'order_id' => $order_id,
                'pro_id' => $check->id,
                'quantity' => $check->qty,
                'total_price' => $check->price * $check->qty,
            ]);
            $pro_quantity = Product::find($check->id)->quantity;
            Product::where('pro_id', $check->id)->update(['quantity' => $pro_quantity - $check->qty]);
        }
        Cart::destroy();
        $data = [
            'title' => trans('admin.notification.title') . ' #' . $order->order_id,
            'content' => trans('admin.notification.content'),
        ];
        $this->notification->sendToAdmin($data);

        return view('cart.complete_order');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id); 

        return view('order.detail', compact('order'));
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
        $order = Order::findOrFail($id);
        $order->order_status = $request->input('order_status');
        $order->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function history($id)
    {
        $history = User::findOrFail($id);

        return view('order.history', compact('history'));
    }

    public function cancel($id){
        $order = Order::findOrFail($id);
        $order->order_status = 4;
        $order->save();

        return redirect()->back();
    }

    public function historyDetail($id)
    {
        $order = Order::findOrFail($id);

        return view('order.history-detail', compact('order'));
    }
}
