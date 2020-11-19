@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-product p-5 mt-5">
            <div class="container-row">
                <div class="product-image">
                    <img class="demo" src="images/products/{{ $product->pro_image }}" alt="">
                    <ul id="haha">
                        <li>
                            <img src="https://salt.tikicdn.com/cache/w444/ts/product/a2/f7/42/6f366d0c02929dddd7d35ed524e1cd1d.jpg"
                                alt="">
                        </li>
                        <li>
                            <img src="https://salt.tikicdn.com/cache/w64/ts/product/12/75/3f/8994524796fb44729c96ec79452090bf.jpg"
                                alt="">
                        </li>
                        <li>
                            <img src="https://salt.tikicdn.com/cache/w64/ts/product/fd/fb/b4/3af806dc8a0ed9c4ee5ed8178504203e.jpg"
                                alt="">
                        </li>
                        <li>
                            <img src="https://salt.tikicdn.com/cache/w64/ts/product/cc/8d/a7/0ab8d3215e13058aa1be5d5beca42427.jpg"
                                alt="">
                        </li>
                        <li>
                            <img src="https://salt.tikicdn.com/cache/w64/ts/product/c6/62/61/75d98645e2313679ee8c1c1b81577c1f.jpg"
                                alt="">
                        </li>
                    </ul>
                </div>
                <!-- end img -->
                <div class="brand">
                    <ul class="top-brand">
                        <li>@lang('main.categories') <a href="">{{ $product->category->cate_name }}</a></li>
                    </ul>
                    <div class="brand-header">
                        <ul>
                            <li><img src="./assets/images/logo_nne.png" alt=""></li>
                            <li>
                                {{ $product->pro_name }}
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                (xem 49 đánh giá)
                            </li>

                        </ul>
                    </div>
                    <div class="brand-content">
                        <div class="left">
                            <div class="price-and-icon">
                                <div class="flash-sale-price">
                                    <span>{{ $product->pro_new_price }} ₫</span>
                                    <span>{{ FLOOR(($product->pro_new_price / $product->pro_old_price) * 100) }}%</span>
                                    <span>{{ $product->pro_old_price }}</span>
                                </div>
                            </div>
                            <div class="inner">
                                Bạn hãy NHẬP ĐỊA CHỈ nhận hàng để được dự báo thời gian & chi phí giao
                                hàng
                                một cách chính xác nhất.
                            </div>
                            <form action="{{ route('addCart') }}" method="post">
                                @csrf
                                <div class="QualityInput__Wrapper">
                                    <p>Số Lượng</p>
                                    <div class="group-input">
                                        <button class="disable">
                                            <img
                                                src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-remove.svg">
                                        </button>
                                        <input type="number" value="1" name="quantity" class="input">
                                        <button>
                                            <img
                                                src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-add.svg">
                                        </button>
                                    </div>
                                    <div class="yellow"><span>Chỉ còn lại {{ $product->quantity }} sản phẩm</span></div>
                                    <input type="hidden" name="pro_id" value="{{ $product->pro_id }}">
                                    <input type="hidden" name="pro_name" value="{{ $product->pro_name }}">
                                    <input type="hidden" name="pro_image" value="{{ $product->pro_image }}">
                                    <input type="hidden" name="pro_new_price" value="{{ $product->pro_new_price }}">
                                    <div class="group-button">
                                        <button type="submit" class="btn btn-add-to-cart">Chọn mua</button>
                                    </div>
                                </div>
                            </form>
                            <div class="coupon">
                                Thường Được Mua Cùng
                                <div class="images">
                                    <a href="">
                                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a2/f7/42/cabedc80ec652b89ea44f031410a4f88.jpg"
                                            alt="">
                                    </a>
                                    <p>+</p>
                                    <a href="">
                                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/a2/f7/42/cabedc80ec652b89ea44f031410a4f88.jpg"
                                            alt="">
                                    </a>
                                    <p>+</p>
                                    <a href="">
                                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/69/44/b7/d0efdcdb7c10ecd69f7e3f33456e2f76.png"
                                            alt="">
                                    </a>
                                </div>
                                <div class="btn-more text-center mt-3 mb-3">
                                    <a href="">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end brand -->
            </div>
        </div>
    </div>

    <!-- end brand -->
    <div class="container">
        <h2>SẢN PHẨM TƯƠNG TỰ</h2>
        <div class="container-product">

            <div class="container-row">
                <div class="custom-slider">
                    @foreach ($products as $pro)
                        @if ($pro->cate_id == $product->cate_id && $pro->pro_id != $product->pro_id)
                            <div class="custom-box">
                                <a href="{{ route('product.show', $pro->pro_id) }}">
                                    <img src="images/products/{{ $pro->pro_image }}" alt="">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <h2>MÔ TẢ SẢN PHẨM</h2>
        <div class="container-product">
            <p>{{ $product->pro_desc }}</p>
        </div>
        <h2>ĐÁNH GIÁ</h2>
        <div class="container-product">
            <!-- end phần nút bấm đánh giá -->
            <div class="review-rating__inner">
                <div class="review-rating__summary">
                    <div class="review-rating__point">4.5</div>
                    <div class="Stars__StyledStars-sc-15olgyg-0 jucQbJ">
                        <div style="width: 100%;">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 32 32">
                                    <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                        d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                    </path>
                                </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    viewBox="0 0 32 32">
                                    <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                        d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                    </path>
                                </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    viewBox="0 0 32 32">
                                    <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                        d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                    </path>
                                </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    viewBox="0 0 32 32">
                                    <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                        d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                    </path>
                                </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    viewBox="0 0 32 32">
                                    <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                        d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                    </path>
                                </svg></span>
                        </div>
                    </div>
                    <div class="review-rating__total">50 nhận xét</div>
                </div>
                <!-- số đánh giá -->
                <div class="review-rating__detail">
                    <div class="review-rating__level">
                        <div class="Stars__StyledStars-sc-15olgyg-0 jucQbJ">
                            <div style="width: 100%;"><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 32 32">
                                        <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                            d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                        </path>
                                    </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 32 32">
                                        <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                            d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                        </path>
                                    </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 32 32">
                                        <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                            d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                        </path>
                                    </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 32 32">
                                        <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                            d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                        </path>
                                    </svg></span><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 32 32">
                                        <path fill="#FDD835" fill-rule="evenodd" stroke="#FFB500" stroke-width="1.5"
                                            d="M16 1.695l-4.204 8.518-9.401 1.366 6.802 6.631-1.605 9.363L16 23.153l8.408 4.42-1.605-9.363 6.802-6.63-9.4-1.367L16 1.695z">
                                        </path>
                                    </svg></span></div>
                        </div>
                        <div class="style__StyledProcessBar-sc-103p4dk-2 KCfxa">
                            <div style="width: 66%;"></div>
                        </div>
                        <div class="review-rating__number">33</div>
                    </div>
                </div>
                <!-- chi tiết số đánh giá -->
            </div>
            <!-- đây là phần số liệu đánh giá -->
            <div class="review-comment__avatar">
                <ul>
                    <li><img src="../assets/images/yua-mikami.jpg" alt=""></li>
                    <li>Yua Mikami</li>
                    <li><i class="fas fa-comments"></i> Đã mua hàng ở SkyMart</li>
                </ul>
                <div class="review-comment-content">
                    hàng chất đấy xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                </div>
                <div class="form-cmt">
                    <form action="">
                        <input type="text" placeholder="nhap binh luan cua ban tai day">
                        <button type="submit">Gui binh luan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
