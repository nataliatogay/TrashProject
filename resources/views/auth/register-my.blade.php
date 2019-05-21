@extends('layouts.welcome')
@section('title', 'Register')

@section('content')




				<form class="data-form" method="POST" action="{{ route('register') }}">
					@csrf
					<h3>Sign Up</h3>
					<div class="form-holder active">
						<input type="text" placeholder="name" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
					    @enderror
					</div>

					<div class="form-holder">
						<input type="text" placeholder="e-mail" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
						@error('email')
						<span class="error" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="form-holder">
						<input type="text" placeholder="Phone" class="form-control" style="font-size: 15px;" name="phone" value="{{ old('phone') }}">
                    </div>

					<div class="form-holder">
						<input type="password" placeholder="Password" class="form-control" style="font-size: 15px;" name="password" required >
						@error('password')
						<span class="error" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Repeat" class="form-control" style="font-size: 15px;" name="password_confirmation" required>

					</div>

					<div class="form-login">
						<button>Sign up</button>
						<p>Already have account? <a href="/login">Login</a></p>
					</div>
				</form>

				@endsection




