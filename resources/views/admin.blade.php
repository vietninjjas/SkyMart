@extends('layouts.admin')
@section('title', trans('admin.home'))
@section('content')
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block; width:100%;">
            <div class="tile_count">
                <div class="col-md-2 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> @lang('admin.chart.user_total')</span>
                    <div class="count">{{ $user_total }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> @lang('admin.chart.admin_total')</span>
                    <div class="count">{{ $admin_total }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> @lang('admin.chart.user_male')</span>
                    <div class="count green">{{ $user_male }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> @lang('admin.chart.user_female')</span>
                    <div class="count">{{ $user_female }}</div>
                </div>
                <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> @lang('admin.chart.review_total')</span>
                    <div class="count">{{ $review_total }}</div>
                </div>
            </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="dashboard_graph">
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>@lang('admin.chart.order_chart') </h3>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 ">
                        {!! $orderChart->container() !!}
                        {!! $orderChart->script() !!}
                    </div>
                    <div class="col-md-3 col-sm-3  bg-white">
                        <div class="x_title">
                            <h2>@lang('admin.chart.best_product')</h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 ">
                            @foreach($bestProducts as $best)
                            <div>
                                <p>{{ $best->pro_name, 0, 30 }} <small class="text-danger">({{ $best->view }} @lang('main.product.view')) </small></p>
                                <div style="width:70%">
                                    <div class="progress progress_sm" style="width: 100%;">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $best->view * 0.1 }}"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <br />

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_520">
                    <div class="x_title">
                        <h2>@lang('admin.chart.top_price')</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h4>@lang('admin.chart.pro_price')</h4>
                        @foreach($prices as $pri)
                        <div class="widget_summary">
                            <div class="w_left w_25">
                                <span>{{ substr($pri->pro_name, 0, 8) }}...</span>
                            </div>
                            <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $pri->pro_new_price * 0.000001 }}%;">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="w_right w_20">
                                <span>{{ $pri->pro_new_price / 1000 }}K</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_520">
                    <div class="x_title">
                        <h2>@lang('admin.chart.category')</h2>
                        <div class="clearfix"></div>
                    </div>
                    {!! $cateChart->container() !!}
                    {!! $cateChart->script() !!}
                </div>
            </div>


            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_520">
                    <div class="x_title">
                        <h2>@lang('admin.chart.order_status')</h2>
                        <div class="clearfix"></div>
                        {!! $orderSttChart->container() !!}
                        {!! $orderSttChart->script() !!}
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
