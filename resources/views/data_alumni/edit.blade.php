@extends('layouts.master', ['title' => 'Data Alumni'])

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
        <form id="dataAlumni" action="/data_alumni/{{ $alumni->id }}/update" method="POST">
            @csrf
            <!-- Awal dari info data alumni -->
            <div class="form-group">
                <h4>Data Alumni</h4>
                <small class="form-text text-danger">Info data alumni ini di dapat dari bagian akademik Politeknik Negeri Batam.</small>
            </div>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{$alumni->user->name}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" value="">{{$alumni->alamat}}</textarea>
            </div>
            <div class="form-group">
                <label for="no_handphone">No Telephone</label>
                <input type="text" name="no_handphone" class="form-control" value="{{$alumni->no_handphone}}">
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input name="nim" type="text" class="form-control" value="{{$alumni->nim}}">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" value="{{$alumni->user->email}}">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input name="jurusan" type="text" class="form-control" value="{{ $alumni->jurusan}}">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input name="prodi" type="text" class="form-control" value="{{$alumni->prodi}}">
            </div>
            <div class="form-group">
                <label for="jenjang">Jenjang</label>
                <input name="jenjang" type="text" class="form-control" value="{{$alumni->jenjang}}">
            </div>
            <div class="form-group">
                <label for="ipk">IPK<span>(Indeks Prestasi Kumulatif)</span></label>
                <input name="ipk" type="text" class="form-control" value="{{$alumni->ipk}}">
            </div>
            <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input name="tahun_masuk" type="text" class="form-control" value="{{$alumni->tahun_masuk}}">
            </div>
            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input name="tahun_lulus" type="text" class="form-control" value="{{$alumni->tahun_lulus}}">
            </div>
            <!-- Akhir dari info data alumni -->

            <!-- kuesioner -->
            <hr>
            <h3>Kuesioner</h3>
            <hr>
            <div class="form-group">
                <label for="kta1">1. Apakah anda bekerja saat ini?</label>
                <input type="text" name="kta1" class="form-control" value="{{$alumni->kta->kta1}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta2">2. Nama Perusahaan Tempat Bekerja/Berwirausaha?</label>
                <input type="text" name="kta2" class="form-control" value="{{$alumni->kta->kta2}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta3">3. Skala Perusahaan Tempat Bekerja/Berwirausaha?</label>
                <input type="text" name="kta3" class="form-control" value="{{$alumni->kta->kta3}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta4">4. Jenis Perusahaan Tempat Bekerja/Berwirausaha</label>
                <input type="text" name="kta4" class="form-control" value="{{$alumni->kta->kta4}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta5">5. Level Pekerjaan alumni?</label>
                <input type="text" name="kta5" class="form-control" value="{{$alumni->kta->kta5}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta6">6. Kira-kira berapa pendapatan anda setiap bulannya?</label>
                <input type="text" name="kta6" class="form-control" value="{{$alumni->kta->kta6}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta7">7. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
                <input type="text" name="kta7" class="form-control" value="{{$alumni->kta->kta7}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta">8. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
                <input type="text" name="kta8" class="form-control" value="{{$alumni->kta->kta8}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta">9. Bagaimana anda menggambarkan situasi anda saat ini?</label>
                <input type="text" name="kta9" class="form-control" value="{{$alumni->kta->kta9}}" disabled>
            </div>
            <div class="form-group">
                <label for="kta">10. Sebutkan sumberdana dalam pembiayaan kuliah?</label>
                <input type="text" name="kta10" class="form-control" value="{{$alumni->kta->kta10}}" disabled>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>

        </form>
    </div> 
</div>
@endsection


@section('customJavascript')

@endsection