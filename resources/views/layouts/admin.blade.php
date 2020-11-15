<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('assets/images/favico.ico')}}" type="image/ico" />

  <title>Trang quản trị | </title>
  <base href="{{ asset('') }}">
  <!-- Bootstrap -->
  <link href="{{asset('./assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('./assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('./assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('./assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="{{asset('./assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('./assets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset('./assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset('./assets/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('admin.index')}}" class="site_title">@lang('admin.title')</a>
          </div>

          <div class="clearfix"></div>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Trang chủ <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.index')}}">Dashboard</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-image"></i> Quản lý banner <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.deal.create')}}">Thêm deal mới</a></li>
                    <li><a href="{{ route('admin.deal.index')}}">Liệt kê deal</a></li>
                    <li><a href="{{ route('admin.banner.create')}}">Thêm banner mới</a></li>
                    <li><a href="{{ route('admin.banner.index')}}">Liệt kê banner</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-navicon"></i> @lang('admin.categories.cate_manage') <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.category.create') }}">@lang('admin.categories.create')</a></li>
                    <li><a href="{{ route('admin.category.index') }}">@lang('admin.categories.view')</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-laptop"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.product.create') }}">Thêm sản phẩm</a></li>
                    <li><a href="{{ route('admin.product.index') }}">Liệt kê sản phẩm</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Quản lý đánh giá, bình luận <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="banner.html">Xem đánh giá, bình luận</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-money"></i> Quản lý đơn hàng <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="banner.html">Xem đơn hàng</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Quản lý khách hàng <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.user.index') }}">@lang('admin.user.view')</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="banner.html">Thống kê hoàng hóa</a></li>
                    <li><a href="banner.html">Thống kê đơn hàng</a></li>
                    <li><a href="banner.html">Thống kê khách hàng</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('home') }}"><i class="fa fa-backward"></i> Về trang chủ </a>

                </li>


              </ul>
            </div>

          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
          <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          </a>
        </div>
        <!-- /menu footer buttons -->
      </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
          <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
              <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('./assets/images/img.jpg')}}" alt="">John Doe
              </a>
              <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:;"> Profile</a>
                <a class="dropdown-item" href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
                <a class="dropdown-item" href="javascript:;">Help</a>
                <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
              </div>
            </li>

            <li role="presentation" class="nav-item dropdown open">
              <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-green">6</span>
              </a>
              <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="{{asset('./assets/images/img.jpg')}}" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="{{asset('./assets/images/img.jpg')}}" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="{{asset('./assets/images/img.jpg')}}" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="{{asset('./assets/images/img.jpg')}}" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <div class="text-center">
                    <a class="dropdown-item">
                      <strong>See All Alerts</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    @yield('content')
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="{{asset('./assets/vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('./assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('./assets/vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('./assets/vendors/nprogress/nprogress.js')}}"></script>
  <!-- Chart.js -->
  <script src="{{asset('./assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
  <!-- gauge.js -->
  <script src="{{asset('./assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{asset('./assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('./assets/vendors/iCheck/icheck.min.js')}}"></script>
  <!-- Skycons -->
  <script src="{{asset('./assets/vendors/skycons/skycons.js')}}"></script>
  <!-- Flot -->
  <script src="{{asset('./assets/vendors/Flot/jquery.flot.js')}}"></script>
  <script src="{{asset('./assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('./assets/vendors/Flot/jquery.flot.time.js')}}"></script>
  <script src="{{asset('./assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
  <script src="{{asset('./assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
  <!-- Flot plugins -->
  <script src="{{asset('./assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
  <script src="{{asset('./assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
  <script src="{{asset('./assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
  <!-- DateJS -->
  <script src="{{asset('./assets/vendors/DateJS/build/date.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('./assets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
  <script src="{{asset('./assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{asset('./assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{asset('./assets/vendors/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('./assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{asset('./assets/build/js/custom.min.js')}}"></script>

</body>

</html>