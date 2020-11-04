@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>@lang('admin.banners.ban_manage')</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="{{ trans('admin.action.search') }}">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách danh mục sản phẩm</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div> --}}
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>@lang('admin.banners.id')</th>
                                                <th>@lang('admin.banners.ban_image')</th>
                                                <th>@lang('admin.banners.ban_name')</th>
                                                <th colspan="2" class="text-center">
                                                    <a href="{{ route('admin.banner.create') }}" class="btn btn-outline-success">@lang('admin.action.create')</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($banners as $banner)
                                            <tr>
                                                <td>{{ $banner->ban_id }}</td>
                                                <td>
                                                    @if ($banner->ban_image == null)
                                                    <img class="img-thumbnail" style="width: 100px; height:100px;" src="https://logos.textgiraffe.com/logos/logo-name/Cate-designstyle-smoothie-m.png" alt="">
                                                    @else
                                                    <img class="img-thumbnail" style="width: 100px; height:100px;" src="images/banners/{{ $banner->ban_image }}" alt="">
                                                    @endif
                                                </td>
                                                <td>{{ $banner->ban_name }}</td>
                                                <td class="text-center"><a href="{{ route('admin.banner.edit', $banner->ban_id) }}" class="btn btn-outline-info btn-xs"><i class="fa fa-pencil"></i> @lang('admin.action.edit') </a></td>
                                                <td class="text-center">
                                                    <form action="{{ route('admin.banner.destroy', $banner->ban_id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o"></i> @lang('admin.action.delete') </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection