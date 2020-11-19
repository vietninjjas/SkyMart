<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        $pro_id = $request->input('pro_id');
        $quantity = $request->input('quantity');
        $pro_name = $request->input('pro_name');
        $pro_image = $request->input('pro_image');
        $pro_new_price = $request->input('pro_new_price');

        $data = [
            'id' => $pro_id,
            'qty' => $quantity,
            'name' => $pro_name,
            'price' => $pro_new_price,
            'weight' => '12',
            'options' => [
                'image' => $pro_image,
            ],
        ];
        Cart::add($data);

        return redirect()->back();
    }
}
