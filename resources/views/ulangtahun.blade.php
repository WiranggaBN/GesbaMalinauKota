@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="ulangtahun">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ulang Tahun</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-ulangtahun" >
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div>
            <a href="/"><button class="button-sejarah mt-4 mb-3">
              <img src="../Vector1.png" alt="">
            </button></a>
          </div>
          <h1 class="text-center mb-5">Selamat Ulang Tahun Kepada...</h1>
          @foreach ($ulangtahun as $ulangtahuns) 
          <div class="card mb-3 me-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('storage/' . $ulangtahuns->image) }}" class="gambarultah img-fluid rounded-start" alt="..." >
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">{{ $ulangtahuns->name }}
                  </h3>
                  <h5 class="card-title">{{ $ulangtahuns->datetime }}
                  </h5>
                  <p class="card-text">{{ $ulangtahuns->biblechapter }} <br> {{ $ulangtahuns->bibleverses }}</p>
                </div>
              </div>
            </div>
          </div>
         @endforeach
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