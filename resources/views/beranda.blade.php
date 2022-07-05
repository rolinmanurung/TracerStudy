@extends('layouts.master', ['title' => 'Beranda'])

@section('content')

<!-- Carousel -->
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
<!-- End for Carousel -->
<!-- Post Card Example -->
<div class="post pt-5">

    @auth
    @if(Auth::user()->role == "admin")
    <div>
        <a href="/posts/create" class="btn btn-primary my-3">New Post</a>
    </div>
    @endif
    @endauth
    <!-- untuk card ada  imagenya -->
    <!-- @foreach ($posts as $post)
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
            <p class="card-text"><small class="text-muted">{{ $post->updated_at->format("d M Y")}}</small></p>
            <a href="post/{{ $post->slug }}" class="text-finish">Read more</a>

          </div>

        </div>
      </div>
    </div>
    @endforeach -->
    <!-- -- -->



    @foreach ($posts as $post)

        <div class="card">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <div>
                    {{ Str::limit($post->body, 150) }}
                </div>
                <a href="/posts/{{ $post->slug }}">Read more</a>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <p class="card-text"><small class="text-muted">Last update at {{ $post->updated_at->diffForHumans()}}</small></p>
                    @auth   
                    @if(Auth::user()->role == "admin")
                    <a href="/posts/{{ $post->slug }}/edit" class="btn btn-success btn-sm">Edit</a>
                    @endif
                    @endauth
            </div>
        </div>

    @endforeach

    {{ $posts->links()}}

</div>


@endsection