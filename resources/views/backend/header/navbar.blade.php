<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        @livewire('notification-component')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}" title="Frontend Website" target="_blank">
                <i class="fas fa-globe"></i>
            </a>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.profile') }}" title="Profile">
                <i class="fas fa-user-cog"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" title="Logout">
                <i class="fas fa-sign-out-alt text-danger"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
