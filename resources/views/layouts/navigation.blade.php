<nav id="navbar-home" class="navbar navbar-expand-xl|lg|md|sm  navbar-sm navbar-expand-md bg-white navbar-light sticky-top fixed-top">
<div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="{{('img/logo-poltek.png')}}" alt="logo" class="pr-5"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item{{request()->is('/') ? ' active' : ''}}">
                <a class="nav-link" href="{{url('/')}}">Beranda</a>
            </li>
            <li class="nav-item{{request()->is('tentang') ? ' active' : ''}}">
                <a class="nav-link" href="{{url('/tentang')}}">Tentang</a>
            </li>
            <li class="nav-item{{request()->is('laporan') ? ' active' : ''}}">
                <a class="nav-link" href="{{url('/laporan')}}">Laporan</a>
            </li>
            <li class="nav-item{{request()->is('kta') ? ' active' : ''}}">
                <a class="nav-link" href="{{url('/kta')}}">Kuesioner Alumni</a>
            </li>
            <li class="nav-item{{request()->is('ktp') ? ' active' : ''}}">
                <a class="nav-link" href="{{url('/ktp')}}">Kuesioner Pengguna Alumni</a>
            </li>
            <li class="nav-item{{request()->is('kontak') ? ' active' : ''}}">
                <a class="nav-link" href="{{url('/kontak')}}">Kontak</a>
            </li>
        </ul>
    </div>
</div>
</nav>