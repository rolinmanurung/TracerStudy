@extends('layouts.user')
@section('title','Alumni')

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

          <form action="/sendEmail" name="myform" method="post">
            @csrf
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
                      <th id="checker">Select All</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Telephone</th>
                      <th>NIM</th>
                      <th>Email</th>
                      <th>Prodi</th>
                      <th>Jenjang</th>
                      <th>t_masuk</th>
                      <th>t_lulus</th>
                      <th>IPK</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data_alumni as $alumni)
                    <tr>
                      <td><input type="checkbox" name="check_list" class="selectbox" value="{{$alumni->id}}"></td>
                      <td>{{$alumni->nama}}</td>
                      <td>{{$alumni->alamat}}</td>
                      <td>{{$alumni->no_telp}}</td>
                      <td>{{$alumni->nim}}</td>
                      <td>{{$alumni->email}}</td>
                      <td>{{$alumni->prodi}}</td>
                      <td>{{$alumni->jenjang}}</td>
                      <td>{{$alumni->t_masuk}}</td>
                      <td>{{$alumni->t_lulus}}</td>
                      <td>{{$alumni->ipk}}</td>
                      <td class="">
                        <a href="/manajemen-data-alumni/{{$alumni->id}}/edit"><i class="fas fa-edit text-info"></i></a>
                        <a href="/manajemen-data-alumni/{{$alumni->id}}/delete" onclick=" return confirm('yakin mau dihapus?')"><i class="fas fa-trash-alt text-danger"></i></a>
                        <a href="/manajemen-data-alumni/{{$alumni->id}}/emailIsiTS" onclick="return confirm('Kirim email Pengisian Tracer Study?')"><i class="fas fa-envelope text-dark"></i></a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th><input type="checkbox" class="selectall2" name="check_list"></th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Telephone</th>
                      <th>NIM</th>
                      <th>Email</th>
                      <th>Prodi</th>
                      <th>Jenjang</th>
                      <th>t_masuk</th>
                      <th>t_lulus</th>
                      <th>IPK</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          </form>
        </div>


        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data alumni</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/manajemen-data-alumni/create" method="POST">
                {{csrf_field()}}
              <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="" rows="3"></textarea>
              </div>
               <div class="form-group">
                <label for="no_telp">No Telephone</label>
                <input name="no_telp" type="text" class="form-control" placeholder="08**********">
              </div>
               <div class="form-group">
                <label for="nim">NIM</label>
                <input name="nim" type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="prodi">Prodi</label>
                <input name="prodi" type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label for="jenjang">Jenjang</label>
                <select name="jenjang" class="form-control" id="">
                  <option>D3</option>
                  <option>D4</option>
                </select>
              </div>
              <div class="form-group">
                <label for="t_masuk">Tahun Masuk</label>
                <select name="t_masuk" class="form-control" id="">
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                </select>
              </div>
              <div class="form-group">
                <label for="t_lulus">Tahun Lulus</label>
                <select name="t_lulus" class="form-control" id="">
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                </select>
              </div>
              <div class="form-group">
                <label for="ipk">IPK</label>
                <input name="ipk" type="text" class="form-control" placeholder="">
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>

@section('script')
<script type="text/javascript">
    $("#checker").bind("click", function() {
    var toggleState = !! jQuery.data(this, "togglestate");

    $(document.myform.check_list).each(function() {
        this.checked = !toggleState;
    });


    $(this).text(toggleState ? "Select All" : "UnSelect All");
    jQuery.data(this, "togglestate", !toggleState);
});

$(document.myform).delegate("input[name=check_list]", "change", function() {
    var curState, prevState, fullStateChange = true;
    $(document.myform.check_list).each(function() {
        curState = this.checked;

        if (prevState != null && prevState !== curState) {
            fullStateChange = false;
        }

        prevState = curState;
    });

    if (!fullStateChange) {
        return;
    }

    $("#checker").data("togglestate", curState).text( !curState ? "Check All" : "UnCheck All");




});

$(document.myform.check_list).trigger("change");



    // $('selectall').click(function(){
    //   $('selectbox').prop('checked', $(this).prop('checked'));
    //   $('selecall2').prop('checked', $(this).prop('checked'));
    // })
    // $('selectall2').click(function(){
    //   $('selectbox').prop('checked', $(this).prop('checked'));
    //   $('selecall').prop('checked', $(this).prop('checked'));
    // })
    // $('selectbox').change(function(){
    //     var total = $('selectbox').length;
    //     var number = $('selectbox:checked').length;
    //     if(total == number){
    //       $('selectall').prop('checked', true);
    //       $('selectall2').prop('checked', true);
    //     }else{
    //       $('selectall').prop('checked', false);
    //       $('selectall2').prop('checked', false);
    //     }
    // });
</script>
@endsection

@endsection

