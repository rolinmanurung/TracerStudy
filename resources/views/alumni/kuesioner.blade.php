@extends('layouts.master', ['title'=>'Kuesioner'])

@section('customStyle')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
          $("#hide").click(function(){
            $("#pertanyaan").hide();
          });
          $("#show").click(function(){
            $("#pertanyaan").show();
          });
          $("#showLainnya").click(function(){
            $("#lainnya").show();
          });
        });
    </script>

    <script>
      $("#showLainnya").click(function(){
        $("#lainnya").attr("type", "text");
      });
    </script>

@endsection

@section('content')

<!-- Basic Card Example -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kuesioner Tracer Study</h6>
    </div>
    <div class="card-body">
        <form action="/kuesioner/{{Auth::User()->id}}" method="POST">
            @method('patch')
            @csrf
            <!-- Awal Kuesioner-->
            <h4 class="pt-5">Data Kuesioner</h4>
            <small class="form-text text-danger">Data kuesioner ini akan digunakan untuk Politeknik Negeri Batam.</small>
            <div class="form-group pt-3">
                <p>Apakah anda bekerja saat ini <span class="font-italic ">(Termasuk kerja sambilan dan wirausaha)</span></p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kta1" id="show" value="ya" checked required>
                    <label class="form-check-label" for="show">
                    Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kta1" id="hide" value="tidak" required>
                    <label class="form-check-label" for="hide">
                    Tidak
                    </label>
                </div>
            </div>

            <!-- Show Pertanyaan selanjutnya jika ya -->
            <div id="pertanyaan">
                <div class="form-group">
                    <label for="kta2">Nama Perusahaan Tempat Bekerja/Berwirausaha</label>
                    <input name="kta2" value="{{Auth::User()->alumni->kta->kta2}}" type="text" class="form-control">

                        @error('kta2')
                            <div class="text-danger">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror

                </div>
                <div class="form-group">
                    <label for="kta3">Skala Perusahaan Tempat Bekerja/Berwirausaha</label>
                    <select class="form-control" name="kta3">
                        <option value="" hidden selected>Pilih</option>
                        <option value="Lokal/ Wilayah/ Berwirausaha tidak Berizin">Lokal/ Wilayah/ Berwirausaha tidak Berizin</option>
                        <option value="Nasional/ Berwirausaha Berizin">Nasional/Berwirausaha Berizin</option>
                        <option value="Multinasional/ Internasional">Multinasional/ Internasional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kta4">Jenis Perusahaan Tempat Bekerja/Berwirausaha</label>
                    <select class="form-control" name="kta4">
                        <option value="" hidden selected>Pilih</option>
                        <option value="Instansi pemerintah (termasuk BUMN)">Instansi pemerintah (termasuk BUMN)</option>
                        <option value="Organisasi non-profit/Lembaga Swadaya Masyarakat">Organisasi non-profit/Lembaga Swadaya Masyarakat</option>
                        <option value="Perusahaan swasta">Perusahaan swasta</option>
                        <option value="">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kta5">Level Pekerjaan</label>
                    <select class="form-control" name="kta5">
                        <option value="" hidden selected>Pilih</option>
                        <option value="Owner">Owner</option>
                        <option value="Direktur">Direktur</option>
                        <option value="Manager">Manager</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Staff">Staff</option>
                        <option value="Entry">Entry</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>Kira-kira berapa pendapatan anda setiap bulannya?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="jumlah1" name="kta6" value="≤ Rp.1.000.000">
                        <label class="form-check-label" for="jumlah1">
                        ≤ Rp.1.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="jumlah2" name="kta6" value="2.500.000 - 4.500.000">
                        <label class="form-check-label" for="jumlah2">
                        Rp.2.500.000 - Rp.4.500.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="jumlah3" name="kta6" value="5.000.000 - 10.000.000">
                        <label class="form-check-label" for="jumlah3">
                        Rp.5.000.000 - Rp.10.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="jumlah4" name="kta6" value="15.000.000 - 25.000.000">
                        <label class="form-check-label" for="jumlah4">
                        Rp.15.000.000 - Rp.25.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="jumlah5" name="kta6" value="≥ 50.000.000" >
                        <label class="form-check-label" for="jumlah5">
                        ≥ Rp.50.000.000
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kta7">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
                    <select class="form-control" name="kta7">
                        <option value="" hidden selected>Pilih</option>
                        <option value="Sangat Erat">Sangat Erat</option>
                        <option value="Erat">Erat</option>
                        <option value="Cukup Erat">Cukup Erat</option>
                        <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kta8">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
                    <select class="form-control" name="kta8">
                        <option value="" hidden selected>Pilih</option>
                        <option value="Setingkat Lebih Tinggi">Setingkat Lebih Tinggi</option>
                        <option value="Tingkat yang Sama">Tingkat yang Sama</option>
                        <option value="Setingkat Lebih Rendah">Setingkat Lebih Rendah</option>
                        <option value="Tidak Perlu Pendidikan Tinggi">Tidak Perlu Pendidikan Tinggi</option>
                    </select>
                </div>
            </div>
            <!-- Akhir Pertanyaan jika ya -->

                <div class="form-group">
                    <label for="kta9" class="">Bagaimana anda menggambarkan situasi anda saat ini?<span class="font-italic "> (Jawaban bisa lebih dari satu)</span></label>
                    <div class="form-check">
                      <input name="kta9" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana">
                      <label class="form-check-label" for="inlineCheckbox1">Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana</label>
                    </div>
                    <div class="form-check">
                      <input name="kta9" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Saya menikah">
                      <label class="form-check-label" for="inlineCheckbox2">Saya menikah</label>
                    </div>
                    <div class="form-check">
                      <input name="kta9" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Saya sibuk dengan keluarga dan anak-anak">
                      <label class="form-check-label" for="inlineCheckbox3">Saya sibuk dengan keluarga dan anak-anak</label>
                    </div>
                    <div class="form-check">
                      <input name="kta9" class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Saya sekarang sedang mencari pekerjaan">
                      <label class="form-check-label" for="inlineCheckbox4">Saya sekarang sedang mencari pekerjaan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kta10">Sebutkan sumberdana dalam pembiayaan kuliah?</label>
                    <select class="form-control" name="kta10" required>
                        <option value="" hidden selected>Pilih</option>
                        <option value="Biaya Sendiri / Keluarga">Biaya Sendiri / Keluarga</option>
                        <option value="Beasiswa Bdidikmisi">Beasiswa Bdidikmisi</option>
                    </select>
                </div>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>

        </form>
    </div> 
</div>
@endsection
