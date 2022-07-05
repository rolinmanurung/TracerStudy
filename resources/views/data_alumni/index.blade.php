@extends('layouts.master', ['title' =>'Data Alumni'])

@section('customStyle')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    
@endsection

@section('content')

<!-- Page Wrapper -->
<div id="page-top">

    <!-- Content Row -->
    
    <div class="row">

        <!-- Jumlah Alumni Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Alumni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_alumni}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-xl fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <!-- Earnings (Monthly) Card Example -->
       <!--  <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
    </div>  

    <div class="row">

        <!-- Jumlah Kuesinoer Alumni Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kuesinoer Alumni
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_kta}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Pengisi Kuesioner Perusahaan -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                               Jumlah Pengisi Kuesioner Perusahaan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_ktp }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content Row -->


    <!-- content chart row -->
    <div class="row">
        
        <!-- Donut Chart -->
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Waktu Tunggu Alumni</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div>
                      <canvas id="myChart"></canvas>
                    </div>
                    <script type="text/javascript">
                        const data = {
                          labels: {!!json_encode($label_lama_waktu_tunggu) !!},
                          datasets: [{
                            label: 'My First Dataset',
                            data: {!!json_encode($data_lama_waktu_tunggu) !!},
                            backgroundColor: [
                              'rgb(255, 99, 12)',
                              'rgb(255, 99, 132)',
                              'rgb(54, 162, 235)',
                              'rgb(255, 205, 86)'
                            ],
                            hoverOffset: 4
                          }]
                        };

                        const config = {
                            type: 'doughnut',
                            data: data,
                            options: {}
                          };
                        const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                        );
                    </script>
                </div>
            </div>
        </div>

        <!-- line Chart -->
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Example line Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="ct-chart ct-perfect-fourth"></div>
                    <hr>
                    Styling for the donut chart can be found in the
                    <code>/js/demo/chart-pie-demo.js</code> file.
                </div>
            </div>
        </div>
    </div>
<!-- end chart waktu tunggu alumni -->


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Alumni</h6>
        </div>

        <!-- Button -->
        <div class="export ml-auto my-2 mx-3">
            <a href="{{ url('data_alumni/export')}}" type="button" class="btn btn-success btn-sm my-2 mx-2"><i class="fas fa-file-excel px-1"></i>Export data</a>

            <!-- Scrollable modal Import Data-->
            <button type="button" class="btn btn-outline-primary btn-sm my-2 mx-2" data-toggle="modal" data-target="#modalImportDataAlumni"><i class="fas fa-plus px-1"></i></i>Import Data Alumni</button>

             <!-- Scrollable modal Tambah Data-->
            <button type="button" class="btn btn-outline-primary btn-sm my-2 mx-2" data-toggle="modal" data-target="#modalTambahData"><i class="fas fa-plus px-1"></i></i>Tambah Alumni</button>
        </div>
        <!-- End Of Button -->

        <div class="card-body">
            <div class="table-responsive">
                <p>Masukkan di pencarian Nama atau NIM</p>
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr class="text-center">
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>aksi</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($alumni as $data)
                      <tr>
                        <td>{{$data->nim}}</td>
                        <td>{{$data->user->name}}</td>
                        <td class="text-center">
                            <a href="data_alumni/{{$data->id}}" class="btn btn-sm btn-info" type="button">Detail</a>
                            <a href="data_alumni/{{$data->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('yakin mau di hapus?')" type="button">Hapus</a>
                            <a href="data_alumni/{{$data->id}}/info_kuesioner" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="right" title="email info pengisian Tracer Study" type="button"><i class="far fa-envelope fa-lg px-1"></i>email</a>
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

<!-- Scrollable modal Tambah Data Alumni-->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alumni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
                <select class="form-control" name="jenjang">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal Import Data Alumni-->
<div class="modal fade" id="modalImportDataAlumni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data Alumni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="card-header">{{ __('Import Alumni') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="data_alumni/import" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input type="file" name="file">
                        
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 
@endsection

@section('customScript')
    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>

    <script src="{{asset('template/js/chart/chart-waktu-tunggu-alumni.js')}}"></script>


@endsection



 