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
                    <input type="text" id="first-name" name="pro_name" class="form-control ">
                  </div>
                </div>
                <div class="item form-group">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">@lang('admin.products.pro_desc')</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="middle-name" class="form-control" type="text" name="pro_desc">
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
                    <select class="form-control" name="cate_id" id="select">
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
                      <input type="number" id="quantity" name="quantity" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.products.pro_old_price')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="pro_old_price" name="pro_old_price" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('admin.products.pro_new_price')</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="pro_new_price" name="pro_new_price" class="form-control">
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
                    <button id="hihi" type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#hihi").click(function(){
        var first_name = $(this).closest("form").find("#first-name").val();
        var last_name = $(this).closest("form").find("#last-name").val();
        var middle_name = $(this).closest("form").find("#middle-name").val();
        var select = $(this).closest("form").find("#select").val();
        var qty =  $(this).closest("form").find("#quantity").val();
        var pro_old_price =  $(this).closest("form").find("#pro_old_price").val();
        var pro_new_price =  $(this).closest("form").find("#pro_new_price").val();
        var flag = true;
        if(first_name == ''){
          $("#first-name").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
          flag = false
      }else{
        $("#first-name").text()
      }

      if(last_name == ''){
        $("#last-name").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
        flag = false
    }else{
      $("#last-name").text()
    }

      if(middle_name == ''){
        $("#middle-name").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
        flag = false
    }else{
      $("#middle-name").text()
    }

    if(select == ''){
      $("#select").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
      flag = false
    }else{
      $("#select").text()
    }

    if(qty == ''){
      $("#quantity").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
      flag = false
    }else{
      $("#quantity").text()
    }

    if(pro_old_price == ''){
      $("#pro_old_price").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
      flag = false
    }else{
      $("#pro_old_price").text()
    }

    if(pro_new_price == ''){
      $("#pro_new_price").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
      flag = false
    }else{
      $("#pro_new_price").text()
    }

      if (flag == true) {
        alert("ok")
        return true
      }
      return false;
    })
    })
  </script>
@endsection