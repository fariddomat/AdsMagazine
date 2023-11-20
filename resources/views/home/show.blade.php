@extends('home.layouts._site')

@section('content')
    <section class="single" style="padding-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sidebar" id="sidebar">

                    <aside>
                        <h1 class="aside-title">Recent Ads</h1>
                        <div class="aside-body">
                            @foreach ($ads as $ad1)
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{ asset('storage/ads/' . $ad1->media_url) }}">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="{{ route('show', $ad1->id) }}">{{ $ad1->title }}</a></h1>
                                            <div class="detail">
                                                <div class="category"><a>{{ $ad1->category->name }}</a></div>
                                                <div class="time">{{ $ad1->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
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
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="active">Film</li>
                    </ol>
                    <article class="article main-article">
                        <header>
                            <h1>{{ $ad->title }}</h1>
                            <ul class="details">
                                <li>{{ $ad->created_at->diffForHumans() }}</li>
                                <li><a>{{ $ad->category->name }}</a></li>
                                <li>By <a href="#">J{{ $ad->user->name }}</a></li>
                            </ul>
                        </header>
                        <div class="main">
                            <div class="featured">
                                <figure>
                                    <img src="{{ asset('storage/home/' . $ad->media_url) }}">
                                    <figcaption>Image by pexels.com</figcaption>
                                </figure>
                            </div>

                            <div>{!! $ad->description !!}</div>
                        </div>
                        <footer>
                            <div class="col">
                                <ul class="tags">
                                    <li><a href="#">Clicks {{ $ad->ad_clicks->count() }}</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <a href="#" class="love"><i class="fa fa-eye"></i>
                                    <div>{{ $ad->ad_views->count() }}</div>
                                </a>
                            </div>
                        </footer>
                    </article>
                    <div class="line">
                        <div>Author</div>
                    </div>
                    <div class="author">
                        <figure>
                            <img src="{{ asset('storage/users/' . $ad->user->img) }}">
                        </figure>
                        <div class="details">
                            <h3 class="name">{{ $ad->user->name }}</h3>
                            <div class="job">{{ $ad->user->email }}</div>
                            <div class="job">{{ $ad->user->mobile }}</div>
                            <p>{{ $ad->user->description }}</p>

                        </div>
                    </div>
                    {{-- <div class="line">
                        <div>You May Also Like</div>
                    </div>
                    <div class="row">
                        <article class="article related col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('home/images/news/img03.jpg') }}">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                    <div class="detail">
                                        <div class="category"><a href="category.html">Lifestyle</a></div>
                                        <div class="time">December 26, 2016</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="article related col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('home/images/news/img08.jpg') }}">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                    <div class="detail">
                                        <div class="category"><a href="category.html">Lifestyle</a></div>
                                        <div class="time">December 26, 2016</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div> --}}
                    {{-- <div class="line thin"></div>
                <div class="comments">
                    <h2 class="title">3 Responses <a href="#">Write a Response</a></h2>
                    <div class="comment-list">
                        <div class="item">
                            <div class="user">
                                <figure>
                                    <img src="images/img01.jpg">
                                </figure>
                                <div class="details">
                                    <h5 class="name">Mark Otto</h5>
                                    <div class="time">24 Hours</div>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </div>
                                    <footer>
                                        <a href="#">Reply</a>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="user">
                                <figure>
                                    <img src="images/img01.jpg">
                                </figure>
                                <div class="details">
                                    <h5 class="name">Mark Otto</h5>
                                    <div class="time">24 Hours</div>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </div>
                                    <footer>
                                        <a href="#">Reply</a>
                                    </footer>
                                </div>
                            </div>
                            <div class="reply-list">
                                <div class="item">
                                    <div class="user">
                                        <figure>
                                            <img src="images/img01.jpg">
                                        </figure>
                                        <div class="details">
                                            <h5 class="name">Mark Otto</h5>
                                            <div class="time">24 Hours</div>
                                            <div class="description">
                                                Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </div>
                                            <footer>
                                                <a href="#">Reply</a>
                                            </footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="user">
                                <figure>
                                    <img src="images/img01.jpg">
                                </figure>
                                <div class="details">
                                    <h5 class="name">Mark Otto</h5>
                                    <div class="time">24 Hours</div>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </div>
                                    <footer>
                                        <a href="#">Reply</a>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="row">
                        <div class="col-md-12">
                            <h3 class="title">Leave Your Response</h3>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Name <span class="required"></span></label>
                            <input type="text" id="name" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email <span class="required"></span></label>
                            <input type="email" id="email" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="website">Website</label>
                            <input type="url" id="website" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="message">Response <span class="required"></span></label>
                            <textarea class="form-control" name="message" placeholder="Write your response ..."></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-primary">Send Response</button>
                        </div>
                    </form>
                </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
