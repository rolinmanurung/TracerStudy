@extends('layouts.master')

@section('content')
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
    </div>
    <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    <table>
        <tr>
          <td>NIM</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->nim}}</td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->name}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->email}}</td>
        </tr>
        <tr>
          <td>No handphone</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->no_handphone}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->alamat}}</td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->jurusan}}</td>
        </tr>
        <tr>
          <td>Prodi</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->prodi}}</td>
        </tr>
        <tr>
          <td>Tahun masuk</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->tahun_masuk}}</td>
        </tr>
        <tr>
          <td>Tahun lulus</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->tahun_lulus}}</td>
        </tr>
        <tr>
          <td>IPK</td>
          <td>:&nbsp;</td>
          <td>{{Auth::User()->alumni->ipk}}</td>
        </tr>
    </table>
    <hr>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="alumni/{{Auth::User()->alumni->id}}" class="btn btn-primary ">Edit</a>
    </div>
  </div>
</div>
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kuesioner</h6>
    </div>
    <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    <div class="form-group">
        <label for="kta1">1. Apakah anda bekerja saat ini?</label>
        <input type="text" name="kta1" class="form-control" value="{{Auth::User()->alumni->kta->kta1}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta2">2. Nama Perusahaan Tempat Bekerja/Berwirausaha?</label>
        <input type="text" name="kta2" class="form-control" value="{{Auth::User()->alumni->kta->kta2}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta3">3. Skala Perusahaan Tempat Bekerja/Berwirausaha?</label>
        <input type="text" name="kta3" class="form-control" value="{{Auth::User()->alumni->kta->kta3}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta4">4. Jenis Perusahaan Tempat Bekerja/Berwirausaha</label>
        <input type="text" name="kta4" class="form-control" value="{{Auth::User()->alumni->kta->kta4}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta5">5. Level Pekerjaan alumni?</label>
        <input type="text" name="kta5" class="form-control" value="{{Auth::User()->alumni->kta->kta5}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta6">6. Kira-kira berapa pendapatan anda setiap bulannya?</label>
        <input type="text" name="kta6" class="form-control" value="{{Auth::User()->alumni->kta->kta6}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta7">7. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
        <input type="text" name="kta7" class="form-control" value="{{Auth::User()->alumni->kta->kta7}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta">8. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
        <input type="text" name="kta8" class="form-control" value="{{Auth::User()->alumni->kta->kta8}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta">9. Bagaimana anda menggambarkan situasi anda saat ini?</label>
        <input type="text" name="kta9" class="form-control" value="{{Auth::User()->alumni->kta->kta9}}" disabled>
    </div>
    <div class="form-group">
        <label for="kta">10. Sebutkan sumberdana dalam pembiayaan kuliah?</label>
        <input type="text" name="kta10" class="form-control" value="{{Auth::User()->alumni->kta->kta10}}" disabled>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="/alumni/{{Auth::User()->alumni->id}}/kuesioner" class="btn btn-primary ">Edit</a>
    </div>
  </div>
</div>
@endsection