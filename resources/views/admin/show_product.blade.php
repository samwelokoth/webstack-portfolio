<!-- resources/views/admin/show_product.blade.php -->
@extends('admin.admin_main')

@section('content')
    <div class="container">
        <h2>Product Details</h2>
        <div class="product-details">
            <h3>{{ $product->title }}</h3>
            <p><strong>Category:</strong> {{ $product->category }}</p>
            <p><strong>Price:</strong> ${{ $product->price }}</p>
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
        </div>
    </div>
@endsection

