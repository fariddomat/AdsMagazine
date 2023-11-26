@extends('dashboard._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit coupon</h4>
                    </div>
                    <div class="card-block" >
                        <div class="card-body col-lg-6">
                            <fieldset class="form-group">
                                <form action="{{ route('dashboard.coupons.update', $coupon->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @include('dashboard._layouts._error')
                                    <h5 class="mt-2">Code</h5>
                                    <input value="{{old('code', $coupon->code)}}" name="code" type="text" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">Percent</h5>
                                    <input value="{{old('percent', $coupon->percent)}}" name="percent" type="number" min="1" max="100" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">Expire Date</h5>
                                    <input value="{{old('expire_date', $coupon->expire_date)}}" min="{{ now()->toDateString('Y-m-d') }}" name="expire_date" type="date" class="form-control" id="basicInput" required>
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
