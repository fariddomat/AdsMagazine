@extends('home.layouts._site')

@section('content')

<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="headline" style="padding-top:25px ">
                    <div class="nav" id="headline-nav">
                        <a class="left carousel-control" role="button" data-slide="prev">
                            <span class="ion-ios-arrow-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" role="button" data-slide="next">
                            <span class="ion-ios-arrow-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel" id="headline">
                        @foreach ($ads as $ad)
                        <div class="text-truncate">
                            <a href="#">
                                <div class="badge">New!</div> {{ $ad->user->name }}
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="owl-carousel owl-theme slide owl-carousel-1 tranding-carousel" id="featured">
                  @foreach ($ads as $ad)
                  <div class="item">
                    <article class="featured">
                        <div class="overlay"></div>
                        <figure>
                            <img src="{{ asset('storage/ads/'. $ad->media_url ) }}" alt="Sample Article">
                        </figure>
                        <div class="details">
                            <div class="category"><a >{{ $ad->category->name }}</a></div>
                            <h1><a href="{{ route('show', $ad->id) }}">{{$ad->title}}</a></h1>
                            <div class="time">{{ $ad->created_at->diffForHumans() }}</div>
                        </div>
                    </article>
                </div>
                  @endforeach

                </div>
                <div class="line">
                    <div>Top View ADS</div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="row">
                            @foreach ($adsWithMostViews as $ad)
                            <article class="article col-md-6">
                                <div class="inner">
                                    <figure>
                                        <a href="{{ route('show', $ad->id) }}">
                                            <img src="{{ asset('storage/ads/'. $ad->media_url ) }}"
                                                alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">{{ $ad->created_at->diffForHumans() }}</div>
                                            <div class="category"><a >{{ $ad->category->name }}</a></div>
                                        </div>
                                        <h2><a href="{{ route('show', $ad->id) }}">{{$ad->title}}</a></h2>
                                        <p>{{$ad->description}}</p>
                                        <footer>

                                            <a class="btn btn-primary more" href="{{ route('show', $ad->id) }}">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>
                    </div>

                </div>
                <div class="banner">
                    <a href="#">
                        <img src="{{ asset('home/images/ads.png') }}" alt="Sample Article">
                    </a>
                </div>
                <div class="line transparent little"></div>


            </div>
            <div class="col-xs-6 col-md-4 sidebar" id="sidebar">
                <div class="sidebar-title for-tablet">Sidebar</div>
                <aside>
                    <div class="aside-body">
                        <div class="featured-author">
                            <div class="featured-author-inner">
                                <div class="featured-author-cover"
                                    style="background-image: url({{ asset('storage/users/'.$userWithMostAdViews->img) }});">
                                    <div class="badges">
                                        <div class="badge-item"><i class="ion-star"></i> Top Advisior</div>
                                    </div>
                                    <div class="featured-author-center">
                                        <figure class="featured-author-picture">
                                            <img src="{{ asset('storage/users/'.$userWithMostAdViews->img) }}" alt="Sample Article">
                                        </figure>
                                        <div class="featured-author-info">
                                            <h2 class="name">{{ $userWithMostAdViews->name }}</h2>
                                            <div class="desc">{{ $userWithMostAdViews->email }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-author-body">
                                    <div class="featured-author-count">
                                        <div class="item">
                                            <a>
                                                <div class="name">Ads : </div>
                                                <div class="value">{{ $userWithMostAdViews->ads->count() }}</div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ route('search', ['user_id' => $userWithMostAdViews->id]) }}">
                                                <div class="icon">
                                                    <div>More</div>
                                                    <i class="ion-chevron-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="featured-author-quote">
                                        {{ $userWithMostAdViews->description }}
                                    </div>
                                    <div class="featured-author-footer">
                                        <a href="#">See All Advisior</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                <aside>
                    <div class="aside-body">
                        <form class="newsletter">
                            <div class="icon">
                                <i class="ion-ios-email-outline"></i>
                                <h1>Newsletter</h1>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control email" placeholder="Your mail">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                                </div>
                            </div>
                            <p>By subscribing you will receive new articles in your email.</p>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="best-of-the-week">
    <div class="container">
        <h1>
            <div class="text">Best Of The Week</div>
            <div class="carousel-nav" id="best-of-the-week-nav">
                <div class="prev">
                    <i class="ion-ios-arrow-left"></i>
                </div>
                <div class="next">
                    <i class="ion-ios-arrow-right"></i>
                </div>
            </div>
        </h1>
        <div class="owl-carousel owl-theme carousel-1">
           @foreach ($adsWithMostClicks as $ad)
           <article class="article">
            <div class="inner">
                <figure>
                    <a href="single.html">
                        <img src="{{ asset('storage/ads/'.$ad->media_url) }}" alt="Sample Article">
                    </a>
                </figure>
                <div class="padding">
                    <div class="detail">
                        <div class="time">{{ $ad->created_at->diffForHumans() }}</div>
                        <div class="category"><a>{{ $ad->category->name }}</a></div>
                    </div>
                    <h2><a href="single.html">{{ $ad->title }}</a></h2>
                    <p>{{ $ad->description }}</p>
                </div>
            </div>
        </article>
           @endforeach
        </div>
    </div>
</section>
@endsection
