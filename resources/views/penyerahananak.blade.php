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
                <div class="persyaratan col-md-12">
                  <h4 class="mt-4"><i class="bi bi-caret-right-fill"></i> Persyaratan Umum</h4>
                  <ol>
                    <li><strong>Penyerahan Anak</strong> baru dapat dijalankan jika jumlah pendaftar <strong>minimal 5 peserta</strong>.</li>
                    <li>Mengisi e-form dengan lengkap</li>
                    <li>Menyerahkan Pas Foto berwarna anak <strong>ukuran 3x4 sebanyak 2 (dua) lembar</strong>, untuk sertifikat Penyerahan Anak, <strong>dengan menuliskan nama anak di belakang</strong> di counter secretariat cabang masing-masing. Atau dapat dikirim ke alamat sbb:</li>
                    <pre class="batam mt-1"> Sekretariat GBI PRJ <br> Jl. Angkasa 1 No. 9, Kemayoran, Jakarta Pusat 10610 <br> Up. Grace Natalia / Yemima.</pre>
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
                  <h4 class="mt-4"><i class="bi bi-caret-right-fill"></i> Persyaratan Khusus</h4>
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
                  <input id="setuju" type="checkbox" autocomplete="off"><label for="setuju" class="ms-2">Dengan melanjutkan proses pendaftaran ini saya mengkonfirmasi bahwa saya sudah mengerti dan menyetujui.</label>
              </div>
              <hr class="m-t-30 m-b-20">
              <div class="confirm-next mb-3" style="display :block;">
                <a class="btn btn-primary btn-block visible-sm visible-xs" href="/halpenyerahananak" target="_blank">SELANJUTNYA<i class="fa fa-angle-double-right m-l-10"></i></a>
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
          
          <div class="col-md-3 mt-3 d-flex align-items-center justify-content-evenly">
            <a href="https://www.instagram.com/gesbamalkot/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCukPPZ6Gr-lpiwjrl-EJlWw" target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="https://www.facebook.com/people/GESBA-Malinau-Kota/100088256063650/?mibextid=ZbWKwL" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="#hubungi" target="_blank"><i class="bi bi-envelope-fill"></i></a>
          </div>
          <div class="ala mt-5 col-md-5 d-flex">
            <a href="#" class="alam ms-3">GESBA Malinau Kota Jl. Pasar Induk Gang Gesba RT.20, Kec. Malinau Kota, Kabupaten Malinau, Kalimantan Utara 77554</a>
          </div>
        </div>
        <hr class="grs">
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