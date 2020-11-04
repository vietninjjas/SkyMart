@extends('layouts.admin')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>@lang('admin.categories.cate_manage')</h3>
        </div>

       
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>@lang('admin.categories.edit')</h2>
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
              <form action="{{ route('admin.category.update', $cate->cate_id) }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                @method('put')
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">@lang('admin.categories.cate_name') <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" name="cate_name" class="form-control" value="{{ $cate->cate_name }}">
                  </div>
                </div>
                <div class="item form-group">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">@lang('admin.categories.cate_desc')</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="middle-name" class="form-control" type="text" name="cate_desc" value="{{ $cate->cate_desc }}">
                  </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.categories.cate_image')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="file" id="last-name" required="required" name="cate_logo" class="form-control" value="{{ $cate->cate_logo }}">
                    </div>
                </div>
                <div class="item form-group text-center justify-content-center">
                    @if ($cate->cate_logo == null)
                        <img class="img-thumbnail" style="width: 100px; height:100px;" src="https://logos.textgiraffe.com/logos/logo-name/Cate-designstyle-smoothie-m.png" alt="">
                    @else 
                        <img class="img-thumbnail" style="width: 100px; height:100px;" src="images/categories/{{ $cate->cate_logo }}" alt="">
                    @endif
                </div>
                <div class="item form-group">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">@lang('admin.categories.parent')</label>
                  <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="parent_id">
                        <option value="">___</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->cate_id }}">{{ $category->cate_name }}</option>
                        @endforeach
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