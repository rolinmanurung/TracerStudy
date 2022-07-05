<div class="row text-center">
	<div class="col-xl-12">
		@if(session()->has('succes'))
			<div class="alert alert-success" role="alert">
			  {{session()->get('succes')}}
			</div>
		@endif
	</div>
	<div class="col-xl-12">
		@if(session()->has('error'))
			<div class="alert alert-success" role="alert">
			  {{session()->get('error')}}
			</div>
		@endif
	</div>
</div>

