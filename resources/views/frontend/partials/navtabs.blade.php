<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="{{ route('about') }}">About us</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('careers') ? 'active' : '' }}" href="{{ route('careers') }}">Careers</a></li>
                {{-- <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('works') ? 'active' : '' }}" href="{{ route('works') }}">How we work</a></li> --}}
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('teams') ? 'active' : '' }}" href="{{ route('teams') }}">Our team</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('vision') ? 'active' : '' }}" href="{{ route('vision') }}">Mission and
                        vision</a></li>
                {{-- <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('value') ? 'active' : '' }}" href="{{ route('value') }}">Our values</a></li> --}}
            </ul>
        </div>
    </div>
</div>
