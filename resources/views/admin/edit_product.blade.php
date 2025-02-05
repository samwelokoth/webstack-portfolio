<!-- resources/views/admin/edit_product.blade.php -->
@extends('admin.admin_main')

@section('content')
    <div class="container">
        <h2>Edit Product</h2>
        <form action="{{ route('admin.update_product', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $product->title }}" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="Electronics" {{ $product->category == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                    <option value="Computers" {{ $product->category == 'Computers' ? 'selected' : '' }}>Computers</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection

