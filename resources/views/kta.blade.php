@extends('layouts.app')
@section('title','Kuesioner Alumni')


@section('content')

<div class="wrapper wrapper-fluid">
    <div class="jumbotron  bg-light ">
        <h2 class="text-center shadow bg-info pt-4 pb-4">Kusioner Terhadap Alumni</h2>
        @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
          @endif
            <div class="modal-body">
                <form action="#" method="POST" class="" autocomplete="off">
                {{csrf_field()}}
                <div class="container mt-3">
                  <p>Masukkan Nama, NIM, atau Email.:</p>  
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  <br>
                  <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                  @foreach($data_alumni as $alumni)
                    <tr>
                      <td>{{$alumni->id}}</td>
                      <td>{{$alumni->nama}}</td>
                      <td>{{$alumni->nim}}</td>
                      <td>{{$alumni->email}}</td>
                      <td class="text-center">
                        <a href="/kta/{{$alumni->id}}/kuesioner"><i class="far fa-list-alt" target="coba" data-toggle="tooltip" title="isi kuesioner!!"></i></a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
                </form>


            </div>
            </div>
        </div>
        </div>  
        
    </div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


@endsection