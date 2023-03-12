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
                    <h2>Baptisan</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-baptisan">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="persyaratan col-md-12">
                    <h4 class="mt-4"><i class="bi bi-caret-right-fill"></i> Persyaratan</h4>
                      <ol>
                        <li>Membawa Pas foto 3 x 4 (2 lembar) ditulis nama dibelakang foto</li>
                        <li>Peserta wajib mengikuti pengarahan Baptisan di Gereja selama 3 hari sebelum pelaksanaan Baptisan Air</li>
                        <li>Jika peserta tidak mengikuti Pengarahan Baptisan Air, maka tidak dapat mengikuti Sakramen Baptisan Air</li>
                        <li>Bersedia untuk menandatangani surat pernyataan sehat.</li>
                        <li>Pendamping maks. 1 orang, khusus bagi Peserta yang Lanjut Usia (> 70 thn) / handicapped / dibawah 17 tahun.</li>
                        <li>Wajib membawa Handuk (tidak disediakan) & Baju Ganti</li>
                        <li>Pk. 08.30 - 09.00 (registrasi ulang)</li>
                        <li>Tempat pelaksanaan baptisan air: <br> Jl. Pasar Induk Gang Gesba RT.20, Kec. Malinau Kota, Kabupaten Malinau, Kalimantan Utara <br> 021-5863208</li>
                      </ol>
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
                  <h4 class="mt-4">Data Diri</h4>
                  <form class="row g-3" method="post" action="/baptisan">
                    @csrf
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Nama Lengkap</label>
                      <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" placeholder="" required autofocus value="{{ old('fullname') }}">
                      @error('fullname')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Nama Ayah</label>
                      <input type="text" name="fathername" class="form-control @error('fathername') is-invalid @enderror" id="fathername" placeholder="" required value="{{ old('fathername') }}">
                      @error('fathername')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Jenis Kelamin</label><br>
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender" value="Laki-laki" required>
                        <label class="form-check-label me-5 ms-1" for="Laki-laki"> Laki-Laki</label>                                           
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender" value="Perempuan" required>
                        <label class="form-check-label ms-1" for="Perempuan"> Perempuan</label>   
                        @error('gender')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                        @enderror                  
                    </div>
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Nama Ibu</label>
                      <input type="text" name="mothername" class="form-control @error('mothername') is-invalid @enderror" id="mothername" placeholder="" required value="{{ old('mothername') }}">
                      @error('mothername')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Tempat Lahir</label>
                      <input type="text" name="place_of_birth" class="form-control @error('place_of_birth') is-invalid @enderror" id="place_of_birth" placeholder="" required value="{{ old('place_of_birth') }}">
                      @error('place_of_birth')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="join" class="form-label">Tanggal Lahir</label>
                          <input type="datetime-local" class="form-control @error('birth_day') is-invalid @enderror" name="birth_day" id="birth_day" required>
                          @error('birth_day')
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
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                      @error('email')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Alamat Lengkap</label>
                      {{-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> --}}
                      <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3" required value="{{ old('address') }}"></textarea>
                      @error('address')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="confirm-next mb-3" style="display :block;">
                      <button class="btn btn-primary btn-block visible-sm visible-xs submit mb-4 mt-3"><i class="bi bi-send me-1"></i> SUBMIT</button>
                    </div>
                  </form>
                    {{-- <div class="form-group">
                        <!-- <label class="label-title">Centang untuk setuju</label> -->
                        <div class="checkbox checkbox-info mt-3">
                            <input id="setuju" type="checkbox" name="setuju" value="1">
                            <label for="setuju">Dengan ini saya menyatakan telah membaca dan menyetujui.</label>
                        </div>
                    </div> --}}
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