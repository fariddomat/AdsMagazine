@extends('home.layouts._site')

@section('content')

<section class="login first grey">
    <div class="container">
        <div class="box-wrapper" style="margin-top: 35px">
            <div class="box box-border">
                <div class="box-body">
                    <h4>Login</h4>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @include('dashboard._layouts._error')
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="fw">Password
                            </label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <span class="text-muted">Don't have an account?</span> <a href="register.html">Create one</a>
                        </div>
                                       </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
