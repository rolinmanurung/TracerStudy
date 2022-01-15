<div class="container">
  <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="#"><img src="{{('img/logo-poltek.png')}}" alt="logo" class="pr-5"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-center"> 
              <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item{{ request()->is('tracerstudy') ? ' active' : '' }}">
                <a class="nav-link" href="{{route('kta')}}">Tracer Study</a>
              </li>
              <li class="nav-item{{ request()->is('laporan') ? ' active' : '' }}">
                <a class="nav-link" href="{{route('laporan')}}">Laporan</a>
              </li>
              <li class="nav-item{{ request()->is('ktp') ? ' active' : '' }}">
                <a class="nav-link" href="{{route('ktp')}}">Pengguna Alumni</a>
              </li>
              <li class="nav-item{{ request()->is('about') ? ' active' : '' }}">
                <a class="nav-link" href="{{route('about')}}">About</a>
              </li>
          </ul>
      </div>
  </nav>
</div>