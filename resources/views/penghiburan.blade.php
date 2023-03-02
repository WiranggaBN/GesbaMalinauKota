@extends('layouts.main')

@section('container')
@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

{{-- hero section --}}
<section id="pemberkatannikah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Penghiburan</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-penghiburan">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
              <div class="persyaratan col-md-12">
                <p class="mt-4">Pelayanan untuk melayani keluarga yang sedang berduka karena ditinggal oleh anggota keluarga yang meninggal dunia. Kami melayani ibadah penghiburan di rumah duka sampai kepada acara pemakaman.</p>
                <hr class="m-t-20 m-b-20">
              </div>
              <div class="datadiri col-md-12 mt-4">
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
                <div class="datadiri col-md-12">
                    <form class="row g-3 mt-3" method="post" action="/penghiburan">
                      @csrf
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Anda</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="" required autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">No. HP / Whatsapp</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="" required value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Orang yang Meninggal Dunia</label>
                        <input type="text" name="who_died" class="form-control @error('who_died') is-invalid @enderror" id="who_died" placeholder="" required value="{{ old('who_died') }}">
                        @error('who_died')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Hubungan Anda dengan Orang Tersebut</label>
                        <input type="text" name="relationship" class="form-control @error('relationship') is-invalid @enderror" id="relationship" placeholder="" required value="{{ old('relationship') }}">
                        @error('relationship')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="join" class="form-label">Tanggal dan Waktu Penguburan</label>
                            <input type="datetime-local" class="form-control @error('date_time') is-invalid @enderror" name="date_time" id="date_time" required>
                            @error('date_time')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                            @enderror
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Lokasi Penguburan</label>
                        {{-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> --}}
                        <textarea class="form-control @error('location') is-invalid @enderror" name="location" id="location" rows="3" required value="{{ old('location') }}"></textarea>
                        @error('location')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="confirm-next mb-3" style="display :block;">
                      <button class="btn btn-primary btn-block visible-sm visible-xs submit mb-4 mt-3"><i class="bi bi-send me-1"></i> SUBMIT</button>
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

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  config = {
      enableTime: true,
      dateFormat: 'Y-m-d H:i',
  }
  flatpickr("input[type=datetime-local]", config);
</script>
@endpush
@endsection