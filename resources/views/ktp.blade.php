@extends('layouts.app')
@section('title','Kuesioner Perusahaan')


@section('content')


<div class="wrapper wrapper-fluid">
	<div class="jumbotron  bg-light ">
		<div class="jumbotron bg-light text-justify text-center border-dark shadow">
			Semua data yang di isi akan dijaga kerahasiaannya
		dan hanya digunakan untuk kepentingan Politeknik Negeri Batam.
		</div>
		<hr class="bg-info">
		@if(session('sukses'))
          <div class="alert alert-success" role="alert">
			  {{session('sukses')}}
		  </div>
		  @endif
			<div class="modal-body">
		        	<form action="/ktp/create" method="POST" class="" autocomplete="off">
		        		{{csrf_field()}}
		        		<h5 class="text-danger">Identitas Pengisi</h5>
		        		<div class="row">
		        			<div class="col-md-6 col-sm-12"> 
		        				<div class="form-group">
								  	<label for="nama">Nama</label>
								  	<input name="nama" type="text" class="form-control" placeholder="">
							  	</div>
							  	<div class="form-group">
					  	<label for="no_telp">No Telephone</label>
					  	<input name="no_telp" type="text" class="form-control " placeholder="08**********">
					  </div>
		        			</div>
		        			<div class="col-md-6 col-sm-12">
		        				<div class="form-group">
								  	<label for="jabatan">Jabatan</label>
								  	<input name="jabatan" type="text" class="form-control" placeholder="">
								 </div>
		        			</div>	
		        		</div>
		        		<h5 class="text-danger">Identitas Perusahaan</h5>
		        		<div class="row">
		        			<div class="col-md-6 col-sm-12"> 
		        				<div class="form-group">
									<label for="n_p">Nama Perusahaan</label>
									<input name="n_p" type="text" class="form-control" placeholder="">
								</div>
		        			</div>
		        			<div class="col-md-6 col-sm-12">
		        				<div class="form-group">
								    <label for="email">Email address</label>
								    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
								</div>
		        			</div>	
		        		</div>
		        		<h5 class="text-danger">Identitas Alumni</h5>
		        		<div class="row">
		        			<div class="col-md-6 col-sm-12"> 
		        				<div class="form-group">
								  	<label for="nama">Nama Alumni</label>
								  	<input name="n_a" type="text" class="form-control" placeholder="">
								</div>
		        			</div>
		        			<div class="col-md-6 col-sm-12">
		        				
		        			</div>	
		        		</div>
		        		<div class=" shadow pt-5 bg-white border-dark ">
		        			<div id="" class="informasi-khusus table-responsive pl-3">
		        				<h5 class="">Informasi Khusus</h5>
		        				<div class="row pt-2">
									<div class="form-group col-md-6 col-sm-12">
								  	 <label for="usr" class=""><span class="text-danger">*</span>Apakah Alumni bekerja pada bidang yang sesuai dengan keahliannya?</label>
								  	 </div>
								  	 <div class="form-check pl-5 col-md-3 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp1" value="Ya">Ya
							  			</label>
									</div>
									<div class="form-check pl-5 col-md-3 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp1" value="Tidak">Tidak
							  			</label>
									</div>
								</div>

								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Tingkat Kehadiran Alumni?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp2" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp2" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp2" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp2" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Tinkat Kedisiplinan Alumni?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp3" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp3" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp3" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp3" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Kemampuan menyelesaikan pekerjaan/tugas sesuai dengan target?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp4" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp4" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp4" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp4" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Tingkat kreatifitas dan kemampuan berinisiatif?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp5" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp5" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp5" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp5" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Kemampuan berkomunikasi?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp6" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp6" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp6" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp6" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Kemampuan beradaptasi dengan lingkungan kerja?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp7" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp7" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp7" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp7" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Kemampuan bersosialisasi dalam lingkungan kerja?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp8" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp8" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp8" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp8" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Pribadi yang sopan santun?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp9" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp9" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp9" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp9" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Kerapian dalam berbusana?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp10" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp10" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp10" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp10" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Integritas (etika dan moral)?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp11" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp11" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp11" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp11" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Keahlian berdasarkan bidang ilmu (kompetensi utama)?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp12" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp12" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp12" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp12" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Keahlian Bahasa Inggris?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp13" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp13" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp13" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp13" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Penggunaan teknologi informasi?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp14" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp14" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp14" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp14" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Kerja sama team?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp15" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp15" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp15" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp15" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
								<hr>
								<div class="row pt-2">
									<div class="form-group col-lg-3 col-md-12 col-sm-12">
								  		<label for="usr" class=""><span class="text-danger">*</span>Pengembangan diri?</label>
								    </div>
									<hr>	
								  	<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp16" value="Baik Sekali">Baik Sekali 
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp16" value="Baik">Baik
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp16" value="Cukup">Cukup
							  			</label>
									</div>
									<div class="form-check col-lg-2 col-md-12 pl-5 col-sm-12">
							  			<label class="form-check-label">
							    			<input type="radio" class="form-check-input" name="ktp16" value="Kurang">Kurang
							  			</label>
									</div>
								</div>
						 		<hr>
		                    </div>
		                </div>
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-primary">Simpan</button>
				      </div>
				  	</div>
			      

				</form>
		    </div>
			
		</div>	
		
	</div>
</div>

@endsection