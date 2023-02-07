@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Baptisan</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-baptisan">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="persyaratan col-md-12">
                    <h4 class="mt-4">> Persyaratan</h4>
                      <ol>
                        <li>Membawa Pas foto 3 x 4 (2 lembar) ditulis nama dibelakang foto</li>
                        <li>Menggunakan Masker Medis</li>
                        
                        <li>Membawa Hand Sanitizer</li>
                        <li>Peserta wajib mengikuti pengarahan Baptisan melalui ZOOM 3 hari sebelum pelaksanaan Baptisan Air</li>
                        <li>Format penulisan di ZOOM : NAMA (Sesuai KTP) - Cabang/Asal Gereja. Contoh : <br> Jack - PRJ <br> Dana Permana - Non Jemaat</li>
                        <li>Jika peserta tidak mengikuti Pengarahan Baptisan Air, maka tidak dapat mengikuti Sakramen Baptisan Air</li>
                        <li>Bersedia untuk menandatangani surat pernyataan sehat.</li>
                        <li>Pendamping maks. 1 orang, khusus bagi Peserta yang Lanjut Usia (> 70 thn) / handicapped / dibawah 17 tahun.</li>
                        <li>Wajib membawa Handuk (tidak disediakan) & Baju Ganti</li>
                        <li>Pk. 08.30 - 09.00 (registrasi ulang)</li>
                        <li>Tempat pelaksanaan baptisan air: <br> GBI Intercon : Komplek Intercon Plaza Blok A.7-8, Jl. Meruya Ilir Raya No. 14, RT. 1 RW. 9, Srengseng, Kembangan, Jakarta Barat, <br> 021-5863208</li>
                        <a href="#" class="more">Selengkapnya ...</a>
                      </ol>
                      <hr class="m-t-20 m-b-20">
                </div>
                <div class="protokol col-md-12">
                  <h4 class="mt-4">> Protokol Kesehatan Baptisan CK7</h4>
                    <ol>
                      <li>Sterilisasi ruangan sebelum dan saat prosesi baptis</li>
                      <li>Penambahan kadar kaporit 2 kali lipat di kolam baptis</li>
                      <li>Dibatasi 15 orang per sesi baptis dan duduk berjarak 1 m</li>
                      <li>Memakai masker saat di ruangan, test suhu, sterilisasi badan dan kaki sebelum masuk ruangan</li>
                      <li>Ruang ganti baju didisinfektan setiap berganti jemaat</li>
                    </ol>
                </div>
                <div class="datadiri col-md-12 mt-4">
                  <h4 class="mt-4">Data Diri</h4>
                  <form class="row g-3">
                    <div class="col-12">
                      <label for="inputNama" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="inputNama" placeholder="Boy William">
                    </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">State</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>
                  <hr class="m-t-50">
                    <h3><i class="fa-regular fa-note-sticky m-r-10"></i>Surat Pernyataan</h3>
                    <div id="surat-pernyataan" class="m-b-20" style="overflow-y:auto; height:200px; padding:0 5px;">
                        <p>Saya yang bertanda tangan dibawah ini, </p>
                        <p>Nama : <span id="surat-pernyataan-nama"></span><br>
                        Alamat : <span id="surat-pernyataan-alamat"></span><br>
                        No KTP : <span id="surat-pernyataan-noktp"></span></p>

                        <p>Dengan ini menyatakan dengan sesungguh-sungguhnya bahwa :</p>
                        
                        <ol>
                            <li>Saya (dan pendamping)* saat dibaptis ini dalam keadaan sehat.</li>
                            <li>Apabila diduga terjadi penularan covid 19 sewaktu dilaksanakannya Baptisan, dimana saya mengerti dan mengetahui bahwa GBI PRJ CK7 telah menjalankan protokol kesehatan yang dilaksanakan dengan benar, maka saya dan atau keluarga saya membebaskan tuntutan apapun juga kepada Gereja GBI PRJ CK7 atas hal-hal yang terjadi karena dugaan yang diakibatkan telah dilaksanakannya Baptisan air tersebut.</li>
                        </ol>

                        <p>Demikian Surat Pernyataan ini saya buat dalam keadaan sehat dan tanpa adanya tekanan dari siapa atau dari pihak manapun juga.</p>
                    </div>
                    <div class="form-group">
                        <!-- <label class="label-title">Centang untuk setuju</label> -->
                        <div class="checkbox checkbox-info">
                            <input id="setuju" type="checkbox" name="setuju" value="1">
                            <label for="setuju">Dengan ini saya menyatakan telah membaca dan menyetujui isi dari Surat Pernyataan diatas serta menyatakan bersedia dibaptis atas kemauan sendiri dan mengikuti KOM setelah dibaptis</label>
                        </div>
                    </div>
                    <hr class="m-b-20">
                    <div class="alert alert-danger errormsg m-b-20" id="form_baptisan_air_error">Periksa Kembali Data Yang Diinput</div>
                    <button class="btn btn-primary btn-block visible-sm visible-xs submit mb-4"><i class="fa-regular fa-paper-plane m-r-10"></i>SUBMIT</button>
                    {{-- <button class="btn btn-primary hidden-sm hidden-xs submit"><i class="fa-regular fa-paper-plane m-r-10"></i>SUBMIT</button> --}}
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