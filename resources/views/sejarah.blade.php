@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sejarah Gereja</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- <button class="button-sejarah mt-4 mb-3">
  <img src="Vector1.png" alt="">
</button>
@foreach ($sejarah as $sejarahs) 
    <article>
      {{ $sejarahs->slug }}
      {!! $sejarahs->body !!}
    </article>
@endforeach --}}

{{-- Content Section --}}
<section id="content-sejarah">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button class="button-sejarah mt-4 mb-3">
                        <img src="Vector1.png" alt="">
                    </button>
                    <p>
                      Gereja segala bangsa malinau kota (GESBA) dirintis pertama kali oleh Pdt. Daud pakiding S.Th, Bapak Isak Rau, Bapak Toding pong bulaan dan ibu Mely Toding yang diawali dengan ibadah persekutuan doa pada tanggal 25 Desember 2007 di pondok kebun Bpk Nurdin belakang Pasar Induk malinau. 
                      Kemudian GESBA Malinau Kota secara resmi dibuka dirumah pribadi Bpk pdt Daud Pakiding pada tanggal 19 September 2008, yang pada Tahun 2012 membeli sebidang tanah di Pasar Induk gang Gesba, setelah itu pada tahun 2013 mulai membangun gedung pastori untuk di jadikan tempat ibadah. Dan kemudian pada Tanggal 22 Juni 2013 gedung pertama kali digunakan dan hingga saat ini.
                    </p>
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