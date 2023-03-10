@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="jadwaldoadanpuasa">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Doa dan Puasa</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-jadwaldoadanpuasa" >
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div>
            <a href="/doadanpuasa">
              <button class="button-jadwaldoadanpuasa mt-4 mb-3 me-3">
                Manfaat Doa dan Puasa
              </button>
            </a>
            <a href="/jadwaldoadanpuasa">
              <button class="button-jadwaldoadanpuasa2 mt-4 mb-3">
                Jadwal & Lokasi Doa dan Puasa
              </button>
            </a>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              @foreach ($jadwaldoadanpuasa as $jadwaldoadanpuasas) 
              <div class="card-ibadahraya">
                <p class="mt-3"><i class="bi bi-person-circle"></i> Pembicara : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $jadwaldoadanpuasas->speaker }}</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Tema : <br>&nbsp;&nbsp;&nbsp;&nbsp; {{ $jadwaldoadanpuasas->theme }}</p>
                <p class="mt-3"><i class="bi bi-calendar-event"></i> {{ $jadwaldoadanpuasas->date }}</p>                
                <p class="mt-3"><i class="bi bi-clock"></i> Pukul {{ $jadwaldoadanpuasas->time }} WITA</p>
                <p class="mt-3"><i class="bi bi-pin-map"></i> {{ $jadwaldoadanpuasas->place }}</p>
                <p class="mt-3"><i class="bi bi-geo-alt"></i> {{ $jadwaldoadanpuasas->address }}</p>
              </div>
              @endforeach
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