@extends('home.layouts._site')
@section('styles')
    <style>
        .owl-stage-outer{
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
                    <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                </div>
                <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('home/img/news-300x300-1.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('home/img/news-300x300-2.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('home/img/news-300x300-3.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('home/img/news-300x300-4.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('home/img/news-300x300-5.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Business</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('home/img/news-500x280-1.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('home/img/news-500x280-2.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('home/img/news-500x280-3.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Technology</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('home/img/news-500x280-4.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('home/img/news-500x280-5.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('home/img/news-500x280-6.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
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