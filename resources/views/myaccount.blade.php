@extends('layouts.app')

@section('content')

    <h1>My account</h1>

    <h1 class="title">{{ $user->name }}</h1>
    <h1>{{ $user->is_admin }}</h1>
    <h1> {{ $user->id }} </h1>





<img style="height: 100%; max-height:160px; width: 100%;  max-width:120px" src="{{$user->img_path}}">
    <form method="POST" action="/profile" class="box" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="field">
            <div class="control">
                <input type="file" name="img_input" ><br/>
            </div>
        </div>

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

        {{-- @include('errors') --}}
    </form>

@endsection
