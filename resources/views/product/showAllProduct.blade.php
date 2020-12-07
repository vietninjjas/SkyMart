@extends('layouts.app')
@section('title', 'Sky Mart')
@section('content')

    <div class="pro-slider">
        <div class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/bannerForsearch.png" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/bannerForsearch.png" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/bannerForsearch.png" class="d-block w-100"
                            alt="...">
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
                                <script>
                                    $(document).ready(function() {
                                        $(".cate-h").click(function() {
                                            $(".cate-a").toggle();
                                        });
                                    });

                                </script>
                                <ul class="cate-pro-item">
                                    @foreach ($categories as $category)
                                        @if ($category->parent_id == null)
                                            <li style="cursor: pointer" class="cate-pro">
                                                {{ $category->cate_name }}<span>({{ $category->children->count() }})</span><i
                                                    class="fas fa-angle-down ml-2"></i>
                                                <ul class="cate-s">
                                                    @foreach ($category->children as $c)
                                                        <li><a
                                                                href="{{ route('category.show', $c->cate_id) }}">-{{ $c->cate_name }}<span>({{ $c->products->count() }})</span></a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <form action="{{ route('product.showAll') }}" method="GET">
                        <div class="pro-cate">
                            <div class="pro-title">
                                <h4>@lang('main.product.pro_about')</h4>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <input name="min_pri" type="text" class="slide-input slide-from">
                                <span class="pro-to"><i class="fa fa-arrow-circle-right"></i></span>
                                <input name="max_pri" type="text" class="slide-input slide-to">
                            </div>
                            <button type="submit" class="btn btn-default btn-block">Ok</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9 box-pro-2">
                    <div class="pro-box-right">
                        <div class="filter-list-box">
                            <h1></h1>
                            <h4> @lang('main.product.all')</h4>
                            <div class="option-box-wrap">
                                <div class="option-box">
                                    <div class="sort-box-holder">
                                        <div class="btn-group pull-right search-right-box">
                                            <form action="{{ route('product.showAll') }}" class="category-search-frm">
                                                <input type="text" name="filter">
                                                <button>@lang('main.search')</button>
                                            </form>
                                        </div>
                                        <div class="btn-group pull-left sort-box">
                                            <span>@lang('main.product.priority_view')</span>
                                            <ul class="sort-list">
                                                <li><a
                                                        href="{{ route('product.showAll', 'filter=newest') }}">@lang('main.product.newest')</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('product.showAll', 'filter=viewest') }}">@lang('main.product.viewest')</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('product.showAll', 'filter=saling') }}">@lang('main.product.saling')</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('product.showAll', 'filter=Ascending') }}">@lang('main.product.pri_ascending')</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('product.showAll', 'filter=Decrease') }}">@lang('main.product.pri_decrease')</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="product-box-list">
                        <div class="row">
                            @foreach ($products as $pro)
                                <div class="col-md-3 pro-hov">
                                    <div class="product-top">
                                        <img src="images/products/{{ $pro->pro_image }}" alt="">
                                        <div class="overlay">
                                            <a href="{{ route('product.show', $pro->pro_id) }}" class="btn btn-secondary"
                                                title="Detail">
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
                                    @if ($pro->pro_sale == 1)
                                        <span
                                            class="percent deal">{{ FLOOR(100 - ($pro->pro_new_price / $pro->pro_old_price) * 100) }}%</span>
                                    @endif
                                    <div class="product-bottom text-center">
                                        <div class="ratings">
                                            <div class="empty-stars"></div>
                                            <div class="full-stars" style="width:{{ $pro->reviews->avg('rate') * 20 }}%">
                                            </div>
                                        </div>
                                        <p class="title"><a style="color: rgb(73, 72, 72)"
                                                href="{{ route('product.show', $pro->pro_id) }}">{{ $pro->pro_name }}</a>
                                        </p>
                                        <h5 class="price">{{ number_format($pro->pro_new_price) }} đ <span
                                                class="original deal">{{ number_format($pro->pro_old_price) }} đ</span></h5>
                                        <button class=""><a
                                                href="{{ route('product.show', $pro->pro_id) }}">@lang('admin.notification.content')</a></button>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        {{ $products->links() }}
                        <script>
                            const c = document.querySelector('.pagination')
                            const indexs = Array.from(document.querySelectorAll('.index'))
                            let cur = -1
                            indexs.forEach((index, i) => {
                                index.addEventListener('click', (e) => {
                                    c.className = 'pagination'
                                    void c.offsetWidth; // Reflow
                                    c.classList.add('open')
                                    c.classList.add(`i${i + 1}`)
                                    if (cur > i) {
                                        c.classList.add('flip')
                                    }
                                    cur = i
                                })
                            })

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("li.cate-pro").click(function() {
                $("li.cate-pro").find("ul.cate-s").hide(500);
                if ($(this).hasClass("cate-e")) {
                    $(this).find("ul.cate-s").hide(500);
                    $(this).removeClass("cate-e")
                } else {
                    $(this).find("ul.cate-s").show(500);
                    $("li.cate-pro").removeClass("cate-e");
                    $(this).addClass("cate-e");
                }
            })

        })

    </script>
@endsection
