<div class="sidelink shadow p-3 mb-5 bg-body rounded">
    @guest
        <!-- Form Login -->
        <form action="{{ route('login') }}" method="post">
            @csrf
            <h4><i class="fas fa-xl fa-graduation-cap"></i> Login Alumni</h4>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

        </form>
        <!-- End for Form Login -->

    @else

        <!-- Form Logout -->
        <div class="data-user text-start">
            <h4><i class="fas fa-solid fa-user mr-2"></i>Hallo {{Auth::User()->role}}</h4>

                {{ __('You are logged in!') }}

            <hr>

            <form action="{{route('logout')}}" method="post">
                @csrf
                @if(Auth::user()->role == "alumni")
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input class="form-control bg-light" value="{{Auth::User()->alumni->nim}}" disabled>
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input class="form-control bg-light" value="{{Auth::User()->name}}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control bg-light" value="{{Auth::User()->email}}" disabled>
                </div>

                <a class="btn btn-sm btn-info w-100 mt-4" href="{{ route('password.update') }}" role="button"><i class="fas fa-user-cog pr-2"></i>Ubah Password</a>

                <button type="submit" class="btn btn-sm btn-primary w-100 mt-2"><i class="fas fa-sign-out-alt pr-2"></i>Logout</button>
            </form>

        </div>
        <!-- End for Form Logout -->

        <!-- side link -->
        <div class="sidelink my-3">
            
            <!-- Nav Item - Pages Collapse Menu -->
            <ul class="navbar-nav bg-light sidelink-light accordion" id="accordionSidebar">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item{{ request()->is('dashboard') ? ' active' : '' }}">
                <a class="nav-link" href="" disabled>
                    <span disabled>Dashboard</span>
                </a>
            </li>

            @if(Auth::user()->role == "admin")
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item{{ request()->is('user','daftar_user') ? ' active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="true" aria-controls="collapse">
                    <i class="fas fa-building"></i>
                    <span class="fs-4">User</span>
                </a>
                <div id="collapse" class="collapse{{ request()->is('daftar_user') ? ' show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item{{ request()->is('register') ? ' active' : '' }}" href="{{url('/register')}}">Daftar User</a>
                        <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item{{ request()->is('perusahaan','data_perusahaan') ? ' active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-building"></i>
                    <span class="fs-4">Perusahaan</span>
                </a>
                <div id="collapseOne" class="collapse{{ request()->is('data_perusahaan') ? ' show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item{{ request()->is('data_perusahaan') ? ' active' : '' }}" href="{{url('data_perusahaan')}}">Data Perusahaan</a>
                        <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
                    </div>
                </div>
            </li>
            @endif

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item{{ request()->is('alumni','data_alumni','kuesioner') ? ' active' : '' }}">
                <a class="nav-link collapsed" href="{{ url ('alumni')}}" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-graduation-cap"></i>
                    <span class="fs-4">Alumni</span>
                </a>
                <div id="collapseTwo" class="collapse{{ request()->is('data_alumni','data_alumni/{id}', 'data_alumni/{id}/edit','alumni') ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        @if(Auth::user()->role == "admin")
                        <a class="collapse-item{{ request()->is('data_alumni') ? ' active' : '' }}" href="{{url('data_alumni')}}">Data Alumni</a>
                        @endif
                        @if(Auth::user()->role == "alumni")
                        <a class="collapse-item{{ request()->is('alumni') ? ' active' : '' }}" href="{{ url ('alumni')}}">Data Alumni</a>
                        @endif
                    </div>
                </div>
            </li>
        </ul>
    @endguest
</div>