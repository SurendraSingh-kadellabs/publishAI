<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar row">
    <div class="d-inline">
        <ul class="navbar-nav col">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
        </ul>
    </div>
    <div class="col ">
        <!-- <div class="row"> -->
        <h3 class="text-center fs-18" style="color:#044BA9;margin-bottom:0px;font-family: 'Montserrat', sans-serif !important;"> {{-- Company()->name --}} </h3>
        <h6 class="text-center fs-12" style="color:#3B3B3B;font-size:14px;"> Powered by <span style="color:#DB1010" class="fs-12"> MedHealth </span> </h6>
    </div>
    <!-- </div> -->
    <div>
        <ul class="navbar-nav navbar-right float-right col">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->first_name }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('profile.edit',auth()->user()->name)}}" class="dropdown-item has-icon">
                        <i class="fa-regular fa-user"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap');

    .h6 {
        font-family: 'Montserrat', sans-serif !important;
    }

    .h3 {
        font-family: 'Montserrat', sans-serif !important;
    }


    @media only screen and (max-width: 760px) {
        .fs-14{
            font-size: 14px;
        }

        .fs-18{
            font-size: 18px;
        }

        .fs-12{
            font-size:12px;
        }
    }
</style>