@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
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