<?php $nama_halaman='Beranda' ?>
@extends('layouts.master')

@section('content')

<div class="container py-5" id="page-top">
	<div class="row">
		<!-- Carousel -->
		<div class="col-xl-8 col-sm-12">
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
		<!-- End for Carousel -->

		<!-- Form Login -->
		<div class="col-xl-4 col-sm-12 py-5">
			<form action="{{ route('login') }}" method="post">
				@csrf
				<h4><i class="fas fa-xl fa-graduation-cap"></i> Login Alumni</h4>
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
			  	<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		<!-- End for Form Login -->
	</div>	
</div>
<div class="main-2-wrapper bg-dark">
	<div class="container py-5">
		<div class="row">
			<div class="col-xl-9 col-sm-12">
				<div class="card mb-3">
				  <img class="card-img-top " src="images/wisuda2.jpg" width="936" height="300" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-12">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="images/wisuda.jpeg" alt="Card image cap">
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
		</div>
	</div>
</div>



@endsection