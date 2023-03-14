@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="visimisi">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Visi dan Misi</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-visimisi" >
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div>
            <a href="/"><button class="button-sejarah mt-4 mb-3">
              <img src="../Vector1.png" alt="">
          </button></a>
          </div>
          {{-- @foreach ($visimisi as $visimisis)
          <div class="col-md-6 text-center">          
            <h2>{{ $visimisis->title }}</h2>
            <span>
              {{ $visimisis->body }}
            </span>
          </div>
          @endforeach --}}
          <div class="col-md-6 text-center">
            <h2>Visi</h2>
            <span>
              Menjadi Gereja sempurna / Gereja Penganten Kristus. <br> (Matius 5:48, 1 Tesalonika 2:23 dan Wahyu 12:1-2).
            </span>
          </div>
          <div class="col-md-6 text-center">
            <h2>Misi</h2>
            <span>
              Memberitakan injil Tuhan Yesus Kristus kepada segala bangsa dan menjadikan mereka murid agar bertumbuh sempurna tubuh, jiwa dan roh sama dengan kristus melalui pengajaran Kabar Penganten Kristus. (Matius 28:19-20 dan Kisah Para Rasul 1:8).
            </span>
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