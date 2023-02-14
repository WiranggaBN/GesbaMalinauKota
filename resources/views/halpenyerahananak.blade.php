@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Penyerahan Anak</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-penyerahananak">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="datadiri col-md-12">
                    <h4 class="mt-4">Data Diri</h4>
                    <form class="row g-3">
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="">
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Panggilan</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="">
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="">
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="">
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Jenis Kelamin</label><br>
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label me-5 ms-1" for="inlineRadio1"> Laki-Laki</label>                                           
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label ms-1" for="inlineRadio2"> Perempuan</label>                     
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Tempat & Tgl Lahir</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Alamat Lengkap</label>
                        {{-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> --}}
                        <textarea class="form-control" id="inputAddress" rows="3"></textarea>
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">No. HP / Whatsapp</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="">
                      </div>
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                    </form>
                    <hr class="m-t-50">
                      <div class="form-group">
                          <!-- <label class="label-title">Centang untuk setuju</label> -->
                          <div class="checkbox checkbox-info mt-3">
                              <input id="setuju" type="checkbox" name="setuju" value="1">
                              <label for="setuju">Dengan ini saya menyatakan telah membaca dan menyetujui.</label>
                          </div>
                      </div>
                      {{-- <div class="alert alert-danger errormsg m-b-20" id="form_baptisan_air_error">Periksa Kembali Data Yang Diinput</div> --}}
                      <button class="btn btn-primary btn-block visible-sm visible-xs submit mb-4 mt-3"><i class="bi bi-send me-1"></i> SUBMIT</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Content Section --}}

{{-- Bg Pattern Bottom Section --}}
<section id="bottom-sejarah">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Bg Pattern Bottom Section --}}

{{-- Footer Section --}}
<section id="footer-sejarah">
<footer class="d-flex align-items-center position-relative">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-7 d-flex align-items-center">
          <img src="logo.png" alt="" width="100" height="100">
          <a href="#" class="ms-3">Gereja Segala Bangsa Malinau Kota</a>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-evenly">
          <a href="#slider">Home</a>
          <a href="#informasi">Informasi</a>
          <a href="#pers">Persembahan</a>
          <a href="#hubungi">Hubungi</a>
        </div>
      </div>
      <div class="row position-absolute copyright start-50 translate-middle">
        <div class="col-12">
          <p>Copyright by Yusri Mandi Pakiding All Right Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
</section>
  {{-- Footer Section --}}
@endsection