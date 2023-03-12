@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="pemberkatannikah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Pemberkatan Nikah</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-pemberkatannikah">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
              <div class="persyaratan col-md-12">
                <p class="mt-4">
                  Pernikahan adalah gambaran yang Allah berikan agar dunia dapat melihat betapa indahnya hubungan Kristus dengan jemaatNya (Ef 5 : 22-23), yakni melalui hubungan yang mesra dan intim antara suami istri. Hubungan suami istri yang indah tidak datang dengan sendirinya, tetapi perlu diusahakan secara bersama-sama oleh pasangan suami istri di dalam anugerah Tuhan.
                </p>
                <h4 class="mt-4"><i class="bi bi-caret-right-fill"></i> Persyaratan</h4>
                <p>
                  Mendaftar min. 6 bulan sebelumnya dan mengisi formulir.
                </p>
                  <ol>
                    <li>Fotocopy surat Baptis, masing-masing 1 lembar</li>
                    <li>Surat pernyataan persetujuan dari orang tua kedua belah pihak, bermaterai (Rp. 10.000,-)</li>
                    <li>Fotocopy Kartu Keluarga masing-masing 1 lembar</li>        
                    <li>Fotocopy Akte Kelahiran, masing-masing 1 lembar</li>
                    <li>Foto bersama/Foto gandeng uk. 6x4 sebanyak 4 lembar</li>
                    <li>Foto Pre-Wedding (min. 5 foto berupa softcopy) untuk ditampilkan saat pengumuman dan acara pemberkatan</li>
                  </ol>
                  <p>
                    Wajib mengikuti Bimbingan Pra Nikah (BPN) dan konseling, setelah mendaftar dan mengisi formulir.
                  </p>
                  <p>
                    "Kami mengharapkan agar setiap pasangan jemaat dapat mendaftarkan rencana pernikahannya ke gereja SEBELUM mencari gedung, catering dsb. Hal ini dikarenakan untuk menghindari terlalu banyak pemberkatan pernikahan dalam satu waktu."
                  </p>
                  <p>
                    Bidang Pernikahan (BPPN), dapat menghubungi: <br>
                    Rispan <br>
                    Telp. 0819 791 2007 <br>
                  </p>
                  <hr class="m-t-20 m-b-20">
                  <div class="confirm-next mb-3" style="display :block;">
                    <a class="btn btn-primary btn-block visible-sm visible-xs" href="/halpemberkatannikah" target="_blank">SELANJUTNYA<i class="fa fa-angle-double-right m-l-10"></i></a>
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