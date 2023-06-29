<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('page_title')</title>
    <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">
    
</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('admin_assets/images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li >
                            <a href="{{url('admin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li >
                            <a href="{{url('admin/category')}}">
                                <i class="fas fa-list"></i>Users</a>
                        </li>
                        <!-- <li >
                            <a href="{{url('admin/coupon')}}">
                                <i class="fas fa-tag"></i>Coupons</a>
                        </li>
                        <li class="@yield('size_select')">
                            <a href="{{url('admin/size')}}">
                            <i class="fas fa-window-maximize"></i>Size</a>
                        </li>
                        <li class="@yield('color_select')">
                            <a href="{{url('admin/color')}}">
                            <i class="fas fa-paint-brush"></i>Color</a>
                        </li>
                        <li class="@yield('product_select')">
                            <a href="{{url('admin/product')}}">
                            <i class="fab fa-product-hunt"></i>Product</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin_assets/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="@yield('dashboard_select')">
                            <a href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                    @role('super.admin')
                        <li class="@yield('manage_user_select')">
                            <a href="{{route('manage_user.index')}}">
                                <i class="fas fa-list"></i>manage Users</a>
                        </li>
                    @endrole   
                    @role('super.admin,admin')
                        <li class="@yield('book_select')">
                            <a href="{{route('book.index')}}">
                                <i class="fas fa-list"></i>Book Upload</a>
                        </li>
                    @endrole   
                     
                        <!-- <li class="@yield('coupon_select')">
                            <a href="{{url('admin/coupon')}}">
                            <i class="fas fa-tag"></i>Coupons</a>
                        </li>
                        <li class="@yield('size_select')">
                            <a href="{{url('admin/size')}}">
                            <i class="fas fa-window-maximize"></i>Size</a>
                        </li>
                        <li class="@yield('color_select')">
                            <a href="{{url('admin/color')}}">
                            <i class="fas fa-paint-brush"></i>Color</a>
                        </li>
                        <li class="@yield('product_select')">
                            <a href="{{url('admin/product')}}">
                            <i class="fab fa-product-hunt"></i>Product</a>
                        </li>
                    </ul> -->
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">

                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <!-- Credit : {{Auth::user()->token_balance}} -->
                                        <div class="content">
                                            <!-- Credit : {{Auth::user()->token_balance}} -->
                                            <a class="js-acc-btn" href="#">  Credit : {{Auth::user()->token_balance}} {{Auth::user()->getRoles()[0]->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <!-- <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('admin_assets/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">admin</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div> -->
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                <a class="dropdown-item" data-toggle="modal" onclick="credtipopup()" data-target="#addCreditModal" href="#"><i class="zmdi zmdi-balance-wallet"></i>
 Add Credits</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('profile.edit',auth()->user()->name)}}">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{route('logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    @section('container')
                    @show
                       
                    </div>
                </div>
            </div>
            @role('super.admin')
                        @include('stripe.stripe')
                        @endrole
            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
            <script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
            <script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
            <script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
            <script src="{{asset('admin_assets/vendor/wow/wow.min.js')}}"></script>
            <script src="{{asset('admin_assets/js/main.js')}}"></script>
            @role('super.admin')
                        @include('stripe.stripe_js')
                        @endrole
             @section('js')
                    @show


</body>

</html>
<!-- end document-->