@extends('home.layouts._site')

@section('content')
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                    <h1 class="page-title">Contact Us</h1>
                    <p class="page-subtitle">We hear you</p>
                    <div class="line thin"></div>
                    <div class="page-description">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3>Contact</h3>
                                <p>
                                    Contact with advistor to ask about ads or contact the adminstration</p>
                                <p>
                                    Phone: <span class="bold">{{ setting('site_phone') }}</span> <br>
                                    Email: <span class="bold">{{ setting('site_email') }}</span>
                                    <br>
                                    <br>
                                    {{ setting('site_location') }}
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <form class="row contact" action="{{ route('postContact') }}" method="post"
                                    id="contact-form">
                                    @csrf
                                    <div class="col-md-12">
                                        @include('dashboard._layouts._error')
                                        <div class="form-group">
                                            <label>Ads <span class="required"></span></label>
                                            <select name="ad_id" class="form-control">
                                                @foreach ($ads as $ad)
                                                    <option value="{{ $ad->id }}">{{ $ad->title }} -
                                                        {{ $ad->user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @auth
                                    <input type="hidden" value="{{ Auth::user()->name }}" name="name" >
                                    <input type="hidden" value="{{ Auth::user()->email }}" name="email" >

                                    @else
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="required"></span></label>
                                                <input type="text" class="form-control" name="name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email <span class="required"></span></label>
                                                <input type="text" class="form-control" name="email" required="">
                                            </div>
                                        </div>
                                    @endauth
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Your message <span class="required"></span></label>
                                            <textarea class="form-control" name="message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
