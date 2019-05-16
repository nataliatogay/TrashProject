@extends('layouts.app')

@section('content')

    <h1>My account</h1>
    <label>Name: </label>
    <label>{{ $user->name }}</label><br/>

    <img style="height: 100%; max-height:160px; width: 100%;  max-width:120px" src="{{$user->img_path}}"><br/>

    <label>Id: </label>
    <label>{{ $user->id }} </label><br/>

    <label>Is admin: </label>
    <label>{{ $user->is_admin }}</label><br/>

    <label>Phone: </label>
    <label>{{ $user->phone_number }} </label><br/>

    <label>Email: </label>
    <label>{{ $user->email }} </label><br/>

    <p>
        <a href="/profile/edit">Edit</a>
    </p>



@endsection
