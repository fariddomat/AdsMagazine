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
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            @foreach ($adsWithMostViews as $ad)
                            <article class="article col-md-12">
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
                                    style="background-image: url({{ asset('home/images/news/img15.jpg') }});">
                                    <div class="badges">
                                        <div class="badge-item"><i class="ion-star"></i> Top Advisior</div>
                                    </div>
                                    <div class="featured-author-center">
                                        <figure class="featured-author-picture">
                                            <img src="{{ asset('home/images/img01.jpg') }}" alt="Sample Article">
                                        </figure>
                                        <div class="featured-author-info">
                                            <h2 class="name">John Doe</h2>
                                            <div class="desc">@JohnDoe</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-author-body">
                                    <div class="featured-author-count">
                                        <div class="item">
                                            <a href="#">
                                                <div class="name">Posts</div>
                                                <div class="value">208</div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <div class="name">Stars</div>
                                                <div class="value">3,729</div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <div class="icon">
                                                    <div>More</div>
                                                    <i class="ion-chevron-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="featured-author-quote">
                                        "Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
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
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active">
                            <a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
                                <i class="ion-android-star-outline"></i> Recomended
                            </a>
                        </li>
                        <li>
                            <a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
                                <i class="ion-ios-chatboxes-outline"></i> Comments
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="recomended">
                            <article class="article-fw">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img16.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <div class="detail">
                                            <div class="time">December 31, 2016</div>
                                            <div class="category"><a href="category.html">Sport</a></div>
                                        </div>
                                        <h1><a href="single.html">Donec congue turpis vitae mauris</a></h1>
                                        <p>
                                            Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at
                                            egestas convallis.
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <div class="line"></div>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img05.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Duis aute irure dolor in reprehenderit in
                                                voluptate velit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                            <div class="time">December 22, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img02.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Fusce ullamcorper elit at felis cursus
                                                suscipit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Travel</a></div>
                                            <div class="time">December 21, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img10.jpg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Duis aute irure dolor in reprehenderit in
                                                voluptate velit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Healthy</a></div>
                                            <div class="time">December 20, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane comments" id="comments">
                            <div class="comment-list sm">
                                <div class="item">
                                    <div class="user">
                                        <figure>
                                            <img src="images/img01.jpg" alt="User Picture">
                                        </figure>
                                        <div class="details">
                                            <h5 class="name">Mark Otto</h5>
                                            <div class="time">24 Hours</div>
                                            <div class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="user">
                                        <figure>
                                            <img src="images/img01.jpg" alt="User Picture">
                                        </figure>
                                        <div class="details">
                                            <h5 class="name">Mark Otto</h5>
                                            <div class="time">24 Hours</div>
                                            <div class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="user">
                                        <figure>
                                            <img src="images/img01.jpg" alt="User Picture">
                                        </figure>
                                        <div class="details">
                                            <h5 class="name">Mark Otto</h5>
                                            <div class="time">24 Hours</div>
                                            <div class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </div>
                                        </div>
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
           @foreach ($adsWithMostClicks as $item)
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
