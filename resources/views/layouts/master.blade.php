<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @isset($title) {{ $title }} | @endisset
            {{ config('app.name', '')}}
    </title>
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">

    @yield('customStyle')


</head>

<body>
    <header id="page-top">

        <!-- Navigation -->  
        <div class="navigation-wrapper">
            @include('layouts.navigation')
        </div>
        <!--  Navigation -->

    </header>

    <hr>

    <main class="blog">
        <!-- Alert -->
            @include('alert')
        <!-- End of Alert -->
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    @yield('content')
                </div>
                <div class="col-xl-4 blog-sidebar">
                   @include('layouts.sidebar')
                </div>
            </div>
        </div>
    </main>

    <hr>    

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        @include('layouts.footer')
    </footer>
    <!-- End of Footer -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- chart js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    @yield('customScript')
    
</body>
</html>
