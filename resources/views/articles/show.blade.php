@extends('layouts.app')

@section('content')

    <h1>Show article</h1>

    <h1 class="title">{{ $article->title }}</h1>
    <div class="content">
        {{$article->description}}

        {{-- @can('update', $product) --}}

            <p>
                <a href="/articles/{{$article->id}}/edit">Edit</a>
            </p>

        {{-- @endcan --}}
    </div>


@endsection
