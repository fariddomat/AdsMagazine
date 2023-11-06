@extends('dashboard._layouts._app')

@section('content')
<div class="row" style="">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted success position-absolute p-1">Categories</h5>
                <div>
                    <i class="fa fa-building-o success font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">0</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">Gifts</h5>
                <div>
                    <i class="fa fa-institution info font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">0</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">Users</h5>
                <div>
                    <i class="fa fa-users warning font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">0</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">Orders</h5>
                <div>
                    <i class="fa fa-shopping-cart danger font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">0</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted primary position-absolute p-1">Reports</h5>
                <div>
                    <i class="fa fa-ban primary font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">0</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted gray position-absolute p-1">Coupons</h5>
                <div>
                    <i class="fa fa-tags gray font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">0</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
