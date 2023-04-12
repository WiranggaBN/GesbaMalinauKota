@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="ulangtahun">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Kegiatan</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-ibadahraya" >
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div>
            <a href="/"><button class="button-sejarah mt-4 mb-3">
              <img src="../Vector1.png" alt="">
            </button></a>
          </div>       
        </div>
      </div>
    </div>
</section>
{{-- Content Section --}}

{{-- Informasi Section --}}
<section id="informasi">
    <div class="container-fluid">
      {{-- <div class="row">
        <div class="col-9">
          <h2 class="text-dark">Informasi</h2>
        </div>
        <div class="col-3">
          <button class="button-informasi">Lihat Semua..
            <img src="Vector.png" alt="" class="ms-4">
          </button>
        </div>
      </div> --}}
  
      <div class="container">
        <div class="row">
        @foreach ($kegiatan as $kegiatans) 
          <div class="col-md-4 d-flex">
            <div class="card-informasi mt-4 position-relative">
              <img src={{ asset('storage/' . $kegiatans->image) }} alt="">
              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                  <h5>{{ $kegiatans->title }}</h5>
                  <span>{{ $kegiatans->desc }}</span>
                  <p class="text-light">{{ $kegiatans->speaker }}</p>
                  <h6>{{ $kegiatans->month }}</h6>
                  <h4>{{ $kegiatans->date }}</h4>
                  <h6>{{ $kegiatans->time }} WITA</h6>
                </div>
              </div>
            </div> 
          </div>
          @endforeach
        </div>
        {{-- <button class="button-vector-left position-absolute start-0 top-50 translate-middle-y">
          <img src="Vector1.png" alt="">
        </button>
        <button class="button-vector-right position-absolute end-0 top-50 translate-middle-y">
          <img src="Vector2.png" alt="">
        </button> --}}
      </div>
    </div>
</section>
{{-- Informasi Section --}}

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