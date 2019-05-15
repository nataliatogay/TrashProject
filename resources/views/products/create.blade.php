@extends('layout')

@section('content')
<form method="POST" action="/products" style="margin-bottom: 1em;">
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
        <label for="price" class="label">Price</label>
        <div class="control">
            <input type="number" class="input {{$errors->has('price') ? 'is-danger' : ''}}" name="price" value="{{old('price')}}" placeholder="Price">
        </div>
    </div>

    <div class="field"> 
        <label for="quantity" class="label">Quantity</label>
        <div class="control">
            <input type="number" class="input {{$errors->has('quantity') ? 'is-danger' : ''}}" name="quantity" value="{{old('quantity')}}" placeholder="Quantity">
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create product</button>
        </div>
    </div>        
</form>

@include('errors')
@endsection