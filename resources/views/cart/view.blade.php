@extends('layouts.app')
@section('title', trans('main.cart.cart'))
@section('content')

<div class="container">
    <div class="sp-cart mt-5">
     <div class="row">
       <div class="col-9">
         <div class="cart-right">
           <div class="cart-title">Giỏ hàng của bạn</div>
           <div class="cart-content">
             <div class="cart-main">
               <div class="row ">
               
                 <div class="col-2">
                   <div class="cart-p-img">
                     <img src="https://salt.tikicdn.com/cache/200x200/ts/product/c6/f5/be/130b014ac2b723933747c8a1617782ed.png" alt="">
                   </div>
                 </div>
                 <div class="col-6">
                   <div class="cart-p-name">
                     <a href="">Trà Mầm Ngũ Cốc X5 (500gr): Giảm Cân- Tiêu Mỡ- Ngủ Ngon- Đẹp Da- Ngăn Ngừa Tiểu Đường- Ăn Ngon- Hết Táo Bón- Sáng Mắt- Lợi Sữa- Mát Sữa</a><br>
                   </div>
                   
                   <div>
                     <a href="" class="text-danger">Xóa</a> 
                   </div>
                 </div>
                 <div class="col-2">
                   <div class="cart-p-price">
                     <p>149.000đ</p>
                     <span>200.000đ</span><per>26%</per>
                   </div>
                 </div>
                 <div class="col-2">
                   <div class="cart-qty">
                     <span class="qty-decrease ">-</span>
                     <input type="number" class="qty-input" value="1  ">
                     <span class="qty-increase ">+</span>
                   </div>
                 </div>
               </div>
             </div>
             <div class="cart-main">
               <div class="row ">
               
                 <div class="col-2">
                   <div class="cart-p-img">
                     <img src="https://salt.tikicdn.com/cache/200x200/ts/product/c6/f5/be/130b014ac2b723933747c8a1617782ed.png" alt="">
                   </div>
                 </div>
                 <div class="col-6">
                   <div class="cart-p-name">
                     <a href="">Trà Mầm Ngũ Cốc X5 (500gr): Giảm Cân- Tiêu Mỡ- Ngủ Ngon- Đẹp Da- Ngăn Ngừa Tiểu Đường- Ăn Ngon- Hết Táo Bón- Sáng Mắt- Lợi Sữa- Mát Sữa</a><br>
                   </div>
                   
                   <div>
                     <a href="" class="text-danger">Xóa</a> 
                   </div>
                 </div>
                 <div class="col-2">
                   <div class="cart-p-price">
                     <p>149.000đ</p>
                     <span>200.000đ</span><per>26%</per>
                   </div>
                 </div>
                 <div class="col-2">
                   <div class="cart-qty">
                     <span class="qty-decrease ">-</span>
                     <input type="number" class="qty-input" value="1  ">
                     <span class="qty-increase ">+</span>
                   </div>
                 </div>
               </div>
             </div>
             
           </div>
         </div>
       </div>
       <div class="col-3">
        <div class="cart-total">
          
          <div class="prices">
           <div class="cart-title">Tổng tiền</div>
            <div class="prices__items">
              <span class="prices__text">Tạm tính</span>
             <span>2.831.000đ</span>
             </div>
             <div class="prices__items">
               <span class="prices__text">Phí giao hàng</span>
              <span>30.000đ</span>
              </div>
            
            <p class="prices__total">
              <span class="prices__text">Thành tiền</span>
              <span class="prices__value prices__value--final">2.831.000 đ
                <i>(Đã bao gồm VAT nếu có)</i>
              </span>
            </p>
          </div>
        </div>
       </div>
     </div>
     <button type="button" class="cart__submit"><a href="">Tiến hành đặt hàng</a></button>
    </div>
    
  </div>







    <div class="small-container cart-page">
        <div class="container">
            <table>
                <tr>
                    <th>@lang('main.cart.pro_desc')</th>
                    <th>@lang('main.cart.quantity')</th>
                    <th>@lang('main.cart.total_item')</th>
                </tr>
                @foreach (Cart::content() as $item)
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/products/{{ $item->options->image }}" alt="">
                                <div>
                                    <p>{{ $item->name }}</p>
                                    <small>@lang('main.cart.price'): {{ number_format($item->price) }}đ</small>
                                    <br>
                                    <a href="{{ route('deleteCart', $item->rowId) }}">@lang('admin.action.delete')</a>
                                </div>
                            </div>

                        </td>
                        <td>
                            <form action="{{ route('updateCart', $item->rowId) }}" method="post">
                                @csrf
                                <input name="update_qty" type="number" value="{{ $item->qty }}" min="1">
                                <button type="submit" class="btn">@lang('admin.action.edit')</button>
                            </form>
                        </td>
                        <td>{{ $item->price * $item->qty }}đ</td>
                    </tr>
                @endforeach
            </table>


            <div class="total-price">
                <table>
                    <tr>
                        <td>@lang('main.cart.total_price')</td>
                        <td>{{ Cart::subTotal() }}đ</td>
                    </tr>
                </table>
                <div class="btn-more text-center mt-3 mb-3">
                    <a href="{{ route('order.create') }}">@lang('main.cart.order')</a>
                </div>
            </div>
        </div>


    </div>
@endsection
