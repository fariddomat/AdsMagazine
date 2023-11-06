@extends('dashboard._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Category</h4>
                    </div>
                    <div class="card-block" dir="" style="">
                        <div class="card-body col-lg-6">
                            <fieldset class="form-group">
                                <form action="{{ route('dashboard.adSlots.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    @include('dashboard._layouts._error')
                                    <h5 class="mt-2">Name</h5>
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control"
                                        id="basicInput" required>

                                    <h5 class="mt-2">Description</h5>
                                    <textarea name="description" id="" class="form-control">
                                        {{ old('description') }}
                                    </textarea>

                                    <h5 class="mt-2">Price</h5>
                                    <input value="{{ old('price') }}" name="price" type="number" class="form-control"
                                        id="basicInput" required>
                                    <h5 class="mt-2">Duration (Days)</h5>
                                    <input value="{{ old('duration') }}" name="duration" type="number" class="form-control"
                                        id="basicInput" required>

                                    <button class="btn btn-icon btn-info mr-1 mt-2"> Create <i class="fa fa-save"
                                            style="position: relative"></i></button>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Basic Inputs end -->
@endsection
