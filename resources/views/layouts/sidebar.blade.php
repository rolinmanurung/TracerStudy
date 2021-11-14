<div class="col-lg-4 col-md-4 col-sm-6">
   <div class="sidebar blog-sidebar">
    <div class="sidebar-item categories">
      <h2>Login</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="Submit" class="btn btn-primary btn-sm btn-block">Submit</button>
      </form>
      <ul class="list-group pt-4">
        <li class="list-group-item"><a href="">asd</a></li>
        <li class="list-group-item">asd</li>
      </ul>
    </div>
  </div>
</div>