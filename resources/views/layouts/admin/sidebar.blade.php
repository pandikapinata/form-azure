<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar ">
    <div class="sidebar-img">
        <a class="navbar-brand" href=""><img alt="..." class="navbar-brand-img main-logo" src="{{ URL::asset('/img/logo-ap.png') }}"> 
            <img alt="..." class="navbar-brand-img logo" src="{{ URL::asset('/img/logo.png') }}"></a>
        <ul class="side-menu"> 
            <li>
                <a class="side-menu__item" href="{{ route("supplier.index") }}">
                    <i class="side-menu__icon fas fa-user-circle"></i>
                    <span class="side-menu__label">Supplier</span></i>
                </a>
            </li>
        </ul>
    </div>
</aside>