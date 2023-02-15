@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="pemberkatannikah">
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
  <footer class="footer d-flex align-items-center position-relative">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12 align-items-center">
            <img src="logo.png" alt="" width="100" height="100" class="ogol">
          </div>
          <a href="#" class="ng text-center">Gereja Segala Bangsa Malinau Kota</a>
          
          <div class="papa col-md-3 mt-3 d-flex align-items-center justify-content-evenly">
            <a href="https://www.instagram.com/gesbamalkot/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCukPPZ6Gr-lpiwjrl-EJlWw" target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="https://www.facebook.com/people/GESBA-Malinau-Kota/100088256063650/?mibextid=ZbWKwL" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="#hubungi" target="_blank"><i class="bi bi-envelope-fill"></i></a>
          </div>
          {{-- <div class="ala mt-5 col-md-5 d-flex">
            <a href="#" class="alam ms-3">GESBA Malinau Kota Jl. Pasar Induk Gang Gesba RT.20, Kec. Malinau Kota, Kabupaten Malinau, Kalimantan Utara 77554</a>
          </div> --}}
        </div>
        <hr class="grs">
        <div class="row position-absolute copyright start-50 translate-middle">
          <div class="cp col-12">
            <p>Copyright by Yusri Mandi Pakiding All Right Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
{{-- Footer Section --}}
@endsection