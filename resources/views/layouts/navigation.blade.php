<div class="container">
  <nav id="nav" class="navbar navbar-expand-lg navbar-light">
  <img src="{{asset('images/logopoltek.png')}}" alt="logo politeknik negeri batam" width="200" height="55" class="navbar-brand">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-center"> 
              <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                <a class="nav-link" href="{{url('/')}}">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item{{ request()->is('kta') ? ' active' : '' }}">
                <a class="nav-link" href="{{route('kta')}}">Tracer Study</a>
              </li>
              <li class="nav-item{{ request()->is('laporan') ? ' active' : '' }}">
                <a class="nav-link" href="{{url('laporan')}}">Laporan</a>
              </li>
              <li class="nav-item{{ request()->is('ktp') ? ' active' : '' }}">
                <a class="nav-link" href="{{route('ktp')}}">Pengguna Alumni</a>
              </li>
          </ul>
      </div>
  </nav>
</div>




