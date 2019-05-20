@extends('layouts.welcome')

@section('content')


<div class="form-login" style="padding-bottom: 20px;">
    <div>
            <h3 class="welcome-h3">Aaaa aaaa aaa aaaaa aaaaaaa</h3>
            <form class="welcome-form" method="GET" action="/register">
                <button type="submit">Sign up</button>
            </form>
            <form class="welcome-form" method="GET" action="/login">
                <button type="submit">Sign in</button>
            </form>

            {{-- <button onsubmit="/register">Sign up</button>
            <button>Sign in</button> --}}
        </div>
	</div>

@endsection
