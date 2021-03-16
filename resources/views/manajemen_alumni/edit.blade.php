@extends('layouts.user')
@section('title','Alumni')

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
              <h6 class="m-0 font-weight-bold text-primary">Edit Data alumni</h6>
            </div>
              <form action="manajemen-data-alumni/{{$alumni->id}}/update" method="POST">
	            <div class="card-body">
			        		{{csrf_field()}}
						  <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" placeholder="" value="{{$alumni->nama}}">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="" rows="3" value="">{{$alumni->alamat}}</textarea>
              </div>
               <div class="form-group">
                <label for="no_telp">No Telephone</label>
                <input name="no_telp" type="text" class="form-control" placeholder="08**********" value="{{$alumni->no_telp}}">
              </div>
               <div class="form-group">
                <label for="nim">NIM</label>
                <input name="nim" type="text" class="form-control" placeholder="" value="{{$alumni->nim}}">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="" placeholder="name@example.com" value="{{$alumni->email}}">
              </div>
              <div class="form-group">
                <label for="prodi">prodi</label>
                <input name="prodi" type="text" class="form-control" placeholder="" value="{{$alumni->prodi}}">
              </div>
              <div class="form-group">
                <label for="jenjang">Jenjang</label>
                <select name="jenjang" class="form-control" id="" value="{{$alumni->jenjang}}">
                  <option>D3</option>
                  <option>D4</option>
                </select>
              </div>
              <div class="form-group">
                <label for="t-masuk">Tahun Masuk</label>
                <select name="t_masuk" class="form-control" id="" value="{{$alumni->t_masuk}}">
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                </select>
              </div>
              <div class="form-group">
                <label for="t_lulus">Tahun Lulus</label>
                <select name="t_lulus" class="form-control" id="" value="{{$alumni->t_lulus}}">
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                </select>
              </div>
              <div class="form-group">
                <label for="ipk">IPK</label>
                <input name="ipk" type="text" class="form-control" placeholder="" value="{{$alumni->ipk}}">
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta1" class="">Apakah anda bekerja saat ini <span class="font-italic ">(Termasuk kerja sambilan dan wirausaha)</span></label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta1" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta1}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta2" class="">Nama Perusahaan Tempat Bekerja/Berwirausaha</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta2" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta2}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta3" class="">Skala Perusahaan Tempat Bekerja/Berwirausaha</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta3" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta3}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta4" class="">Jenis Perusahaan Tempat Bekerja/Berwirausaha</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta4" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta4}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta5" class="">Level Pekerjaan</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta5" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta5}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta6" class="">Kira-kira berapa pendapatan anda setiap bulannya?</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta6" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta6}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta7" class="">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta7" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta7}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta8" class="">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta8" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta8}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta9" class="">Bagaimana anda menggambarkan situasi anda saat ini?</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta9" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta9}}" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row pt-3">
                  <div class="col-md-6 col-sm-12">
                    <label for="kta10" class="">Sebutkan sumberdana dalam pembiayaan kuliah?</label>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <input name="kta10" type="text" class="form-label w-100" placeholder="" value="{{$alumni->kta10}}" disabled>
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
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
				</form>
            </div>
          </div>

        </div>

@endsection