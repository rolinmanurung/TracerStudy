@extends('layouts.master', ['title' => 'New Post'])

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<form action="/posts/store" method="post" autocomplete="off">
					@csrf	
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" id="title" class="form-control">

						@error('title') 	
							<div class="text-danger mt-2">
						    	{{ $message }}
							</div>
						@enderror

					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea name="body" id="body" class="form-control"></textarea>

						@error('body') 	
							<div class="text-danger mt-2">
						    	{{ $message }}
							</div>
						@enderror
						
					</div>

					<button type="submit" class="btn btn-primary">create</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection