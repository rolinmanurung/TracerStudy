@extends('layouts.master')

@section('customStyle')
    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Kuesioner Perusahaan {{$ktp->nama_perusahaan}}</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4" style="width: 720;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Tables Kuesioner Perusahaan</h6>
            </div>

            <div class="card-body">
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
                <hr />
                <div class="data_ktp">
                    <div class="form-group">
                        <label for="no_handphone">Apakah alumni bekerja pada bidang yang sesuai dengan keahliannya?</label>
                        <input type="text" name="ktp1" class="form-control" value="{{$ktp->ktp1}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana tingkat kehadiran alumni?</label>
                        <input type="text" name="ktp2" class="form-control" value="{{$ktp->ktp2}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana tingkat disiplin alumni?</label>
                        <input type="text" name="ktp3" class="form-control" value="{{$ktp->ktp3}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana kemampuan alumni dalam menyelesaikan pekerjaan atau tugas, apakah sesuai dengan target?</label>
                        <input type="text" name="ktp4" class="form-control" value="{{$ktp->ktp4}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana tingkat kreatifitas dan kemampuan berinisiatif alumni?</label>
                        <input type="text" name="kta5" class="form-control" value="{{$ktp->ktp5}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana kemampuan berkomunikasi alumni?</label>
                        <input type="text" name="ktp6" class="form-control" value="{{$ktp->ktp6}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana kemampuan alumni dalam beradaptasi dengan lingkungan kerja?</label>
                        <input type="text" name="ktp7" class="form-control" value="{{$ktp->ktp7}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana kemampuan sosial alumni dengan lingkungan kerja?</label>
                        <input type="text" name="ktp8" class="form-control" value="{{$ktp->ktp8}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana perilaku sopan santun alumni pada lingkungan kerja?</label>
                        <input type="text" name="ktp9" class="form-control" value="{{$ktp->ktp9}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana perilaku berpakaian alumni pada lingkungan kerja?</label>
                        <input type="text" name="ktp10" class="form-control" value="{{$ktp->ktp10}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana integritas atau etika dan moral alumni pada lingkungan kerja?</label>
                        <input type="text" name="ktp11" class="form-control" value="{{$ktp->ktp11}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana tingkat kreatifitas dan kemampuan berinisiatif alumni?</label>
                        <input type="text" name="kta1" class="form-control" value="{{$ktp->ktp1}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana keahlian alumni berdasarkan bidang ilmu atau kompetensi utama?</label>
                        <input type="text" name="ktp12" class="form-control" value="{{$ktp->ktp12}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana keahlian alumni dalam berbahasa inggris?</label>
                        <input type="text" name="ktp13" class="form-control" value="{{$ktp->ktp13}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana keahlian alumni dalam penggunaan teknologi informasi?</label>
                        <input type="text" name="ktp14" class="form-control" value="{{$ktp->ktp14}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana alumni dalam berkerjasama dengan team?</label>
                        <input type="text" name="ktp15" class="form-control" value="{{$ktp->ktp15}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">Bagaimana pengembangan diri dari alumni?</label>
                        <input type="text" name="ktp16" class="form-control" value="{{$ktp->ktp16}}" disabled>
                    </div>
                </div>
                <div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button type="button" class="btn btn-outline-primary"><a href="{{ URL::previous() }}">Kembali</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>


@endsection

@section('customScript')
    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>
@endsection