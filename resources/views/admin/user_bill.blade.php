<!-- resources/views/admin/user_bill.blade.php -->
@extends('admin.admin_main')

@section('content')
    <div class="container">
        <h2>Billing Information</h2>
        <table class="table">
            <tr>
                <th>Item</th>
                <td>{{ $order->product_name }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>${{ $order->total }}</td>
            </tr>
        </table>
    </div>
@endsection

