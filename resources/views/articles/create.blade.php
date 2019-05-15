@extends('layout')

@section('content')
<form method="POST" action="/articles" style="margin-bottom: 1em;">
    @csrf
    <div class="field">
        <label for="title" class="label">Title</label>
        <div class="control">
            <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="title" value="{{old('title')}}" placeholder="Title">
        </div>
    </div>

    <div class="field">
        <label for="description" class="label">Description</label>
        <div class="control">
            <textarea name="description" class="textarea" placeholder="Description">{{old('description')}}</textarea>
        </div>
    </div>



    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create article</button>
        </div>
    </div>
</form>

@include('errors')
@endsection
