@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="ibadahraya">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Data Jemaat</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-datajemaat" >
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div>
            <a href="/"><button class="button-sejarah mt-4 mb-3">
              <img src="../Vector1.png" alt="">
            </button></a>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              @foreach ($datajemaat as $datajemaats) 
              <div class="card-datajemaat">
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Laki-Laki : {{ $datajemaats->jumlahlaki }} Orang</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Perempuan : {{ $datajemaats->jumlahperempuan }} Orang</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Dewasa : {{ $datajemaats->jumlahdewasa }} Orang</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Pemuda : {{ $datajemaats->jumlahpemuda }} Orang</p>                
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Sekolah Minggu : {{ $datajemaats->jumlahsekolahminggu }} Orang</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Lansia : {{ $datajemaats->jumlahlansia }} Orang</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Balita : {{ $datajemaats->jumlahbalita }} Orang</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Kepala Keluarga : {{ $datajemaats->jumlahkepalakeluarga }} Orang</p>
                <p class="mt-3"><i class="bi bi-person-circle"></i> Jumlah Jemaat : {{ $datajemaats->jumlahjemaat }} Orang</p>
              </div>
              @endforeach
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