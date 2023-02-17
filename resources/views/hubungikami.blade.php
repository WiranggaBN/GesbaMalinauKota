@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="persembahan">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-hubungi2">
  <div class="container overlay h-100">
    <div class="row">
      <div class="col-12">
        <div class="col-4">
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        </div>
        <div class="section-hubungi mt-5 mb-5">
          <form method="post" action="/hubungikami"">
            @csrf
              <div class="row">
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required autofocus value="{{ old('name') }}">
                          @error('name')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                  </div>
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" required value="{{ old('alamat') }}">
                          @error('alamat')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>No. Telp / Whatsapp</label>
                          <input type="text" class="form-control telp @error('telp') is-invalid @enderror" name="telp" id="telp" required value="{{ old('telp') }}">
                          @error('telp')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                  </div>
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{ old('email') }}">
                          @error('email')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="form-group mt-3">
                  <label>Pesan</label>
                  <textarea type="text" class="form-control @error('pesan') is-invalid @enderror" rows="5" name="pesan" id="pesan" required value="{{ old('pesan') }}">
                  </textarea>
                  @error('pesan')
                    <div class="invalid-feedback">  
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              {{-- <div class="alert alert-danger errormsg mt-3 text-center" id="form_contact_error">Periksa Kembali Data Yang Diinput</div> --}}
              <div class="text-center mt-5">
                  <button class="btn btn-primary m-t-15 btn-rounded">
                      <span class="btn-label me-2">
                          <i class="fa fa-paper-plane"></i>
                      </span> Kirim
                  </button>
              </div>
          </form>
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