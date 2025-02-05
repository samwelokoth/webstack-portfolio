<!-- resources/views/admin/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('admin.home') }}">Admin Panel</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>

