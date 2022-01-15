<?php $nama_halaman='Tracer Study' ?>
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Import Kuesioner Tracer Study') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="modal-body">
				<form action="#" method="POST" class="" autocomplete="off">
				  {{csrf_field()}}
				  <div class="container mt-3">
				    <p>Masukkan Nama, NIM, atau Email.:</p>
				     <table id="example" class="table table-striped table-bordered " style="width:100%">
				        <thead class="text-center">
				            <tr>
				                <th>Name</th>
				                <th>Email</th>
				                <th>Nim</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
				        <tbody>
				        @foreach ($users as $item)
				            <tr>
				                <td>{{ $item->name }}</td>
				                <td>{{ $item->email }}</td>
				                <td>{{ $item->alumni->nim }}</td>
				                <td class="text-center"><i class="far fa-list-alt" target="coba" data-toggle="tooltip" title="isi kuesioner!!"></i></td>
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


@endsection


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );    
</script>	