@extends('home.layouts._site')

@section('content')
    <section class="search" style="padding-top: 150px">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-3">
                    <aside>
                        <h2 class="aside-title">Search</h2>
                        <div class="aside-body">
                            <p>Search with other keywords or use filters for more accurate results.</p>
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="s" class="form-control"
                                            placeholder="Type something ..." value="hello">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary">
                                                <i class="ion-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <aside>
                        <h2 class="aside-title">Filter</h2>
                        <div class="aside-body">
                            <form class="checkbox-group">
                                <div class="group-title">Date</div>
                                <div class="form-group">
                                    <label><input type="radio" name="date" checked> Anytime</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="radio" name="date"> Today</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="radio" name="date"> Last Week</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="radio" name="date"> Last Month</label>
                                </div>
                                <br>
                                <div class="group-title">Categories</div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category" checked> All Categories</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Lifestyle</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Travel</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Computer</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Film</label>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox" name="category"> Sport</label>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div> --}}
                <div class="col-md-12">
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
                                            <img src="{{ asset('storage/ads/' . $ad->media_url) }}">
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
