@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="khotbah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Materi Pengajaran</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-kpk" >
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-5">          
          <img src="kpk1.jpg" alt="" class="gambarsatu">
          {{-- <a href=""><h3 class="ksatu-judul">Ringkasan Khotbah Minggu, <br> 12 Februari 2023</h3></a>
          <small class="ksatu-span">February 12, 2023</small> --}}
        </div>
        <div class="col-md-6 mt-5">          
          <img src="kpk2.jpg" alt="" class="gambarsatu">
        </div>
        <div class="col-md-6 mt-3">          
          <img src="kpk3.jpg" alt="" class="gambarsatu">
        </div>
        <div class="col-md-6 mt-3">          
          <img src="kpk4.jpg" alt="" class="gambarsatu">
        </div>
        <div class="unduh-materi mt-5">
          <a href="https://drive.google.com/file/d/12QjzCY58s_kge5BxrSi3gscdUqPpBIwW/view?usp=sharing"  terget="_blank">
            <button class="btn-unduh-materi"><i class="fa fa-download"></i> Download</button>
          </a>
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