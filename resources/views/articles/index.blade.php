@extends('layouts.app')

@section('content')
    <h1>All news</h1>
    <ul>
        @foreach($articles as $article)
            <a href="articles/{{$article->id}}">
                <li>{{ $article->title }}</li>
            </a>
        @endforeach
    </ul>
@endsection
