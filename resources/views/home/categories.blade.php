@extends('home.layouts._site')
@section('styles')
    <style>
        .owl-stage-outer {
            padding-bottom: 35px
        }
    </style>
@endsection
@section('content')
    <section class="home">
        <div class="container">
            <div class="row" style="padding-top: 75px; padding-bottom: 75px">
                <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Featured</h3>
                </div>
                <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                    @foreach ($categories as $category)
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('categories/' . $category->img) }}"
                                style="object-fit: cover;">
                            <div class="overlay" style="  padding: 15px 0px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="h4 text-white" href="{{ route('search', ['category_id'=>$category->id]) }}">{{ $category->name }}</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="{{ route('search', ['category_id'=>$category->id]) }}">{{ $category->created_at->diffForHumans() }}</a>
                                </div>
                                <a class=" m-0 text-white" href="{{ route('search', ['category_id'=>$category->id]) }}">Ads Count : {{ $category->ads->count() }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Category News Slider Start -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 py-3">
                            <div class="bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Electronics</h3>
                            </div>
                            <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                                @foreach ($categories->where('name', 'Electronics') as $category)
                                    @foreach ($category->ads as $ad)
                                        <div class="position-relative">
                                            <img class="img-fluid w-100" src="{{ asset('ads/' . $ad->media_url) }}"
                                                style="object-fit: cover;">
                                            <div class="overlay position-relative bg-light" style="  padding: 15px 0px;">
                                                <div class="mb-2" style="font-size: 13px;">
                                                    <a href="">{{ $ad->title }}</a>
                                                    <span class="px-1">/</span>
                                                    <span>{{ $ad->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Sport</h3>
                            </div>
                            <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                                @foreach ($categories->where('name', 'Sport') as $category)
                                    @foreach ($category->ads as $ad)
                                        <div class="position-relative">
                                            <img class="img-fluid w-100" src="{{ asset('ads/' . $ad->media_url) }}"
                                                style="object-fit: cover;">
                                            <div class="overlay position-relative bg-light" style="  padding: 15px 0px;">
                                                <div class="mb-2" style="font-size: 13px;">
                                                    <a href="">{{ $ad->title }}</a>
                                                    <span class="px-1">/</span>
                                                    <span>{{ $ad->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News Slider End -->

        </div>

    </section>
    <!-- Featured News Slider End -->
@endsection
