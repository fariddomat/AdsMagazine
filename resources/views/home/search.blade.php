@extends('home.layouts._site')

@section('content')
    <section class="search">
        <div class="container">
            <div class="row" style="padding-top: 50px">
                <div class="col-md-3">
                    <aside>
                        <h2 class="aside-title">Filter</h2>
                        <div class="aside-body">
                            @foreach ($categories as $category)
                                <div class="form-group">
                                    <label><a href="{{ route('search', ['category_id'=>$category->id]) }}">{{ $category->name }}</a></label>
                                </div>

                            @endforeach
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="nav-tabs-group">
                        <ul class="nav-tabs-list">
                            <li class="active"><a href="#">All Search result</a></li>
                        </ul>

                    </div>
                    <div class="search-result">
                        Search results found in {{ $ads_count }} ads.
                    </div>
                    <div class="row">
                        @foreach ($ads as $ad)
                            <article class="col-md-12 article-list">
                                <div class="inner">
                                    <figure>
                                        <a href="{{ route('show', $ad->id) }}">
                                            <img src="{{ asset('ads/' . $ad->media_url) }}">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <div class="detail">
                                            <div class="category">
                                                <a href="{{ route('search', ['category_id'=>$ad->category->id]) }}">{{ $ad->category->name }}</a>
                                            </div>
                                            <time>{{ $ad->created_at->diffForHumans() }}</time>
                                        </div>
                                        <h1><a href="{{ route('show', $ad->id) }}">{{ $ad->title }}</a></h1>


                                        <h2><a href="{{ route('search', ['user_id'=> $ad->user_id]) }}">By : {{ $ad->user->name }}</a></h2>
                                        <p>
                                            {!! $ad->description !!}
                                        </p>
                                        <footer>
                                            <a href="{{ route('show', $ad->id) }}" class="" style="float: left;
                                            margin-top: 10px;
                                            position: relative;"><i class="ion-eye"></i>
                                               {{ $ad->ad_clicks->count() }}
                                            </a>
                                            <a class="btn btn-primary more" href="{{ route('show', $ad->id) }}">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div class="col-md-12 text-center">

                            {{ $ads->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
