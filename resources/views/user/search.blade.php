@extends('layouts.app')
@section('content')

<div class="pro-slider">
    <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/bannerForsearch.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/bannerForsearch.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/bannerForsearch.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="product-page">
        <div class="row">
            <div class="col-lg-3 box-pro-1">
                <div class="box-product-left">
                    <div class="pro-cate">
                        <div class="pro-title">
                            <h4>@lang('main.category')</h4>
                        </div>
                        <div>
                            <ul class="cate-pro-item">
                                @foreach ($cate as $category)
                                @if ($category->parent_id == null)
                                <li><a href="{{ route('category.show', $category->cate_id) }}">{{ $category->cate_name }}<span>({{ $category->children->count() }})</span></a>
                                    <ul>
                                        @foreach ($category->children as $c)
                                        <li><a href="{{ route('category.show', $c->cate_id) }}">-{{ $c->cate_name }}<span>({{ $c->products->count() }})</span></a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 box-pro-2">
                <div class="pro-box-right">
                    <div class="filter-list-box mb-5">
                        @if ($resultFind-> isEmpty())
                        <h2>@lang('main.searches.not_found') <b>"{{ $key }}"</b>.</h2>
                        @else
                        <h1 class="border-bottom pb-5">Có {{$resultFind->count()}} sản phẩm phù hợp với từ khóa "{{$key}}"</h1>
                    </div>

                </div>
                <div class="product-box-list">
                    <div class="row">
                        @foreach($resultFind as $pro)
                        <div class="col-md-3 pro-hov">
                            <div class="product-top">
                                <img src="images/products/{{ $pro->pro_image }}" alt="">
                                <div class="overlay">
                                    <a href="{{ route('product.show', $pro->pro_id) }}" class="btn btn-secondary" title="Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary" title="Add to cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            @if($pro->pro_sale == 1)
                            <span class="percent deal">HOT</span>
                            @endif
                            <div class="product-bottom text-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                                <i class="far fa-star"></i>
                                <p class="title"> {{ $pro->pro_name }}</p>
                                <h5 class="price">{{ number_format($pro->pro_new_price) }} đ <span class="original deal">{{ number_format($pro->pro_old_price) }} đ</span></h5>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection