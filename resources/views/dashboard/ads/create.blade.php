@extends('dashboard._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Ad</h4>
                    </div>
                    <div class="card-block" dir="" style="">
                        <form action="{{ route('dashboard.ads.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="card-body col-lg-6">
                                    <fieldset class="form-group">
                                        @include('dashboard._layouts._error')
                                        <h5 class="mt-2">Title</h5>
                                        <input value="{{ old('title') }}" name="title" type="text"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">Description</h5>
                                        <textarea name="description" id="" class="form-control">
                                        {{ old('description') }}
                                        </textarea>


                                        <h5 class="mt-2">Price</h5>
                                        <input value="{{ old('price') }}" name="price" type="number"
                                            class="form-control" id="basicInput" required>
                                        <h5 class="mt-2">Media (Image)</h5>
                                        <input value="{{ old('media') }}" name="media" type="file"
                                            class="form-control" id="basicInput" required>

                                    </fieldset>
                                </div>

                                <div class="card-body col-lg-6">

                                    <fieldset class="form-group">
                                        <h5 class="mt-2">User</h5>
                                        <select name="user_id" class="form-control" id="">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        <h5 class="mt-2">Category</h5>
                                        <select name="category_id" class="form-control" id="">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <h5 class="mt-2">AdSlot</h5>
                                        <select name="ad_slot_id" class="form-control" id="">
                                            @foreach ($adSlots as $adSlot)
                                                <option value="{{ $adSlot->id }}">{{ $adSlot->name }}</option>
                                            @endforeach
                                        </select>

                                    </fieldset>

                                    <button class="btn btn-icon btn-info mr-1 mt-2"> Create <i class="fa fa-save"
                                        style="position: relative"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Basic Inputs end -->
@endsection
