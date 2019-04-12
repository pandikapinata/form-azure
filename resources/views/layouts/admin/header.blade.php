<nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

        <!-- Brand -->
        <a class="navbar-brand pt-0 d-md-none" href="">
            <img src="{{ URL::asset('/img/logo-ap.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="navbar-nav align-items-center ">
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 mr-md-2 pl-1" data-toggle="dropdown" href="#" role="button">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="{{ URL::asset('/img/avatar.png') }}"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                            <h3 class="text-capitalize text-dark mb-1">Admin</h3>
                        <h6 class="text-overflow m-0">Administrator</h6>
                    </div>
                </div>
            </li>
            <li class="nav-item d-none d-md-flex">
                <div class="dropdown d-none d-md-flex mt-2 ">
                    <a class="nav-link full-screen-link  pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
                </div>
            </li>
        </ul>
    </div>
</nav>