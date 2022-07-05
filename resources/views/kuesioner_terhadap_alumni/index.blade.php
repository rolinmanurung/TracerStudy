@extends('layouts.master')

@section('customStyle')
    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
  <!-- DataTales Example -->
  <div class="card shadow">
      <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">Data Tracer Study Example</h6>
      </div>
      <!-- <div class="card-body">
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
          @endif
      </div> -->
      <div class="modal-body">
        <form action="#" method="POST" class="" autocomplete="off">
          {{csrf_field()}}
            <div class="container">
              <p>Masukkan di pencarian Nama atau NIM,</p>
              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                  @foreach( $kta as $kta )
                    <tr>
                      <td>{{$kta->alumni->user->name}}</td>
                      <td>{{$kta->alumni->nim}}</td>
                      <td class="text-center">
                        <a href="/kta/{{$kta->id}}"><i class="far fa-list-alt" target="coba" data-toggle="tooltip" title="isi kuesioner!!"></i></a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
              </table>
            </div>
        </form>
      </div>
  </div>
@endsection

@section('customScript')
    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>
@endsection