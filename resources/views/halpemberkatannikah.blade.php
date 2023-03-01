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
                    <h2>Pemberkatan Nikah</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-penyerahananak">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="datadiri col-md-12">
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
                    <h2 class="mt-4 text-dark mb-4">Formulir</h2>
                    <form class="row g-3" method="post" action="/halpemberkatannikah">
                      @csrf
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Lengkap Mempelai Pria</label>
                        <input type="text" name="grooms_name" class="form-control @error('grooms_name') is-invalid @enderror" id="grooms_name" placeholder="" required autofocus value="{{ old('grooms_name') }}">
                        @error('grooms_name')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Lengkap Mempelai Wanita</label>
                        <input type="text" name="brides_name" class="form-control @error('brides_name') is-invalid @enderror" id="brides_name" placeholder="" required value="{{ old('brides_name') }}">
                        @error('brides_name')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Status Mempelai Pria</label><br>
                          <input class="form-check-input @error('status_grooms') is-invalid @enderror" type="radio" name="status_grooms" id="status_grooms" value="Jemaat" required>
                          <label class="form-check-label me-5 ms-1" for="Jemaat"> Jemaat</label>                                           
                          <input class="form-check-input @error('status_grooms') is-invalid @enderror" type="radio" name="status_grooms" id="status_grooms" value="Bukan Jemaat" required>
                          <label class="form-check-label ms-1" for="Bukan Jemaat"> Bukan Jemaat</label>   
                          @error('status_grooms')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                          @enderror                  
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">Status Mempelai Wanita</label><br>
                          <input class="form-check-input @error('status_brides') is-invalid @enderror" type="radio" name="status_brides" id="status_brides" value="Jemaat" required>
                          <label class="form-check-label me-5 ms-1" for="Jemaat"> Jemaat</label>                                           
                          <input class="form-check-input @error('status_brides') is-invalid @enderror" type="radio" name="status_brides" id="status_brides" value="Bukan Jemaat" required>
                          <label class="form-check-label ms-1" for="Bukan Jemaat"> Bukan Jemaat</label>   
                          @error('status_brides')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                          @enderror                  
                      </div>
                      {{-- <div class="col-6">
                        <label for="inputNama" class="form-label">Nama Ibu</label>
                        <input type="text" name="mothername" class="form-control @error('mothername') is-invalid @enderror" id="mothername" placeholder="" required value="{{ old('mothername') }}">
                        @error('mothername')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div> --}}
                      {{-- <div class="col-6">
                        <label for="inputNama" class="form-label">Tempat Lahir</label>
                        <input type="text" name="place_of_birth" class="form-control @error('place_of_birth') is-invalid @enderror" id="place_of_birth" placeholder="" required value="{{ old('place_of_birth') }}">
                        @error('place_of_birth')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div> --}}
                      {{-- <div class="col-6">
                        <label for="join" class="form-label">Tanggal Lahir</label>
                            <input type="datetime-local" class="form-control @error('birth_day') is-invalid @enderror" name="birth_day" id="birth_day" required>
                            @error('birth_day')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                            @enderror
                      </div> --}}
                      
                      <div class="col-6">
                        <label for="inputNama" class="form-label">No. HP / Whatsapp Mempelai Pria</label>
                        <input type="text" name="phone_grooms" class="form-control @error('phone_grooms') is-invalid @enderror" id="phone_grooms" placeholder="" required value="{{ old('phone_grooms') }}">
                        @error('phone_grooms')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputNama" class="form-label">No. HP / Whatsapp Mempelai Wanita</label>
                        <input type="text" name="phone_brides" class="form-control @error('phone_brides') is-invalid @enderror" id="phone_brides" placeholder="" required value="{{ old('phone_brides') }}">
                        @error('phone_brides')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email Mempelai Pria</label>
                        <input type="email" name="email_grooms" class="form-control @error('email_grooms') is-invalid @enderror" id="email_grooms" required value="{{ old('email_grooms') }}">
                        @error('email_grooms')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email Mempelai Wanita</label>
                        <input type="email" name="email_brides" class="form-control @error('email_brides') is-invalid @enderror" id="email_brides" required value="{{ old('email_brides') }}">
                        @error('email_brides')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputAddress" class="form-label">Alamat Mempelai Pria</label>
                        {{-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> --}}
                        <textarea class="form-control @error('address_grooms') is-invalid @enderror" name="address_grooms" id="address_grooms" rows="3" required value="{{ old('address_grooms') }}"></textarea>
                        @error('address_grooms')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <label for="inputAddress" class="form-label">Alamat Mempelai Wanita</label>
                        {{-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> --}}
                        <textarea class="form-control @error('address_brides') is-invalid @enderror" name="address_brides" id="address_brides" rows="3" required value="{{ old('address_brides') }}"></textarea>
                        @error('address_brides')
                            <div class="invalid-feedback">  
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="confirm-next mb-3" style="display :block;">
                      <button class="btn btn-primary btn-block visible-sm visible-xs submit mb-4 mt-3"><i class="bi bi-send me-1"></i> SUBMIT</button>
                      </div>
                    </form>
                    {{-- <hr class="m-t-50"> --}}
                      {{-- <div class="form-group">
                          <!-- <label class="label-title">Centang untuk setuju</label> -->
                          <div class="checkbox checkbox-info mt-3">
                              <input id="setuju" type="checkbox" name="setuju" value="1">
                              <label for="setuju">Dengan ini saya menyatakan telah membaca dan menyetujui.</label>
                          </div>
                      </div> --}}
                      {{-- <div class="alert alert-danger errormsg m-b-20" id="form_baptisan_air_error">Periksa Kembali Data Yang Diinput</div> --}}
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
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection