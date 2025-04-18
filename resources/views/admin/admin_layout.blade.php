<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Home</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('adminlayout/assets/images/favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('adminlayout/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('adminlayout/dist/css/style.min.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
@stack('scripts')
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo"
                                width="25" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text ms-2">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" />
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                    width="31" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-settings me-1 ms-1"></i> Account
                                    Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('login') }}"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10">
                                    <a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                                </div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Lịch làm việc
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.bookingFinalB.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Lịch hẹn tại phòng khám
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.bookingFinalA.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Lịch hẹn khám tại nhà
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html"
                                aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">Widgets</span></a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Phiếu đặt khám
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.bookingCheckB.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Phiếu đặt tại phòng khám
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.bookingCheckA.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Phiếu đặt khám tại nhà
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.customer.index') }}"
                                aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">Quản lí thông tin khách hàng</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.pet.index') }}"
                                aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Quản lý loài thú cưng</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.position.index') }}"
                                aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span
                                    class="hide-menu">Quản lý chức vụ</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.employee.index') }}"
                                aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">Quản lý nhân viên</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Quản lý dịch vụ
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.serviceB.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-emoticon"></i><span class="hide-menu"> Chăm sóc y tế  </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.serviceA.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Chăm sóc thẩm mỹ</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.servicetype.index') }}"
                                aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                    class="hide-menu">Loại dịch vụ</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.format.index') }}"
                                aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                    class="hide-menu">Hình thức</span></a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span
                                    class="hide-menu">Addons </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link"><i
                                            class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-gallery.html" class="sidebar-link"><i
                                            class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-calendar.html" class="sidebar-link"><i
                                            class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-invoice.html" class="sidebar-link"><i
                                            class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-chat.html" class="sidebar-link"><i
                                            class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option
                                        </span></a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                    class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-login.html" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-register.html" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register
                                        </span></a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
    @yield('admin_content')
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('adminlayout/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('adminlayout/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('adminlayout/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('adminlayout/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('adminlayout/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('adminlayout/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('adminlayout/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('adminlayout/dist/js/pages/chart/chart-page-init.js') }}"></script>
</body>

</html>
