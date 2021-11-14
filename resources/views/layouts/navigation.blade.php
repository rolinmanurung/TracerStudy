<div class="container">
  <nav class="navbar navbar-expand-md navbar-light bg-white">
    <a class="navbar-brand" href="/"><img src=" images/logoPolibatam.png" alt="logoPolibatam"  width="30" height="26" class="d-inline-block align-top"> Politeknik Negeri Batam</a>
    <button 
    class="navbar-toggler" 
    type="button" data-toggle="collapse" 
    data-target="#navbarSupportedContent"     
    aria-controls="navbarSupportedContent" 
    aria-expanded="false" 
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto text-center"> 
        <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
          <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item{{ request()->is('tracerstudy') ? ' active' : '' }}">
          <a class="nav-link" href="/tracerstudy">Tracer Study</a>
        </li>
        <li class="nav-item{{ request()->is('laporan') ? ' active' : '' }}">
          <a class="nav-link" href="/laporan">Laporan</a>
        </li>
        <li class="nav-item{{ request()->is('kpa') ? ' active' : '' }}">
          <a class="nav-link" href="/kpa">Pengguna Alumni</a>
        </li>
        <li class="nav-item{{ request()->is('about') ? ' active' : '' }}">
          <a class="nav-link" href="/about">About</a>
        </li>
      </ul>
    </div>
  </nav>
</div>  