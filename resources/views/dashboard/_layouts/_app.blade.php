<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include('dashboard._layouts._head')

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    @include('dashboard._layouts._nav')

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    @include('dashboard._layouts._side')
    <div class="app-content content">
        <div class="content-wrapper">
            {{-- <div class="content-wrapper-before"></div> --}}
            <div class="content-header row" style="margin-top: 25px">
            </div>
            <div class="content-body">
              @yield('content')
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @extends('dashboard._layouts._noty')
    @include('dashboard._layouts._footer')

</body>

</html>
