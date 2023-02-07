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
                <div class="persyaratan col-md-12">
                  <h4 class="mt-4">> Persyaratan Umum</h4>
                  <ol>
                    <li><strong>Penyerahan Anak (Khusus Online)</strong> baru dapat dijalankan jika jumlah pendaftar <strong>minimal 5 peserta</strong>.</li>
                    <li>Mengisi e-form dengan lengkap</li>
                    <li>Menyerahkan Pas Foto berwarna anak <strong>ukuran 3x4 sebanyak 2 (dua) lembar</strong>, untuk sertifikat Penyerahan Anak, <strong>dengan menuliskan nama anak di belakang</strong> di counter secretariat cabang masing-masing. Atau dapat dikirim ke alamat sbb:</li>
                    <pre class="batam"> Sekretariat GBI PRJ <br> Jl. Angkasa 1 No. 9, Kemayoran, Jakarta Pusat 10610 <br> Up. Grace Natalia / Yemima.</pre>
                    <li>Melampirkan :</li>
                    <ol>
                        <li>Foto Keluarga dengan minimal resolusi 1920 x 1080 pxl dengan ketentuan:</li>
                        <ul>
                            <li>Posisi saat pengambilan foto keluarga:</li>
                            <p>Ibu (kiri) - Anak (tengah) - Ayah (kanan)</p>
                            <li>Foto dengan posisi 1 badan</li>
                            <li>Jika anak masih bayi, maka digendong oleh Ayah</li>
                            <li>Foto keluarga dengan background polos (putih)</li>
                        </ul>
                        <li>Foto Anak (Gaya Bebas), High Res.</li>
                    </ol>
                </ol>
                      <hr class="m-t-20 m-b-20"> 
                  <h4 class="mt-4">> Persyaratan Khusus</h4>
                  <ol>
                    <li>Salah satu atau Kedua orang tua sudah dibaptis selam;</li>
                    <li>Mengisi dan menandatangani Surat Pernyataan yang telah disediakan apabila:</li>
                    <ul>
                        <li>Salah satu orang tua bukan beragama Kristen Protestan</li>
                        <li>Single Parent</li>
                        <li>Apabila Kedua orang tua telah meninggal dunia, maka anak dapat didampingi oleh Wali dengan mengisi dan menandatangani Surat Pernyataan yang telah disediakan sebagai penanggung jawab.</li>
                    </ul>
                </ol>
                <hr class="m-t-30 m-b-30">
                <div class="checkbox checkbox-success">
                  <input id="setuju" type="checkbox" autocomplete="off">
                  <label for="setuju">Dengan melanjutkan proses pendaftaran ini saya mengkonfirmasi bahwa saya sudah mengerti dan menyetujui semua ketentuan-ketentuan di atas.</label>
              </div>
              <hr class="m-t-30 m-b-20">
              <div class="confirm-next" style="display: none;">
                <a class="btn btn-primary btn-block visible-sm visible-xs" href="page.php?modul=penyerahan-anak&amp;halaman=data-diri-anak&amp;token=cDNmZHJZaTZDMjBVRnY0WWJ0bVFackQ0bzRyZFluRHJLdFh1WXBrMHFKVzArRitQYUdISXM0N0ZOaXA1M1kwdlBGc2NLV1JkUXJTQXcwL3IyTDdKRVE9PQ==">SELANJUTNYA<i class="fas fa-angle-double-right m-l-10"></i></a>
                <a class="btn btn-primary hidden-sm hidden-xs" href="page.php?modul=penyerahan-anak&amp;halaman=data-diri-anak&amp;token=cDNmZHJZaTZDMjBVRnY0WWJ0bVFackQ0bzRyZFluRHJLdFh1WXBrMHFKVzArRitQYUdISXM0N0ZOaXA1M1kwdlBGc2NLV1JkUXJTQXcwL3IyTDdKRVE9PQ==">SELANJUTNYA<i class="fas fa-angle-double-right m-l-10"></i></a>
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