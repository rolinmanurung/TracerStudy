@extends('layouts.user')

@section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- alert -->
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
			  {{session('sukses')}}
		  </div>
		  @endif

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Perusahaan</h6>
            </div>
              <form action="manajemen-data-perusahaan/{{$perusahaan->id}}/update" method="POST">
	            <div class="card-body">
			        		{{csrf_field()}}
						  <div class="form-group">
						  	<label for="nama">Nama</label>
						  	<input name="nama" type="text" class="form-control" placeholder="" value="{{$perusahaan->nama}}">
						  </div>
						  <div class="form-group">
						  	<label for="n_p">Nama Perusahaan</label>
						  	<input name="n_p" type="text" class="form-control" placeholder="" value="{{$perusahaan->n_p}}">
						  </div>
						  <div class="form-group">
						  	<label for="jabatan">Jabatan</label>
						  	<input name="jabatan" type="text" class="form-control" placeholder="" value="{{$perusahaan->jabatan}}">
						  </div>
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$perusahaan->email}}">
						  </div>
						  <div class="form-group">
						  	<label for="no_telp">No Telephone</label>
						  	<input name="no_telp" type="text" class="form-control" placeholder="08**********" value="{{$perusahaan->no_telp}}">
						  </div>
						  <div class="form-group">
						  	<label for="nama">Nama Alumni</label>
						  	<input name="n_a" type="text" class="form-control" placeholder="" value="{{$perusahaan->n_a}}">
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp1" class="">Apakah Alumni bekerja pada bidang yang sesuai dengan keahliannya?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="kta1" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp1}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp2" class="">Tingkat Kehadiran Alumni?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp2" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp2}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp3" class="">Tinkat Kedisiplinan Alumni?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp3" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp3}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp4" class="">Kemampuan menyelesaikan pekerjaan/tugas sesuai dengan target?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp4" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp4}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp5" class="">Tingkat kreatifitas dan kemampuan berinisiatif?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp6" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp4}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp6" class="">Kemampuan berkomunikasi?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp6" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp6}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp7" class="">Kemampuan beradaptasi dengan lingkungan kerja?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp7" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp7}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp8" class="">Kemampuan bersosialisasi dalam lingkungan kerja?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp8" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp7}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp9" class="">Pribadi yang sopan santun?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp9" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp9}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp10" class="">Kerapian dalam berbusana?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp10" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp10}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp11" class="">Integritas (etika dan moral)?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp11" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp11}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp12" class="">Keahlian berdasarkan bidang ilmu (kompetensi utama)?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp12" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp12}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp13" class="">Keahlian Bahasa Inggris?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp13" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp13}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp14" class="">Penggunaan teknologi informasi?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp14" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp14}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp15" class="">Kerja sama team?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp15" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp15}}" disabled>
			                  </div>
			                </div>
						  </div>
						  <div class="form-group">
						  	<div class="row pt-3">
			                  <div class="col-md-6 col-sm-12">
			                    <label for="ktp16" class="">Pengembangan diri?</label>
			                  </div>
			                  <div class="col-md-6 col-sm-12">
			                    <input name="ktp16" type="text" class="form-label w-100" placeholder="" value="{{$perusahaan->ktp16}}" disabled>
			                  </div>
			                </div>
						  </div>

						  <!-- <div class="form-group">
						    <label for="exampleFormControlSelect1">Example select</label>
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>1</option>
						      <option>2</option>
						      <option>3</option>
						      <option>4</option>
						      <option>5</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect2">Example multiple select</label>
						    <select multiple class="form-control" id="exampleFormControlSelect2">
						      <option>1</option>
						      <option>2</option>
						      <option>3</option>
						      <option>4</option>
						      <option>5</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Example textarea</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div> -->
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-info">Update</button>
				      </div>
				</form>
            </div>
          </div>

        </div>

@endsection