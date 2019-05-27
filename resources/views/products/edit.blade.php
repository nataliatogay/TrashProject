@extends('layouts.app')

@section('title', $product->name)

{{-- @section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection --}}

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span><a href="{{ route('shop.index') }}">Shop</a></span>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{ $product->title }}</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="product-section container">
        <div>
            {{-- <div class="product-section-image">
                <img src="{{ productImage($product->img_path) }}" alt="product" class="active" id="currentImage">
            </div> --}}
            <div class="product-section-image"> 
                <img id="currentImage" width="200" src="{{ productImage($product->img_path) }}" alt="product" class="active"/>
            </div>
            
        </div>
        <div class="product-section-information">
            <form action="/products/{{$product->id}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <input type="file"  accept="image/*" name="img_path" id="file"  onchange="loadFile(event)" style="display: none;">
                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                <div class="form-control">
                    <input id="title" type="text" name="title" value="{{ old('title', $product->title) }}" placeholder="Title" required>
                </div>
                <div class="product-section-price">
                    <div class="control">
                        <input type="number" class="input {{$errors->has('price') ? 'is-danger' : ''}}" name="price" value="{{ old('price', $product->price) }}" placeholder="Price">
                    </div>
                </div>
                <div class="product-section-price">
                    <div class="control">
                        <input type="number" class="input {{$errors->has('quantity') ? 'is-danger' : ''}}" name="quantity" value="{{ old('quantity', $product->quantity) }}" placeholder="Quantity">
                    </div>
                </div>
                <p>
                        <div class="control">
                                <textarea name="description" class="textarea">{{$product->description}}</textarea>
                            </div>
                        {{-- {!! $product->description !!} --}}
                </p>

                <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-link">Update product</button>
                        </div>
                    </div>
            </form>
            

            <p>&nbsp;</p>

            
        </div>
    </div> <!-- end product-section -->

    {{-- @include('partials.might-like') --}}

@endsection

@section('extra-js')
    
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('currentImage');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    {{-- <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    {{-- <script src="{{ asset('js/algolia.js') }}"></script> --}}

@endsection
