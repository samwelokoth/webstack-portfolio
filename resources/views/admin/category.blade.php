<!-- resources/views/admin/category.blade.php -->
@extends('admin.admin_main')

@section('content')
    <div class="container">
        <h2>Categories</h2>
        <a href="{{ route('admin.add_category') }}" class="btn btn-success mb-3">Add Category</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('admin.edit_category', $category->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.delete_category', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

