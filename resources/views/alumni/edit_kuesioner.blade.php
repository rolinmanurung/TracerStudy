@extends('layouts.master', ['title' => 'Data Alumni'])

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kuesioner Tracer Study</h6>
    </div>
    <div class="card-body">
		<form action="/alumni/{{Auth::User()->id}}/update" method="POST">
			@csrf
	        <!-- Awal dari info data alumni -->
	        <div class="form-group">
	            <h4>Data Alumni</h4>
	            <small class="form-text text-danger">Info data alumni ini di dapat dari bagian akademik Politeknik Negeri Batam.</small>
	        </div>
	        <div class="form-group">
	            <label for="nama">Nama</label>
	            <input type="text" name="name" class="form-control" value="{{Auth::User()->alumni->user->name}}">
	            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
	        </div>
	        <div class="form-group">
	            <label for="alamat">Alamat</label>
	            <textarea name="alamat" class="form-control" value="">{{Auth::User()->alumni->alamat}}</textarea>
	        </div>
	        <div class="form-group">
	            <label for="no_handphone">No Telephone</label>
	            <input type="text" name="no_handphone" class="form-control" value="{{Auth::User()->alumni->no_handphone}}">
	        </div>
	        <div class="form-group">
	            <label for="nim">NIM</label>
	            <input name="nim" type="text" class="form-control" value="{{Auth::User()->alumni->nim}}">
	        </div>
	        <div class="form-group">
	            <label for="email">Email address</label>
	            <input name="email" type="email" class="form-control" value="{{Auth::User()->alumni->user->email}}">
	        </div>
	        <div class="form-group">
	            <label for="prodi">Prodi</label>
	            <input name="prodi" type="text" class="form-control" value="{{Auth::User()->alumni->prodi}}">
	        </div>
	        <div class="form-group">
	            <label for="jenjang">Jenjang</label>
	            <input name="jenjang" type="text" class="form-control" value="{{Auth::User()->alumni->jenjang}}">
	        </div>
	        <div class="form-group">
	            <label for="ipk">IPK<span>(ipk)</span></label>
	            <input name="ipk" type="text" class="form-control" value="{{Auth::User()->alumni->ipk}}">
	        </div>
	        <div class="form-group">
	            <label for="tahun_masuk">Tahun Masuk</label>
	            <input name="tahun_masuk" type="text" class="form-control" value="{{Auth::User()->alumni->tahun_masuk}}">
	        </div>
	        <div class="form-group">
	            <label for="tahun_lulus">Tahun Lulus</label>
	            <input name="tahun_lulus" type="text" class="form-control" value="{{Auth::User()->alumni->tahun_lulus}}">
	        </div>
	        <!-- Akhir dari info data alumni -->

	      	<button type="submit" class="btn btn-primary">Submit</button>

	    </form>
	</div>
</div>
@endsection