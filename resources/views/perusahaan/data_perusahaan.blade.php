<?php $nama_halaman='Data Perusahaan' ?>
@extends('layouts.user.app')

@section('content')
	
	<!-- Page Wrapper -->
    <div id="page-top">

        <!-- Begin Page Content -->
        <div class="container-fluid">

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

        		<!-- Button trigger modal -->
        		<div class="button-trigger ml-auto my-2 mx-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahDataModal">
        		</div>
          		<!-- End Of Button trigger modal -->

                <div class="card-body">
                    <div class="table-responsive">
                        <p>Masukkan di pencarian Nama atau NIM,</p>
		                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
		                      <tr class="text-center">
		                        <th>No</th>
		                        <th>Nama</th>
		                        <th>Jabatan</th>
		                        <th>Aksi</th>
		                      </tr>
		                    </thead>
		                    <tbody id="myTable">
		                    @foreach($perusahaan as $perusahaan)
		                      <tr>
		                        <td>{{$perusahaan->id}}</td>
		                        <td>{{$perusahaan->user->name}}</td>
		                        <td>{{$perusahaan->jabatan}}</td>
		                        <td class="text-center">
		                          <a href="/data-perusahaan/{{$perusahaan->id}}/edit"><i class="fas fa-edit text-info"></i></a>
                      				<a href="/data-perusahaan/{{$perusahaan->id}}/delete" onclick=" return confirm('yakin mau dihapus?')"><i class="fas fa-trash-alt text-danger"></i></a>
		                        </td>
		                      </tr>
		                    @endforeach
		                    </tbody>
		                </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Perusahaan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('perusahaan.create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="n_p">Nama Perusahaan</label>
                    <input name="n_p" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input name="jabatan" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telephone</label>
                    <input name="no_telp" type="text" class="form-control " placeholder="08**********">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Alumni</label>
                    <input name="n_a" type="text" class="form-control" placeholder="">
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Modal -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection