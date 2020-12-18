@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container"> 
        <div class="row">
            <div class="col-md-9 col-xs-12 bg-dark">
                    <div id="myCarousel" class="carousel slide " data-ride="carousel">
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
                                  <img src="{{('img/img-home1.jpg')}}" alt="img-home1" width="1100" height="500">
                                </div>
                                <div class="carousel-item">
                                  <img src="{{('img/img-home2.jpg')}}" alt="img-home2" width="1100" height="500">
                                </div>
                                <div class="carousel-item">
                                  <img src="{{('img/img-home3.jpg')}}" alt="img-home3" width="1100" height="500">
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
            <div class="col-md-3 col-xs-12">
                <div class="card-body" style="width: 100%;">
                    <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
