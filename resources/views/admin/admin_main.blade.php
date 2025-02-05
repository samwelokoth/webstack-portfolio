<!-- resources/views/admin/admin_main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('head')
</head>
<body>
    @include('admin.sidebar')
    <div class="content">
        @include('admin.navbar')
        <div class="main-content">
            @yield('content')
        </div>
    </div>
    @include('admin.footer')
</body>
</html>

