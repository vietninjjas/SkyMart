@extends('layouts.app')
@section('content')

    <div class="pro-slider">
        <div class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cf.shopee.vn/file/902e9ba76fc65679ded34aa719f1f68e" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cf.shopee.vn/file/cdf560e62afe43bd10a89a5e87b6a6db" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cf.shopee.vn/file/ec5f39107c7a791e51ecbc3be225b836" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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
                                    $(document).ready(function(){
                                      $(".cate-h").click(function(){
                                        $(".cate-a").toggle();
                                      });
                                    });
                                    </script>
                                <ul class="cate-pro-item">
                                    @foreach ($categories as $category)
                                        @if ($category->parent_id == null)
                                            <li style="cursor: pointer" class="cate-pro" >{{ $category->cate_name }}<span>({{ $category->children->count() }})</span><i class="fas fa-angle-down ml-2"></i>
                                                <ul class="cate-s">
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

                        <div class="pro-cate">
                            <div class="pro-title">
                                <h4>Đánh giá</h4>
                            </div>
                            <ul class="pro-star">
                                <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i> <span>(Từ 5 sao)</span></li>
                                <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="far fa-star"></i> <span>(Từ 4 sao)</span></li>
                                <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i> <span>(Từ 3 sao)</span></li>
                            </ul>
                        </div>
                        <div class="pro-cate">
                            <div class="pro-title">
                                <h4>Khoảng giá</h4>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <input type="text" class="slide-input slide-from">
                                <span class="pro-to"> đến</span>
                                <input type="text" class="slide-input slide-to">
                            </div>
                            <button type="button" class="btn btn-default btn-block">Ok</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 box-pro-2">
                    <div class="pro-box-right">
                        <div class="filter-list-box">
                            <h1>{{ $cate->cate_name }}</h1>
                            <h4>{{$cate->products->count()}} kết quả</h4>
                            <div class="option-box-wrap">
                                <div class="option-box">
                                    <div class="sort-box-holder">
                                        <div class="btn-group pull-right search-right-box">
                                            <form action="" class="category-search-frm">
                                                <input type="text" name="" id=""
                                                    placeholder="Tìm trong {{$cate->cate_name}} ...">
                                                <input type="hidden" value="pro_search">
                                                <button>@lang('main.search')</button>
                                            </form>
                                        </div>
                                        <div class="btn-group pull-left sort-box">
                                            <span>Ưu tiên xem: </span>
                                            <ul class="sort-list">
                                                <li><a href="">Hàng mới</a></li>
                                                <li><a href="">Bán chạy</a></li>
                                                <li><a href="">Giảm giá nhiều</a></li>
                                                <li><a href="">Giá tăng dần</a></li>
                                                <li><a href="">Giá giảm dần</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="product-box-list">
                        <div class="row">
                            @foreach($cate->products as $pro)
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
                                    <p class="title"><a style="color: rgb(73, 72, 72)" href="{{ route('product.show', $pro->pro_id) }}">{{ $pro->pro_name }}</a></p>
                                    <h5 class="price">{{ number_format($pro->pro_new_price) }} đ <span class="original deal">{{ number_format($pro->pro_old_price) }} đ</span></h5>
                                    <button class=""><a href="{{ route('product.show', $pro->pro_id) }}">Xem ngay</a></button>
                                </div>
                            </div>
                            
                            @endforeach
                        </div>
                        <div>
                            <div class="pagination">
                                <span><div class="index">1</div><div class="index">2</div><div class="index">3</div><div class="index">4</div><div class="index">5</div></span>
                                <svg viewBox="0 0 100 100">
                                  <path
                                        d="m 7.1428558,49.999998 c -1e-7,-23.669348 19.1877962,-42.8571447 42.8571442,-42.8571446 23.669347,0 42.857144,19.1877966 42.857144,42.8571446" />
                                </svg>
                                <svg viewBox="0 0 100 100">
                                  <path
                                        d="m 7.1428558,49.999998 c -1e-7,23.669347 19.1877962,42.857144 42.8571442,42.857144 23.669347,0 42.857144,-19.187797 42.857144,-42.857144" />
                                </svg>
                                </div>
                        </div>
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
        $(document).ready(function(){
            $("li.cate-pro").click(function(){
                $("li.cate-pro").find("ul.cate-s").hide(500);
                if($(this).hasClass("cate-e")){
                    $(this).find("ul.cate-s").hide(500);
                    $(this).removeClass("cate-e")
                }else{
                    $(this).find("ul.cate-s").show(500);
                    $("li.cate-pro").removeClass("cate-e");
                    $(this).addClass("cate-e");
                }
            })
            
        })
    </script>
@endsection
