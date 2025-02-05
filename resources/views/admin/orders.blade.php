<!-- resources/views/admin/orders.blade.php -->
@extends('admin.admin_main')

@section('content')
    <div class="container">
        <h2>Orders</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <a href="{{ route('admin.view_order', $order->id) }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

