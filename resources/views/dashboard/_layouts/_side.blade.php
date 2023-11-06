<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true" style="">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard.home') }}">
                    <i class="fa fa-tachometer"></i>
                    <h3 class="brand-text">Dashboard Panel</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" {{ Request::is('dashboard/dashboard') ? 'active' : '' }} ">

                <a href="{{ route('dashboard.home') }}"><i class="ft-home"></i><span class="menu-title"
                        data-i18n="">Dashboard</span>
                </a>
            </li>
            {{-- <li class=" nav-item  {{ Request::is('dashboard/categories*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.categories.index') }}"><i class="fa fa-building-o"></i><span
                        class="menu-title" data-i18n="">Categories</span></a>
            </li>

            <li class=" nav-item  {{ Request::is('dashboard/gifts*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.gifts.index') }}"><i class="fa fa-gift"></i><span class="menu-title"
                        data-i18n="">Gifts</span></a>
            </li>

            <li class=" nav-item  {{ Request::is('dashboard/orders*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.orders.index') }}"><i class="fa fa-shopping-cart"></i><span
                        class="menu-title" data-i18n="">Orders</span></a>
            </li>
            <li class=" nav-item  {{ Request::is('dashboard/myOrder') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.orders.myOrder') }}"><i class="fa fa-shopping-cart"></i><span
                        class="menu-title" data-i18n="">my Orders</span></a>
            </li>

            <li class=" nav-item {{ Request::is('dashboard/coupons*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.coupons.index') }}"><i class="fa fa-tags"></i><span class="menu-title"
                        data-i18n="">Coupons</span></a>
            <li class=" nav-item {{ Request::is('dashboard/reports') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.reports') }}"><i class="fa fa-ban"></i><span class="menu-title"
                        data-i18n="">Reports</span></a>
            </li> --}}
            <li class=" nav-item {{ Request::is('dashboard/users*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.users.index') }}"><i class="ft-users"></i><span class="menu-title"
                        data-i18n="">Users</span></a>
            </li>
        </ul>
    </div><a class="btn btn-primary btn-block btn-glow btn-upgrade-pro mx-1" href="/" target="_blank">Home</a>
    <div class="navigation-background"></div>
</div>
