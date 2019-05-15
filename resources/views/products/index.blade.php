@extends('layouts.app')

@section('content')
    <h1>All products</h1>
    <ul>
        @foreach($products as $product)
            <a href="products/{{$product->id}}">
                <li>{{ $product->title }}</li>
            </a>
        @endforeach
    </ul>
@endsection