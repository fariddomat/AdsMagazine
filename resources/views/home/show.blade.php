@extends('home.layouts._site')

@section('content')
    <section class="single" style="padding-top: 150px">
        <div class="container">
            <div class="row" style="padding-top: 50px">
                <div class="col-md-4 sidebar" id="sidebar">

                    <aside>
                        <h1 class="aside-title">Recent Ads</h1>
                        <div class="aside-body">
                            @foreach ($ads as $ad1)
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="{{ route('show', $ad1->id) }}">
                                                <img src="{{ asset('ads/' . $ad1->media_url) }}">
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
                                    <img src="{{ asset('ads/' . $ad->media_url) }}">
                                    <figcaption>Image by pexels.com</figcaption>
                                </figure>
                            </div>

                            <div>{!! $ad->description !!}</div>

                            @if ($ad->withVideo())
                                <video
                                    style="margin-top: 25px;margin-bottom: 15px;
                                            border-radius: 10px;"
                                    src="/files/{{ $ad->id . '/' . $ad->withVideo() }}" controls></video>
                            @endif
                            <div class="row" style="margin-top: 50px;">
                                @if ($ad->hasMoreThanOneImage())
                                    @foreach ($ad->ad_medias as $item)
                                        <div class="col-md-3">
                                            <img class="image responsive" src="/files/{{ $ad->id . '/' . $item->media }}"
                                                alt="image" style="  width: 100%;" />
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-6">
                                        <img class="post-img" src="/files/{{ $ad->id . '/' . $ad->ad_medias->first()->media }}" alt=""
                                            style="width: 100%">
                                    </div>
                                @endif

                            </div>

                        </div>
                        <footer>
                            <div class="col">
                                <ul class="tags">
                                    <li><a href="#">Clicks {{ $ad->ad_clicks->count() }}</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <a href="#" class="love"><i class="ion-eye"></i>
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
                            <img src="{{ asset('users/' . $ad->user->img) }}">
                        </figure>
                        <div class="details">
                            <h3 class="name">{{ $ad->user->name }}</h3>
                            <div class="job">{{ $ad->user->email }}</div>
                            <div class="job">{{ $ad->user->mobile }}</div>
                            <p>{{ $ad->user->description }}</p>

                        </div>
                    </div>

                    <div class="line thin"></div>
                    <div class="comments">
                        <h2 class="title">Comments</a></h2>
                        <div class="comment-list">
                            @include('home.layouts.replies', [
                                'comments' => $ad->comments,
                                'ad_id' => $ad->id,
                            ])



                        </div>
                        @auth
                            <form class="row" method="post" action="{{ route('comment.store') }}">
                                @csrf
                                <input type="hidden" name="ad_id" value="{{ $ad->id }}" />

                                <div class="col-md-12">
                                    <h3 class="title">Leave Your Response</h3>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="message">Response <span class="required"></span></label>
                                    <textarea class="form-control" name="comment" placeholder="Write your response ..."></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-primary">Send Response</button>
                                </div>
                            </form>
                        @else
                            <h5>Login to Comment</h5>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
