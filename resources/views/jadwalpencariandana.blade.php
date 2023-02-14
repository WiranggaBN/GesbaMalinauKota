@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="jadwaldoadanpuasa">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Pencarian Dana</h2>
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
            <a href="/pencariandana">
              <button class="button-jadwaldoadanpuasa mt-4 mb-3 me-3">
                Tujuan Pencarian Dana
              </button>
            </a>
            <a href="/jadwaldoadanpuasa">
              <button class="button-jadwaldoadanpuasa2 mt-4 mb-3">
                Jadwal & Lokasi Pencarian Dana
              </button>
            </a>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="card-ibadahraya">
                <h3 class="">Pencarian Dana</h3>                
                <p class="mt-3"><img src="jam.png" alt="" class="jam"> Sabtu, Pk. 00:00 - 16:00 WIB</p>
                <p class="mt-3"><img src="tempat.png" alt="" class="tempat"> GESBA Malinau Kota</p>
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