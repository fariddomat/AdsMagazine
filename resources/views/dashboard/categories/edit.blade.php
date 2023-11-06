@extends('dashboard._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit category</h4>
                    </div>
                    <div class="card-block" >
                        <div class="card-body col-lg-6">
                            <fieldset class="form-group">
                                <form action="{{ route('dashboard.categories.update', $category->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @include('dashboard._layouts._error')
                                    <h5 class="mt-2">Name</h5>
                                    <input value="{{ old('name', $category->name) }}" name="name" type="text" class="form-control" id="basicInput" required>

                                    <button
                                        class="btn btn-icon btn-info mr-1 mt-2"> Edit <i class="fa fa-edit"
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
