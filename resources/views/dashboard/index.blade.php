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
                        <h3 style="padding: 40px 15px;">{{ $categories }}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">Ad Slots</h5>
                <div>
                    <i class="fa fa-institution info font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">{{ $ad_slots }}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">Ads</h5>
                <div>
                    <i class="fa fa-film warning font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">{{ $ads }}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">Users</h5>
                <div>
                    <i class="fa fa-users danger font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">{{ $users }}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted primary position-absolute p-1">Advertiser</h5>
                <div>
                    <i class="fa fa-user primary font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="">
                        <h3 style="padding: 40px 15px;">{{ $advertiser }}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection
