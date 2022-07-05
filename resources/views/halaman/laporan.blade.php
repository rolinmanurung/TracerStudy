@extends('layouts.master',['title'=>'Laporan'])
@section('customStyle')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
@endsection
@section('content')
<div class="laporan">
        <?php 
            function tanggal_indonesia($tanggal){

                $bulan = array (
                    1 =>    'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November', 
                            'Desember'
                    );

                    $var = explode('-', $tanggal);

                    return $var[2] . ' ' . $bulan[ (int)$var[1] ] . ' ' . $var[0];
                    // var 0 = tanggal
                    // var 1 = bulan
                    // var 2 = tahun
            }
        ?>
        <p>Pada {!! tanggal_indonesia(date('d-m-Y'));!!}, beberapa data dibawah berdasarkan Tracer Study yang telah di lakukan  </p>
    </div>
<!-- Content Row --> 
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <!-- Donut Chart -->
        
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

<!-- Content Row -->

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>

    <!-- chart custom scripts -->
    <script src="{{asset('template/js/chart/chart-waktu-tunggu-alumni.js')}}"></script>    
@endsection
