@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="khotbah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ringkasan Khotbah</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-satu" >
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-5">          
          <img src="Philip-M.jpg" alt="" class="gambarsatu">
          <a href=""><h3 class="ksatu-judul">Ringkasan Khotbah Minggu, <br> 12 Februari 2023</h3></a>
          <small class="ksatu-span">February 12, 2023</small>
        </div>
        <div class="col-md-3 mt-5">
          <img src="Ev-Andreas-Santosa-265x160.png" alt="" class="gambartiga">
          <a href=""><h5 class="kdua-judul">Ringkasan Khotbah Minggu, 25 Desember 2022</h5></a>
        </div>   
        <div class="col-md-3 mt-5">
          <img src="Pdm-Hizkia-Rephael-Mandey-265x160.png" alt="" class="gambartiga">
          <a href=""><h5 class="kdua-judul">Ringkasan Khotbah Minggu, 14 Januari 2023</h5></a>
        </div>
        <div class="kdua col-md-3">
          <img src="Pdt-Youke-Mumu-200x198.png" alt="" class="gambartiga">
          <a href=""><h5 class="kdua-judul">Ringkasan Khotbah Minggu, 28 Januari 2023</h5></a>
        </div>
        <div class="kdua-lagi col-md-3">
          <img src="Pdt-David-S-Handojo-200x160.jpg" alt="" class="gambartiga">
          <a href=""><h5 class="kdua-judul">Ringkasan Khotbah Minggu, 10 Januari 2023</h5></a>
        </div>        
      </div>
    </div>
  </div>
</section>
{{-- Content Section --}}

{{-- Content Section Dua --}}
<section id="content-dua" >
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">          
          <img src="Pdt-Yessy-Tololiu.png" alt="" class="gambardua">
          <a href=""><h5 class="ktiga-judul mt-2">Ringkasan Khotbah Minggu, 11 Januari 2023</h5></a>
          <small class="ktiga-span">January 11, 2023</small>
        </div>
        <div class="col-md-4">
          <img src="Pdt-Ventje-Singkoh.jpg" alt="" class="gambardua">
          <a href=""><h5 class="ktiga-judul mt-2">Ringkasan Khotbah Minggu, 12 Januari 2023</h5></a>
          <small class="ktiga-span">January 12, 2023</small>
        </div>   
        <div class="col-md-4">
          <img src="Pdt-Martha-Pandelaki.jpg" alt="" class="gambardua">
          <a href=""><h5 class="ktiga-judul mt-2">Ringkasan Khotbah Minggu, 17 Januari 2023</h5></a>
          <small class="ktiga-span">January 17, 2023</small>
        </div>
        <div class="col-md-4 mt-4">          
          <img src="Rev-Jerry-Stott.jpg" alt="" class="gambardua">
          <a href=""><h5 class="ktiga-judul mt-2">Ringkasan Khotbah Minggu, 11 Januari 2023</h5></a>
          <small class="ktiga-span">January 11, 2023</small>
        </div>
        <div class="col-md-4 mt-4">
          <img src="Pdt-Asron-Marbun-265x160.jpg" alt="" class="gambardua">
          <a href=""><h5 class="ktiga-judul mt-2">Ringkasan Khotbah Minggu, 20 Januari 2023</h5></a>
          <small class="ktiga-span">January 20, 2023</small>
        </div>   
        <div class="col-md-4 mt-4">
          <img src="Pdt-Herman-Pangalo.jpg" alt="" class="gambardua">
          <a href=""><h5 class="ktiga-judul mt-2">Ringkasan Khotbah Minggu, 1 Februari 2023</h5></a>
          <small class="ktiga-span">February 1, 2023</small>
        </div>       
      </div>
    </div>
  </div>
</section>  
{{-- Content Section Dua --}}

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