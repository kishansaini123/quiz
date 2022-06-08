<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('small-logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-bold">ADVENITH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->photo ? asset('storage/avatar/' . auth()->user()->photo) : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim(auth()->user()->email))) }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.profile') }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a href="{{ route('admin.attendances') }}"
                            class="nav-link {{ Route::currentRouteNamed('admin.attendances') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-clock"></i>
                            <p>Attendances</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('admin.blogs') }}"
                        class="nav-link {{ Route::currentRouteNamed('admin.blogs') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-blogger-b"></i>
                        <p>Blogs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories') }}"
                        class="nav-link {{ Route::currentRouteNamed('admin.categories') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Categories</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('subject.show') }}"
                        class="nav-link ">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Subjects</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href=""
                        class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Teacher</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Projects</p>
                    </a>
                </li>
                @if (Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a href="{{ route('admin.users') }}"
                            class="nav-link {{ Route::currentRouteNamed('admin.users') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.departments') }}"
                            class="nav-link {{ Route::currentRouteNamed('admin.departments') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-archway"></i>
                            <p>Departments</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.roles') }}"
                            class="nav-link {{ Route::currentRouteNamed('admin.roles') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
