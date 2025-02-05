<!-- resources/views/admin/home.blade.php -->
@extends('admin.admin_main')

@section('content')
    <div class="container">
        <h2>Welcome to the Admin Panel</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Products</h5>
                        <p>{{ $productCount }}</p>
                    </div>
                </div>
            </div>
            <!-- You can add more stats here -->
        </div>
    </div>
@endsection

