<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://api.pexels.com/v1">
   <link rel="stylesheet" type="text/css" href="{{asset('fontawesome-free/css/all.min.css')}}">
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
   <script type="" src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script type="" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <title>@yield('title')</title>


    @yield('head')
  </head>
  <style type="text/css">

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      height: 5%;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
      min-height: 10%;
    }
    #myCarousel{
        height: 60%;
    }
  </style>
  <body>


    @include('layouts.navigation')

    <div class="section">
        <h1>
            @yield('page')
        </h1>
    </div>
        <div class="jumbotron"> 

        <div class="container">  
           <h1>TRACER STUDY<br>POLITEKNIK NEGERI BATAM</h1>
        </div>
        </div>

        <div class="container">
            <ol class="breadcrumb bg-transparent text-right bg-white rounded mb-5" style="opacity: 0.5">
                <li class="breadcrumb-item"><a href="/">@yield('breadcrumb1', 'Beranda')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
        </div>

            @yield('content')

    <footer class="footer heigth-500">
          <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <p class="text-light">&copy; {{ date("Y") }} Politeknik Negeri Batam</p>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <span class="text-light">Follow Us:</span>
                        <span class="">
                            <a href="https://www.instagram.com/polibatamofficial/"><i class="fab fa-instagram text-light"></i></a>
                            <a href="polibatam.ac.id"><i class="fab fa-facebook-square text-light "></i></a>
                        </span>
                    </div>
                </div>
            </div>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script type="" src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
    <script type="" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script> -->
    <script type="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVJ5mHpy6iqp04L0AESAUGbtkkL3xXrug&callback=initMap"></script>

    @yield('script')

    
  </body>
</html>