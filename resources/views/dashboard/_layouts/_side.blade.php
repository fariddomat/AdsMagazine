<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" style="">
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
            @if (Auth::user()->hasRole('superadministrator|administrator|advertiser'))

            <li class=" nav-item  {{ Request::is('dashboard/ads*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.ads.index') }}"><i class="fa fa-film"></i><span class="menu-title"
                        data-i18n="">Ads</span></a>
            </li>

            <li class=" nav-item  {{ Request::is('dashboard/contacts*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.contacts.index') }}"><i class="fa fa-phone"></i><span class="menu-title"
                        data-i18n="">Contacts</span></a>
            </li>
            @endif
            @if (Auth::user()->hasRole('superadministrator|administrator'))
                <li class=" nav-item  {{ Request::is('dashboard/categories*') ? 'active' : '' }} "><a
                        href="{{ route('dashboard.categories.index') }}"><i class="fa fa-building-o"></i><span
                            class="menu-title" data-i18n="">Categories</span></a>
                </li>

                <li class=" nav-item  {{ Request::is('dashboard/adSlots*') ? 'active' : '' }} "><a
                        href="{{ route('dashboard.adSlots.index') }}"><i class="fa fa-building-o"></i><span
                            class="menu-title" data-i18n="">Slots</span></a>
                </li>

                <li class=" nav-item {{ Request::is('dashboard/users*') ? 'active' : '' }} "><a
                        href="{{ route('dashboard.users.index') }}"><i class="ft-users"></i><span class="menu-title"
                            data-i18n="">Users</span></a>
                </li>
            @endif
            @if (Auth::user()->hasRole('superadministrator'))
                <li class=" nav-item  {{ Request::is('dashboard/about*') ? 'active' : '' }} "><a
                        href="{{ route('dashboard.about') }}"><i class="fa fa-info"></i><span class="menu-title"
                            data-i18n="">About</span></a>
                </li>

                <li class=" nav-item  {{ Request::is('dashboard/social*') ? 'active' : '' }} "><a
                        href="{{ route('dashboard.social') }}"><i class="fa fa-share"></i><span class="menu-title"
                            data-i18n="">Social</span></a>
                </li>
            @endif

            <li class=" nav-item {{ Request::is('dashboard/profile*') ? 'active' : '' }} "><a
                    href="{{ route('dashboard.profile.edit') }}"><i class="ft-users"></i><span class="menu-title"
                        data-i18n="">Profile</span></a>
            </li>
        </ul>
    </div><a class="btn btn-primary btn-block btn-glow btn-upgrade-pro mx-1" href="/" target="_blank">Home</a>
    <div class="navigation-background"></div>
</div>
