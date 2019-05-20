@extends('layouts.welcome')
@section('title', 'Login')

@section('content')
@if (session('status'))
<div class="alert alert-success">
	{{ session('status') }}
</div>
@endif
@if (session('warning'))
<div class="alert alert-warning">
	{{ session('warning') }}
</div>
@endif

	


			<form class="data-form" method="POST" action="/login">
				@csrf
				<h3>Sign In</h3>
				
				<div class="form-holder">
					<input type="text" placeholder="e-mail" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
				</div>
				<div class="form-holder">
					<input type="password" placeholder="Password" class="form-control" style="font-size: 15px;" name="password" required autocomplete="new-password">
				</div>
				
				<div class="form-login">
					<button>Sign in</button>
					<p>Don't have account? <a href="/register">SignUp</a></p>
				</div>
			</form>
		@endsection


