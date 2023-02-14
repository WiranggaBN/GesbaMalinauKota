@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="ibadahraya">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ibadah Raya</h2>
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
            <button class="button-ibadahraya mt-4 mb-3 me-2">
              <img src="Vector1.png" alt="">
            </button>
            {{-- <button class="button-ibadahraya mt-4 mb-3">
                <img src="icons8-calendar-48.png" alt="" class="img-calendar">
              </button> --}}
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="card-ibadahraya">
                <h3 class="">Ibadah Persekutuan</h3>                
                <p class="mt-3"><img src="jam.png" alt="" class="jam"> Kamis, Pk. 19:30 - 21:00 WIB</p>
                <p class="mt-3"><img src="tempat.png" alt="" class="tempat"> GESBA Malinau Kota</p>
              </div>
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
<footer class="d-flex align-items-center position-relative">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-7 d-flex align-items-center">
          <img src="logo.png" alt="" width="100" height="100">
          <a href="#" class="ms-3">Gereja Segala Bangsa Malinau Kota</a>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-evenly">
          <a href="#slider">Home</a>
          <a href="#informasi">Informasi</a>
          <a href="#pers">Persembahan</a>
          <a href="#hubungi">Hubungi</a>
        </div>
      </div>
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