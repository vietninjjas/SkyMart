@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>@lang('admin.products.pro_manage')</h3>
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
              <h2>@lang('admin.products.view')</h2>
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
                    <th>@lang('admin.products.id')</th>
                    <th>@lang('admin.products.pro_name')</th>
                    <th>@lang('admin.categories.cate_name')</th>
                    <th style="width=250px">@lang('admin.products.pro_image')</th>
                    <th>@lang('admin.products.pro_desc')</th>
                    <th>@lang('admin.products.quantity')</th>
                    <th>@lang('admin.products.pro_old_price')</th>
                    <th>@lang('admin.products.pro_new_price')</th>
                    <th>@lang('admin.products.pro_sale')</th>
                    <th colspan="2" class="text-center">
                        <a href="{{ route('admin.product.create') }}" class="btn btn-outline-success">@lang('admin.action.create')</a> 
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $pro)
                  <tr>
                    <td>{{ $pro->pro_id }}</td>
                    <td>{{ $pro->pro_name }}</td>
                    <td>{{ $pro->category->cate_name }}</td>
                    <td>
                        @if ($pro->pro_image == null)
                            <img class="img-thumbnail" style="width: 100px; height:100px;" src="https://hbr.org/resources/images/article_assets/2020/04/Apr20_07_1162572100.jpg" alt="">
                        @else 
                            <img class="img-thumbnail" style="width: 100px; height:100px;" src="images/products/{{ $pro->pro_image }}" alt="">
                        @endif
                    </td>
                    <td >{{ $pro->pro_desc }}</td>
                    <td>{{ $pro->quantity }}</td>
                    <td>{{ $pro->pro_old_price }}</td>
                    <td>{{ $pro->pro_new_price }}</td>
                    <td>@lang('admin.products.' . config('app.sale_status.'.$pro->pro_sale))</td>
                    <td class="text-center"><a href="{{ route('admin.product.edit', $pro->pro_id) }}" class="btn btn-outline-info btn-xs"><i class="fa fa-pencil"></i> @lang('admin.action.edit') </a></td>
                    <td class="text-center">
                      <form action="{{ route('admin.product.destroy', $pro->pro_id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" class="confirmation" onclick="return confirm('Bạn có chắc muốn xóa?');"><i class="fa fa-trash-o"></i> @lang('admin.action.delete') </button>
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
