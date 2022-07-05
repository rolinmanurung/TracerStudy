@extends('layouts.master', ['title' => 'Alumni'])

@section('customStyle')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
          $("#hide").click(function(){
            $("#pertanyaan").hide();
          });
          $("#show").click(function(){
            $("#pertanyaan").show();
          });
          $("#showLainnya").click(function(){
            $("#lainnya").show();
          });
        });
    </script>

    <script>
      $("#showLainnya").click(function(){
        $("#lainnya").attr("type", "text");
      });
    </script>

@endsection

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kuesioner Tracer Study</h6>
    </div>
    <div class="card-body">
        <form id="dataAlumni" action="/alumni/{{ Auth::User()->alumni->id }}/update" method="POST">
            @csrf
            <!-- Awal dari info data alumni -->
            <div class="form-group">
                <h4>Data Alumni</h4>
                <small class="form-text text-danger">Info data alumni ini di dapat dari bagian akademik Politeknik Negeri Batam.</small>
            </div>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ Auth::User()->name}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" value="">{{ Auth::User()->alumni->alamat}}</textarea>
            </div>
            <div class="form-group">
                <label for="no_handphone">No Telephone</label>
                <input type="text" name="no_handphone" class="form-control" value="{{ Auth::User()->alumni->no_handphone}}">
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input name="nim" type="text" class="form-control" value="{{ Auth::User()->alumni->nim}}">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" value="{{ Auth::User()->email}}">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input name="jurusan" type="text" class="form-control" value="{{ Auth::User()->alumni->jurusan}}">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input name="prodi" type="text" class="form-control" value="{{ Auth::User()->alumni->prodi}}">
            </div>
            <div class="form-group">
                <label for="jenjang">Jenjang</label>
                <input name="jenjang" type="text" class="form-control" value="{{ Auth::User()->alumni->jenjang}}">
            </div>
            <div class="form-group">
                <label for="ipk">IPK<span>(ipk)</span></label>
                <input name="ipk" type="text" class="form-control" value="{{ Auth::User()->alumni->ipk}}">
            </div>
            <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input name="tahun_masuk" type="text" class="form-control" value="{{ Auth::User()->alumni->tahun_masuk}}">
            </div>
            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input name="tahun_lulus" type="text" class="form-control" value="{{ Auth::User()->alumni->tahun_lulus}}">
            </div>
            <!-- Akhir dari info data alumni -->
            
            <button type="submit" class="btn btn-primary mt-5">Submit</button>

        </form>
    </div> 
</div>
@endsection


@section('customJavascript')

@endsection