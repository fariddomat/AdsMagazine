@extends('dashboard._layouts._app')

@section('content')

    <div class="tile mb-4">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Edit User</h4>
                    <p class="card-category">update user with Role</p>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('dashboard._layouts._error')


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


                        {{-- Roles --}}
                        <div class="form-group">
                            <label for="role">Roles</label>
                            <select class="form-control" name="role_id" id="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                        {{ $role->name }}</option>

                                @endforeach
                            </select>
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
                        <img src="{{ asset('users/'.$user->img) }}" alt="" style="max-width: 250px">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
                                Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            @endsection
