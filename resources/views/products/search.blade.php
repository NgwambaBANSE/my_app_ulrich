@extends('layouts.app')

@section('title', 'Product Details')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h3>Product Details</h3>
        </div>
        @foreach ($products as $product)
        <div class="card-body">
            <p><strong>Product Name:</strong> {{ $product->productname}}</p>
            <p><strong>Category:</strong> {{ $product->category->name }}</p>
            <p><strong>Price:</strong> {{ $product->price }}</p>
            <p><strong>Details:</strong> {{ $product->details }}</p>
        </div>
        @endforeach
        @if ($products->isEmpty())
            <p>No products found.</p>
        @endif

    </div>
@endsection
