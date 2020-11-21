@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>@lang('admin.products.pro_manage')</h3>
        </div>
    </div>
    <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>@lang('admin.products.create')</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">@lang('admin.products.pro_name') <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" name="pro_name" class="form-control ">
                  </div>
                </div>
                <div class="item form-group">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">@lang('admin.products.pro_desc')</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="ckeditor" class="form-control" type="text" name="pro_desc">
                  </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.products.pro_image')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="file" required="required" id="last-name" name="pro_image" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">@lang('admin.products.category')</label>
                  <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="cate_id" id="">
                        @foreach ($categories as $cate)
                            @if($cate->parent_id != null)
                                <option selected value="{{ $cate->cate_id }}">{{ $cate->cate_name }}</option>
                            @endif
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.products.quantity')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="number" id="last-name" name="quantity" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.products.pro_old_price')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="number" id="last-name" name="pro_old_price" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.products.pro_new_price')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="number" id="last-name" name="pro_new_price" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.products.pro_new_price')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <select class="form-control" name="pro_sale" id="">
                          <option value="0">@lang('admin.products.not_sale')</option>
                          <option value="1">@lang('admin.products.sale')</option>
                      </select>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                  <div class="col-md-6 col-sm-6 offset-md-3">
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection