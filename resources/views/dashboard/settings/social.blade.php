@extends('dashboard._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Social Media
                    </div>
                    <div class="card-block ">
                        <form action="{{ route('dashboard.settings') }}" method="POST">
                            @csrf
                            @method('post')
                            @include('dashboard._layouts._error')

                            <div class="row pr-2 pl-2">
                                @php
                                    $social_sites = ['facebook', 'whatsapp', 'youtube', 'snapchat', 'twitter', 'instagram'];
                                @endphp
                                @foreach ($social_sites as $social_site)
                                    {{-- client id --}}
                                    <div class="form-group col-md-6">
                                        <label for="{{ $social_site }}_link" class="text-capitalize"> {{ $social_site }}
                                            link
                                        </label>
                                        <input type="text" class="form-control" name="{{ $social_site }}_link"
                                            id="{{ $social_site }}_link" value="{{ setting($social_site . '_link') }}"
                                            aria-describedby="helpId"
                                            placeholder="https://www.{{ $social_site }}.com/username">
                                    </div>
                                @endforeach
                            </div>


                            <div class="form-group mr-2">
                                <button type="submit" class="btn btn-primary">Save <i class="fa fa-plus"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
