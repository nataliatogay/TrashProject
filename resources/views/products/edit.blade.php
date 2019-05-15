@extends('layout')
@section('content')
    <h1 class="title">Edit product</h1>

    <form method="POST" action="/products/{{$product->id}}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
            <input type="text" class="input" name="title" placeholder="title" value="{{ $product->title }}">
               
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{$product->description}}</textarea>
            </div>
        </div>

        <div class="field"> 
            <label for="price" class="label">Price</label>
            <div class="control">
                <input type="number" class="input {{$errors->has('price') ? 'is-danger' : ''}}" name="price" value="{{ $product->price }}" placeholder="Price">
            </div>
        </div>
    
        <div class="field"> 
            <label for="quantity" class="label">Quantity</label>
            <div class="control">
                <input type="number" class="input {{$errors->has('quantity') ? 'is-danger' : ''}}" name="quantity" value="{{ $product->quantity }}" placeholder="Quantity">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update product</button>
            </div>
        </div>
        
    </form>

    @include('errors')

    <form method="POST" action="/products/{{$product->id}}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete product</button>
            </div>
        </div>
    </form>
@endsection