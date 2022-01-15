<?php $nama_halaman='Kuesioner Pengguna Alumni' ?>
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="alert alert-danger text-center" role="alert">
	  Kuesioner ini akan digunakan untuk kepentingan Politeknik Negeri Batam
		dan akan dijaga kerahasiaannya Terima Kasih.
	</div>

	@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
	@endif
	<div class="kuesioner-wrapper">
		<form action="{{ route('ktp.create') }}" method="POST" class="bg-light p-4">
			@csrf
			<h5 class="text-danger">Identitas Pengisi</h5>
			<div class="row">
				<div class="col-md-6 col-sm-11"> 
					<div class="form-group">
					  	<label>Nama</label>
					  	<input name="nama" type="text" class="form-control" placeholder="" autocomplete="off">
				  	</div>
				</div>
			  	<div class="col-md-6 col-sm-11">
					<div class="form-group">
					  	<label>Jabatan</label>
					  	<input name="jabatan" type="text" class="form-control" placeholder="">
					 </div>
				</div>	
				<div class="col-md-6 col-sm-11">
				  	<div class="form-group">
					  	<label>No Handphone</label>
					  	<input name="no_handphone" type="text" class="form-control " placeholder="">
				  	</div>
		  		</div>
		  	</div>
			<h5 class="text-danger">Identitas Perusahaan</h5>
			<div class="row">
				<div class="col-md-6 col-sm-11"> 
					<div class="form-group">
						<label>Nama Perusahaan</label>
						<input name="nama_perusahaan" type="text" class="form-control" placeholder="">
					</div>
				</div>
				<div class="col-md-6 col-sm-11">
				  	<div class="form-group">
					  	<label>Alamat Perusahaan</label>
					  	<input name="alamat_perusahaan" type="text" class="form-control " placeholder="">
				  	</div>
		  		</div>
				<div class="col-md-6 col-sm-11">
					<div class="form-group">
					    <label>Email Address</label>
					    <input name="email_perusahaan" type="email" class="form-control" id="" placeholder="name@example.com">
					</div>
				</div>	
			</div>
			<h5 class="text-danger">Identitas Alumni</h5>
			<div class="row">
				<div class="col-md-6 col-sm-11"> 
					<div class="form-group">
					  	<label">Nama Alumni</label>
					  	<input name="nama_alumni" type="text" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<h5>Informasi Khusus</h5>
			<hr>
			<div class="ktp">
				<p>1. Apakah alumni bekerja pada bidang yang sesuai dengan keahliannya?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp1" id="radios1" value="Ya">
				  <label class="form-check-label" for="radios1">
				    Ya
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp1" id="radios2" value="Tidak">
				  <label class="form-check-label" for="radios2">
				    Tidak
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>2. Bagaimana tingkat kehadiran alumni?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp2" id="radios3" value="Baik Sekali">
				  <label class="form-check-label" for="radios3">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp2" id="radios4" value="Baik">
				  <label class="form-check-label" for="radios4">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp2" id="radios5" value="Cukup">
				  <label class="form-check-label" for="radios5">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp2" id="radios6" value="Kurang">
				  <label class="form-check-label" for="radios6">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>3. Bagaimana tingkat disiplin alumni?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp3" id="radios7" value="Baik Sekali">
				  <label class="form-check-label" for="radios7">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp3" id="radios8" value="Baik">
				  <label class="form-check-label" for="radios8">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp3" id="radios9" value="Cukup">
				  <label class="form-check-label" for="radios9">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp3" id="radios10" value="Kurang">
				  <label class="form-check-label" for="radios10">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>4. Bagaimana kemampuan alumni dalam menyelesaikan pekerjaan atau tugas, apakah sesuai dengan target?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp4" id="radios11" value="Baik Sekali">
				  <label class="form-check-label" for="radios11">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp4" id="radios12" value="Baik">
				  <label class="form-check-label" for="radios12">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp4" id="radios13" value="Cukup">
				  <label class="form-check-label" for="radios13">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp4" id="radios14" value="Kurang">
				  <label class="form-check-label" for="radios14">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>5. Bagaimana tingkat kreatifitas dan kemampuan berinisiatif alumni?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp5" id="radios15" value="Baik Sekali">
				  <label class="form-check-label" for="radios15">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp5" id="radios16" value="Baik">
				  <label class="form-check-label" for="radios16">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp5" id="radios17" value="Cukup">
				  <label class="form-check-label" for="radios17">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp5" id="radios18" value="Kurang">
				  <label class="form-check-label" for="radios18">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>6. Bagaimana kemampuan berkomunikasi alumni?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp6" id="radios19" value="Baik Sekali">
				  <label class="form-check-label" for="radios19">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp6" id="radios20" value="Baik">
				  <label class="form-check-label" for="radios20">
				    Baik
				  </label>21
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp6" id="radios21" value="Cukup">
				  <label class="form-check-label" for="radios21">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp6" id="radios22" value="Kurang">
				  <label class="form-check-label" for="radios22">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>7. Bagaimana kemampuan alumni dalam beradaptasi dengan lingkungan kerja?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp7" id="radios23" value="Baik Sekali">
				  <label class="form-check-label" for="radios23">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp7" id="radios24" value="Baik">
				  <label class="form-check-label" for="radios24">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp7" id="radios25" value="Cukup">
				  <label class="form-check-label" for="radios25">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp7" id="radios26" value="Kurang">
				  <label class="form-check-label" for="radios26">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>8. Bagaimana kemampuan sosial alumni dengan lingkungan kerja?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp8" id="radios27" value="Baik Sekali">
				  <label class="form-check-label" for="radios27">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp8" id="radios28" value="Baik">
				  <label class="form-check-label" for="radios28">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp8" id="radios29" value="Cukup">
				  <label class="form-check-label" for="radios29">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp8" id="radios30" value="Kurang">
				  <label class="form-check-label" for="radios30">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>9. Bagaimana perilaku sopan santun alumni pada lingkungan kerja?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp9" id="radios31" value="Baik Sekali">
				  <label class="form-check-label" for="radios31">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp9" id="radios32" value="Baik">
				  <label class="form-check-label" for="radios32">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp9" id="radios33" value="Cukup">
				  <label class="form-check-label" for="radios33">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp9" id="radios34" value="Kurang">
				  <label class="form-check-label" for="radios34">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>10. Bagaimana perilaku berpakaian alumni pada lingkungan kerja?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp10" id="radios35" value="Baik Sekali">
				  <label class="form-check-label" for="radios35">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp10" id="radios36" value="Baik">
				  <label class="form-check-label" for="radios36">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp10" id="radios37" value="Cukup">
				  <label class="form-check-label" for="radios37">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp10" id="radios38" value="Kurang">
				  <label class="form-check-label" for="radios38">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>11. Bagaimana integritas atau etika dan moral alumni pada lingkungan kerja?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp11" id="radios39" value="Baik Sekali">
				  <label class="form-check-label" for="radios39">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp11" id="radios40" value="Baik">
				  <label class="form-check-label" for="radios40">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp11" id="radios41" value="Cukup">
				  <label class="form-check-label" for="radios41">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp11" id="radios42" value="Kurang">
				  <label class="form-check-label" for="radios42">
				    Kurang Baik
				  </label>
				</div>
			</div>
			
			<div class="ktp">
				<p>12. Bagaimana keahlian alumni berdasarkan bidang ilmu atau kompetensi utama?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp12" id="radios43" value="Baik Sekali">
				  <label class="form-check-label" for="radios43">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp12" id="radios44" value="Baik">
				  <label class="form-check-label" for="radios44">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp12" id="radios45" value="Cukup">
				  <label class="form-check-label" for="radios45">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp12" id="radios46" value="Kurang">
				  <label class="form-check-label" for="radios46">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>13. Bagaimana keahlian alumni dalam berbahasa inggris?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp13" id="radios47" value="Baik Sekali">
				  <label class="form-check-label" for="radios47">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp13" id="radios48" value="Baik">
				  <label class="form-check-label" for="radios48">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp13" id="radios49" value="Cukup">
				  <label class="form-check-label" for="radios49">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp13" id="radios50" value="Kurang">
				  <label class="form-check-label" for="radios50">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>14. Bagaimana keahlian alumni dalam penggunaan teknologi informasi?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp14" id="radios51" value="Baik Sekali">
				  <label class="form-check-label" for="radios51">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp14" id="radios52" value="Baik">
				  <label class="form-check-label" for="radios52">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp14" id="radios53" value="Cukup">
				  <label class="form-check-label" for="radios53">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp14" id="radios54" value="Kurang">
				  <label class="form-check-label" for="radios54">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>15. Bagaimana alumni dalam berkerjasama dengan team?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp15" id="radios55" value="Baik Sekali">
				  <label class="form-check-label" for="radios55">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp15" id="radios56" value="Baik">
				  <label class="form-check-label" for="radios56">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp15" id="radios57" value="Cukup">
				  <label class="form-check-label" for="radios57">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp15" id="radios58" value="Kurang">
				  <label class="form-check-label" for="radios58">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="ktp">
				<p>16. Bagaimana pengembangan diri dari alumni?</p>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp16" id="radios59" value="Baik Sekali">
				  <label class="form-check-label" for="radios59">
				    Baik Sekali
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp16" id="radios60" value="Baik">
				  <label class="form-check-label" for="radios60">
				    Baik
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp16" id="radios61" value="Cukup">
				  <label class="form-check-label" for="radios61">
				    Cukup
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="ktp16" id="radios62" value="Kurang">
				  <label class="form-check-label" for="radios62">
				    Kurang Baik
				  </label>
				</div>
			</div>

			<div class="modal-footer">
			    <button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
@endsection