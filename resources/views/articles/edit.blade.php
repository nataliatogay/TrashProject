@extends('layout')
@section('content')
    <h1 class="title">Edit article</h1>

    <form method="POST" action="/articles/{{$article->id}}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
            <input type="text" class="input" name="title" placeholder="title" value="{{ $article->title }}">

            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{$article->description}}</textarea>
            </div>
        </div>



        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update article</button>
            </div>
        </div>

    </form>

    @include('errors')

    <form method="POST" action="/products/{{$article->id}}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete article</button>
            </div>
        </div>
    </form>
@endsection
