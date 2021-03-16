@extends('layouts.user')
@section('title','Perusahaan')
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
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

              	<!-- Button trigger modal -->
              	<button type="button" class="btn btn-primary mb-2 text-right" data-toggle="modal" data-target="#exampleModal">
             		Tambah Data
          		</button>
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nama Perusahaan</th>
                      <th>Jabatan</th>
                      <th>Email</th>
                      <th>No Telephone</th>
                      <th>Nama Alumni</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data_perusahaan as $perusahaan)
                  	<tr>
                  	  <td>{{$perusahaan->id}}</td>
                      <td>{{$perusahaan->nama}}</td>
                      <td>{{$perusahaan->n_p}}</td>
                      <td>{{$perusahaan->jabatan}}</td>
                      <td>{{$perusahaan->email}}</td>
                      <td>{{$perusahaan->no_telp}}</td>
                      <td>{{$perusahaan->n_a}}</td>
                      <td>
                      	<a href="manajemen-data-perusahaan/{{$perusahaan->id}}/edit"><i class="fas fa-edit text-info"></i></a>
                      	<a href="manjemen-data-perusahaan/{{$perusahaan->id}}/delete" onclick=" return confirm('yakin mau dihapus?')"><i class="fas fa-trash-alt text-danger"></i></a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nama Perusahaan</th>
                      <th>Jabatan</th>
                      <th>Email</th>
                      <th>No Telephone</th>
                      <th>Nama Alumni</th>
                      <th>Aksi</th>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

        </div>


        <!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perusahaan</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        	<form action="/data-perusahaan/create" method="POST">
		        		{{csrf_field()}}
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
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
				</form>
		    </div>
		  </div>
		</div>
@endsection