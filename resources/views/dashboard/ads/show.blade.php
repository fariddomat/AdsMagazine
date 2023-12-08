@extends('dashboard._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Show ad</h4>
                    </div>
                    <div class="card-block" dir="" style="">
                        <div class="row">
                            <div class="card-body col-lg-6">
                                <fieldset class="form-group">
                                    @include('dashboard._layouts._error')
                                    <h5 class="mt-2">Title</h5>
                                    <input value="{{ old('title', $ad->title) }}" name="title" type="text"
                                        class="form-control" id="basicInput" required disabled>

                                    <h5 class="mt-2">Description</h5>
                                    <textarea name="description" id="editor" class="form-control editor" disabled>
                                        {!!  $ad->description !!}
                                        </textarea>
                                    <h5 class="mt-2">Price</h5>
                                    <input value="{{ old('price', $ad->price) }}" name="price" type="number"
                                        class="form-control" id="basicInput" required disabled>

                                    <h5 class="mt-2">Media (Image)</h5>
                                    <img src="{{ asset('ads/' . $ad->media_url) }}" alt="" style="max-width: 250px">


                                </fieldset>
                            </div>

                            <div class="card-body col-lg-6">

                                <fieldset class="form-group">
                                    <h5 class="mt-2">User</h5>
                                    <select name="user_id" class="form-control" id="" disabled>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                @if ($ad->user_id == $user->id) selected @endif>{{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <h5 class="mt-2">Category</h5>
                                    <select name="category_id" class="form-control" id="" disabled>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($ad->category_id == $category->id) selected @endif>{{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <h5 class="mt-2">AdSlot</h5>
                                    <select name="ad_slot_id" class="form-control" id="" disabled>
                                        @foreach ($adSlots as $adSlot)
                                            <option value="{{ $adSlot->id }}"
                                                @if ($ad->ad_slot_id == $adSlot->id) selected @endif>{{ $adSlot->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </fieldset>
                                <h5 class="mt-2">Status : {{ $ad->status }}</h5>
                                @if (Auth::user()->hasRole('superadministrator|administrator'))
                                    @if ($ad->status == 'pending')
                                        <a href="{{ route('dashboard.ads.accept', $ad->id) }}" type="button"
                                            class="btn btn-icon btn-success mr-1" style="  min-width: 100px;">Accept
                                            </i></a>
                                        <a href="{{ route('dashboard.ads.reject', $ad->id) }}" type="button"
                                            class="btn btn-icon btn-danger mr-1" style="  min-width: 100px;">Reject</a>
                                    @endif
                                @endif

                                All Media
                                @if ($ad->withVideo())
                                    <video
                                        style="margin-top: 25px;margin-bottom: 15px;
                                            border-radius: 10px; width: 100%"
                                        src="/files/{{ $ad->id . '/' . $ad->withVideo() }}" controls></video>
                                @endif
                                <div class="row" style="margin-top: 50px;">
                                    @if ($ad->hasMoreThanOneImage())
                                        @foreach ($ad->ad_medias as $item)
                                            <div class="col-md-3">
                                                <img class="image responsive"
                                                    src="/files/{{ $ad->id . '/' . $item->media }}" alt="image"
                                                    style="  width: 100%;" />
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-md-6">
                                            <img class="post-img" src="{{ $ad->image_path }}" alt=""
                                                style="width: 100%">
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Basic Inputs end -->
@endsection

@push('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        $(function() {
            CKEDITOR.replace("editor", {
                filebrowserBrowseUrl: '/uploads',
                filebrowserUploadUrl: '/uploads' +
                    "?_token=" +
                    $("meta[name=csrf-token]").attr("content"),
                removeButtons: "About"
            });
        });
    </script>
@endpush
