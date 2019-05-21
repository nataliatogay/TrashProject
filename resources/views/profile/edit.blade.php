@extends('layouts.app')

@section('title', 'Edit profile')


@section('styles')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('content')

    <h1>My account</h1>
    <label>Name: </label>
    <label>{{ $user->name }}</label><br/>

    <img id="output" width="200" src="{{ asset($user->img_path) }}"/>

    <form method="POST" action="/profile" class="box" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <input type="file"  accept="image/*" name="img_path" id="file"  onchange="loadFile(event)" style="display: none;">

        <p><label for="file" style="cursor: pointer;">Upload Image</label></p>

        <div class="field">
            <div class="control">
                <input type="text" class="input" name="name" placeholder="Name" value="{{ $user->name }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="text" class="input" name="phone" placeholder="phone" value="{{ $user->phone_number }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="email" class="input" name="email" placeholder="email" value="{{ $user->email }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Update profile</button>
            </div>
        </div>

        @include('errors')
    </form>

    <p>
        <a href="/profile/password/edit">Change password</a>
    </p>

@endsection


@section('scripts')

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@endsection
