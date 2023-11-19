@extends('dashboard._layouts._app')
@section('title')
    Edit Profile
@endsection
@section('content')
    <section class="basic-inputs" >
        <div class="row match-height">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Update Profile
                    </div>
                    <div class="card-block " style="margin: 0 25px">
                        <form action="{{ route('dashboard.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            @include('dashboard._layouts._error')

                            <div class="form-group">
                                <label for="name">Role</label>
                                <label for="name">
                                    {{ $user->roles->first()->name }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ old('name', $user->name) }}" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email', $user->email) }}" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder=""
                                    autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label for="password_c">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_c"
                                    autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label for="name">description</label>
                               <textarea name="description" class="form-control">{{ old('description', $user->description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="name">mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" value="{{ old('mobile', $user->mobile) }}"
                                    aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="name">Image</label>
                                <input type="file" class="form-control" name="img" id="img" value="{{ old('img') }}"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <img src="{{ asset('storage/users/'.$user->img) }}" alt="" style="max-width: 250px">

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
                                    Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
