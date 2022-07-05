@extends('layouts.master')

@section('customStyle')
    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    
<!-- Page Wrapper -->
<div id="page-top">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah data Alumni</h6>
        </div>

        <div class="card-body">
            <form action="data_alumni/store" method="POST">
                @csrf
                <!-- Awal dari info data alumni -->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="no_handphone">No Telephone</label>
                    <input type="text" name="no_handphone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input name="nim" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                 <div class="form-group">
                    <label for="prodi">Jurusan</label>
                    <input name="jurusan" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input name="prodi" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kta3">Jenjang</label>
                    <select class="form-control" name="kta3">
                        <option value="" hidden selected>Pilih</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input name="ipk" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tahun_masuk">Tahun Masuk</label>
                    <input name="tahun_masuk" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tahun_lulus">Tahun Lulus</label>
                    <input name="tahun_lulus" type="text" class="form-control">
                </div>
                <!-- Akhir dari info data alumni -->
                
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function(){
      $("#datepicker").datepicker({
         format: "yyyy",
         viewMode: "years", 
         minViewMode: "years",
         autoclose:true
      });   
    })
</script>
@endsection