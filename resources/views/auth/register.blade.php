@extends('home.layouts._site')

@section('content')

		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">
					<div class="box box-border">
						<div class="box-body">
							<h4>Register</h4>
							<form action="{{ route('register') }}" method="POST">
                                @csrf
                                @include('dashboard._layouts._error')
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Password</label>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="form-group">
									<label>Password Confirmation</label>
									<input type="password" name="password_confirmation" class="form-control">
								</div>
                                {{-- password_confirmation --}}


                                <div class="form-group">
									<label>Role</label>
									<select name="role" class="form-control">
                                        <option value="advertiser">Advertiser</option>
                                        <option value="user">User</option>
                                    </select>
								</div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account?</span> <a href="login.html">Login</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection
