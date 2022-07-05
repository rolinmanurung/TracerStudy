@extends('layouts.master')

@section('content')
<div class="card">
  <h5 class="card-header">Data Alumni</h5>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    <table>
        <tr>
          <td>Nama Pengisi</td>
          <td>:&nbsp;&nbsp;</td>
          <td>{{$ktp->nama}}</td>
        </tr>
        <tr>
          <td>Nama Perusahaan</td>
          <td>:&nbsp;&nbsp;</td>
          <td>{{$ktp->nama_perusahaan}}</td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td>:&nbsp;&nbsp;</td>
          <td>{{$ktp->jabatan}}</td>
        </tr>
        <tr>
          <td>No Handphone</td>
          <td>:&nbsp;&nbsp;</td>
          <td>{{$ktp->no_handphone}}</td>
        </tr>
        <tr>
          <td>Alamat Perusahaan</td>
          <td>:&nbsp;&nbsp;</td>
          <td>{{$ktp->alamat_perusahaan}}</td>
        </tr>
        <tr>
          <td>Email Perusahaan</td>
          <td>:&nbsp;&nbsp;</td>
          <td>{{$ktp->email_perusahaan}}</td>
        </tr>
        <tr>
          <td>Nama Alumni</td>
          <td>:&nbsp;&nbsp;</td>
          <td>{{$ktp->nama_alumni}}</td>
        </tr>
    </table>
    <a href="{{url('alumni/data')}}" class="btn btn-primary">Lihat Data Alumni</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Kuesioner</h5>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    <p class="card-text">Kuesioner ini akan di gunakan untuk meningkatkan dan mengembangkan lulusan Politeknik Negeri Batam.</p>
    <a href="{{url('alumni/kuesoiner')}}" class="btn btn-primary">Lihat Kuesioner</a>
  </div>
</div>
@endsection