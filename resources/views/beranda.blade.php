<?php $nama_halaman='Beranda' ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$nama_halaman}} - {{ config('app.name', '')}}</title>


    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- template -->
	<!-- Custom fonts for this template-->
	<link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  	<!-- Custom styles for this template-->
	<link href="{{asset('template/css/app.css')}}" rel="stylesheet">


	<!-- <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.min.css')}}"> -->


    <!-- style manual-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>

	<header>
		<!-- Navigation -->  
		<div class="navigation-wrapper">
			@include('layouts.navigation')
		</div>
		<!--  Navigation -->
	</header>

	<main>
		<div class="main-wrapper">
			<div class="top-wrapper bg-light">
				<div class="container">
					<div class="row">
						<!-- Carousel -->
						<div class="col-xl-8">
							<div class="container">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
			                      <!-- Indicators -->
			                      <ul class="carousel-indicators">
			                        <li data-target="#myCarousel" data-slide-to="0" class="active">
			                        </li>
			                        <li data-target="#myCarousel" data-slide-to="1"></li>
			                        <li data-target="#myCarousel" data-slide-to="2"></li>
			                      </ul>
			                      
			                      <!-- The slideshow -->
			                      <div class="carousel-inner">
			                        <div class="carousel-item active">
			                          <img src="{{('images/slide1.jpg')}}" alt="img-home1" width="1280" height="400">
			                        </div>
			                        <div class="carousel-item">
			                          <img src="{{('images/slide2.jpg')}}" alt="img-home2" width="1280" height="400">
			                        </div>
			                        <div class="carousel-item">
			                          <img src="{{('images/slide3.jpg')}}" alt="img-home3" width="1280" height="400">
			                        </div>
			                      </div>
			                      
			                      <!-- Left and right controls -->
			                      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
			                        <span class="carousel-control-prev-icon"></span>
			                      </a>
			                      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
			                        <span class="carousel-control-next-icon"></span>
			                      </a>
			                    </div>
							</div>
						</div>
						<!-- End for Carousel -->

						<!-- Form Login -->
						<div class="col-xl-4 mt-5">
							<form action="{{ route('login') }}" method="post">
								@csrf
								<h4>Login Alumni</h4>
							  	<div class="form-group">
								    <label for="email">Email address</label>
								    <input type="email" value="{{ old('email') }}" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">

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
								    <input type="checkbox" class="form-check-input" id="exampleCheck1">
								    <label class="form-check-label" for="exampleCheck1">Check me out</label>
							  	</div>
							  	<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
						<!-- End for Form Login -->
					</div>
				</div>
			</div>
			<!-- Part Post Beranda -->
			<div class="body-post-wrapper">
				<div class="container">
					<!-- Post Card -->
					<div class="row mt-5">
						<!-- Post -->
						<div class="col-xl-8">
							<div class="card">
							  <div class="card-header">
							    Featured
							  </div>
							  <div class="card-body">
							    <h5 class="card-title">Special title treatment</h5>
							    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							    <a href="#" class="btn btn-primary">Go somewhere</a>
							  </div>
							</div>
						</div>
						<!--  End for Post Card -->

						<!-- Side Navigation Post -->
						<div class="col-xl-4">
							<div class="card">
							  <img class="card-img-top d-block w-100" src="images/gambar1.jpg" alt="Card image cap">
							  <div class="card-body">
							    <h5 class="card-title">Card title</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
							  <ul class="list-group list-group-flush">
							    <li class="list-group-item">Cras justo odio</li>
							    <li class="list-group-item">Dapibus ac facilisis in</li>
							    <li class="list-group-item">Vestibulum at eros</li>
							  </ul>
							  <div class="card-body">
							    <a href="#" class="card-link">Card link</a>
							    <a href="#" class="card-link">Another link</a>
							  </div>
							</div>
						</div>
						<!-- End for Navigation Post -->
					</div>
				</div>
			</div>
			<!-- End for Post Beranda -->
		</div>
	</main>

	<footer class="bg-light">
		<footer class="sticky-footer bg-white">
			<div class="container">
            	@include('layouts.footer')
			</div>
		</div>
	</footer>


  <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('template/js/demo/chart-pie-demo.js')}}"></script>
</body>
</html>
