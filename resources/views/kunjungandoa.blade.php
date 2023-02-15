@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="pemberkatannikah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Kunjungan Doa</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-doaucapansyukur">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">      
          <div class="row">
            <div class="col-md-4">
              <div class="card-doaucapansyukur">
                <label class="label-title mb-2">Jika Bpk/Ibu ada pertanyaan bisa menghubungi nomor berikut,</label>
                <ul class="list-icons m-t-10">
                  <li><i class="fa-solid fa-mobile text-dark"></i> <strong>Ibu Novi</strong> (<strong><a href="tel:081212262677">081212262677</a></strong>)</li>
                  <li><i class="fa-solid fa-mobile text-dark"></i> <strong>Pak Indarwanto Tarigan</strong> (<strong><a href="tel:081291024270">081291024270</a></strong>)</li>
                  <li><i class="fa-solid fa-mobile text-dark"></i> <strong>Pak Lukas</strong> (<strong><a href="tel:081398036651">081398036651</a></strong>)</li>
              </ul>
              </div>
              <div class="card-doaucapansyukur mt-4">
                <div class="form-group m-b-0">
                            <label class="label-title mb-2">Permintaan pelayanan ini ditujukan untuk? <span class="clr-alizarin">*</span></label>
                            <div class="row">                                    
                                <div class="col-xs-12">
                                  <div class="radio radio-block radio-info">
                                    <input type="radio" id="diminta_oleh1" value="1" name="diminta_oleh" class="diminta_oleh">
                                    <label for="diminta_oleh1"> Diri Sendiri
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="radio radio-block radio-info">
                                    <input type="radio" id="diminta_oleh0" value="0" name="diminta_oleh" class="diminta_oleh">
                                    <label for="diminta_oleh0"> Orang Lain</label>
                                  </div>
                                </div>                            
                                </div>
                        </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card-doaucapansyukur1">
                <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Jenis Kelamin</label><br>
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label me-5 ms-1" for="inlineRadio1"> Laki-Laki</label>                                           
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label ms-1" for="inlineRadio2"> Perempuan</label>                     
                  </div>
                  <div class="col-md-6">
                    <label for="inputNama" class="form-label">No. HP / Whatsapp</label>
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputNama" class="form-label">Jenis Pelayanan</label>
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                  <div class="col-md-6">
                    <label for="inputNama" class="form-label">Detail / Pokok Doa</label>
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                  <div class="col-md-6">
                    <label for="inputNama" class="form-label">Tanggal Doa</label>
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                  <div class="col-md-6">
                    <label for="inputNama" class="form-label">Waktu Doa</label>
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                  {{-- <div class="col-12">
                    <label for="inputAddress2" class="form-label">Ingin Dikunjungi?</label>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                  </div> --}}
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-send me-1"></i> SUBMIT</button>
                  </div>
                </form>
              </div>
            </div>
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