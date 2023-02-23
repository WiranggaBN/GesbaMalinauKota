@extends('layouts.main')

@section('container')
{{-- Slider Section --}}
<section id="masuk">
  <div class="container-fluid">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
          
              @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
          
          <main class="form-signin w-100 m-auto">
            <form action="/masuk" class="form-signin-in" method="post">
              @csrf
              <h1 class="h3 mb-3 mt-5 text-center fw-normal">Silahkan Masuk</h1>
          
              <div class="form-floating mt-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                <label for="floatingInput"> Alamat Email</label>
                @error('email')
                  <div class="invalid-feedback">  
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword"> Sandi</label>
              </div>
              <button class="masuk w-100 btn btn-lg btn-primary mt-3" type="submit">Masuk</button><br><br>
              <div class="text-center"><small>Belum mendaftar?<a href="/daftar" class="daftar text-decoration-none"> Mendaftar sekarang!</a></small></div>
              <p class="mt-5 mb-3 text-muted text-center">&copy; 2023</p>
            </form>
          </main>
          
          </div>
          </div>
            </body>

        </div>
      </div>
    </div>
  </div>
</section>
{{-- Slider Section --}}



{{-- Footer Section --}}
<footer class="footer-masuk d-flex align-items-center position-relative">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-items-center">
          <img src="logo.png" alt="" width="100" height="100" class="ogoll">
        </div>
        <a href="#" class="ngg text-center">Gereja Segala Bangsa Malinau Kota</a>
        
        <div class="papaa col-md-3 mt-3 d-flex align-items-center justify-content-evenly">
          <a href="https://www.instagram.com/gesbamalkot/" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UCukPPZ6Gr-lpiwjrl-EJlWw" target="_blank"><i class="bi bi-youtube"></i></a>
          <a href="https://www.facebook.com/people/GESBA-Malinau-Kota/100088256063650/?mibextid=ZbWKwL" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="#hubungi" target="_blank"><i class="bi bi-envelope-fill"></i></a>
        </div>
        {{-- <div class="ala mt-5 col-md-5 d-flex">
          <a href="#" class="alam ms-3">GESBA Malinau Kota Jl. Pasar Induk Gang Gesba RT.20, Kec. Malinau Kota, Kabupaten Malinau, Kalimantan Utara 77554</a>
        </div> --}}
      </div>
      <hr class="grss">
      <div class="row position-absolute copyright start-50 translate-middle">
        <div class="cpp col-12">
          <p>Copyright by Yusri Mandi Pakiding All Right Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
{{-- Footer Section --}}
@endsection


