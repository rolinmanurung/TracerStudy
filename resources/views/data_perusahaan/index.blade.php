@extends('layouts.master')

@section('customStyle')
    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

    <!-- Page Wrapper -->
    <div id="page-top">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Perusahaan</h6>
            </div>

            <!-- Button export -->
            <div class="export ml-auto my-2 mx-3">
                <a href="{{route('ktp.export')}}" type="button" class="btn btn-success btn-sm my-2 mx-2"><i class="fas fa-file-excel px-1"></i>Export data</a>
            </div>
            <!-- End Of Button export -->

            <div class="card-body">
                <div class="table-responsive">
                    <p>Masukkan di pencarian Nama atau NIM,</p>
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr class="text-center">
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($ktp as $data)
                          <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jabatan}}</td>
                            <td class="text-center">
                                <a href="data_perusahaan/{{$data->id}}" class="btn btn-sm btn-info" type="button">Detail</a>
                                <a href="data_perusahaan/{{$data->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('yakin mau di hapus?')" type="button">Hapus</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection

@section('customScript')
    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>
@endsection