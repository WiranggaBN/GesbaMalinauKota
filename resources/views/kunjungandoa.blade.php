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
                    <h2>Kunjungan Doa</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-doaucapansyukur">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">      
          <div class="row">
            <div class="col-md-4">
              <div class="card-doaucapansyukur bg-info">
                <label class="label-title mb-2">Jika Bpk/Ibu ada pertanyaan bisa menghubungi nomor berikut,</label>
                <ul class="list-icons m-t-10">
                  <li><i class="fa fa-mobile text-dark"></i> <strong>Ibu Novi</strong> (<strong><a href="tel:081212262677" class="text-decoration-none text-dark">081212262677</a></strong>)</li>
                  <li><i class="fa fa-mobile text-dark"></i> <strong>Pak Indarwanto Tarigan</strong> (<strong><a href="tel:081291024270" class="text-decoration-none text-dark">081291024270</a></strong>)</li>
                  <li><i class="fa fa-mobile text-dark"></i> <strong>Pak Lukas</strong> (<strong><a href="tel:081398036651" class="text-decoration-none text-dark">081398036651</a></strong>)</li>
              </ul>
              </div>
              <form class="row" method="post" action="/kunjungandoa">
                @csrf
              <div class="card-doaucapansyukur mt-4">
                <div class="form-group m-b-0">
                            <label class="label-title mb-2">Permintaan pelayanan ini ditujukan untuk? <span class="clr-alizarin">*</span></label>
                            <div class="row">                                    
                                <div class="col-xs-12">
                                  <div class="radio radio-block radio-info">
                                    <input type="radio" id="diminta_oleh" value="Diri Sendiri" name="diminta_oleh" class="diminta_oleh @error('diminta_oleh') is-invalid @enderror" required>
                                    <label for="Diri_Sendiri"> Diri Sendiri</label>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="radio radio-block radio-info">
                                      <input type="radio" id="diminta_oleh" value="Orang Lain" name="diminta_oleh" class="diminta_oleh @error('diminta_oleh') is-invalid @enderror" required>
                                      <label for="Orang_Lain"> Orang Lain</label>
                                    </div>
                                  </div>                            
                              </div>
                        </div>
              </div>
            </div>
            <div class="col-md-8">
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
              <div class="card-doaucapansyukur1">
                
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" required autofocus value="{{ old('fullname') }}">
                    @error('fullname')
                        <div class="invalid-feedback">  
                          {{ $message }}
                        </div>
                        @enderror
                  </div>
                  {{-- <div class="col-12">
                    <label for="join" class="form-label">Tanggal Lahir</label>
                        <input type="datetime-local" class="form-control @error('birth_day') is-invalid @enderror" name="birth_day" id="birth_day" required>
                        @error('birth_day')
                        <div class="invalid-feedback">  
                          {{ $message }}
                        </div>
                        @enderror
                  </div> --}}
                  <div class="col-12 mt-3">
                    <label for="inputNama" class="form-label">Jenis Kelamin</label><br>
                      <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender" value="Laki-Laki" required>
                      <label class="form-check-label me-5 ms-1" for="Laki-Laki"> Laki-Laki</label>                                           
                      <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender" value="Perempuan" required>
                      <label class="form-check-label ms-1" for="Perempuan"> Perempuan</label>   
                      @error('gender')
                        <div class="invalid-feedback">  
                          {{ $message }}
                        </div>
                      @enderror                  
                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="inputNama" class="form-label">No. HP / Whatsapp</label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" required value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">  
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">  
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="inputEmail4" class="form-label">Jenis Pelayanan</label>
                    <select type="text" class="form-select @error('type_of_service') is-invalid @enderror" name="type_of_service" id="type_of_service" aria-label="Default select example" required>
                      <option selected></option>
                      <option value="Jiwa Baru">Jiwa Baru</option>
                      <option value="Ucapan Syukur">Ucapan Syukur</option>
                      <option value="Masalah Ekonomi">Masalah Ekonomi</option>
                      <option value="Masalah Keluarga">Masalah Keluarga</option>
                      <option value="Masalah Okultisme">Masalah Okultisme</option>
                      <option value="Masalah Pendidikan<">Masalah Pendidikan</option>
                      <option value="Masalah Sakit Penyakit">Masalah Sakit Penyakit</option>
                      <option value="Masalah Sosial">Masalah Sosial</option>
                      <option value="Pemberkatan Gedung">Pemberkatan Gedung</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    @error('type_of_service')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="col-12 mt-3">
                    <label for="join" class="form-label">Tanggal dan Waktu Doa</label>
                        <input type="datetime-local" class="form-control @error('pray_day') is-invalid @enderror" name="pray_day" id="pray_day" required>
                        @error('pray_day')
                        <div class="invalid-feedback">  
                          {{ $message }}
                        </div>
                        @enderror
                  </div>
                  <div class="col-12 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail / Pokok Doa</i></label>
                    <textarea type="text" class="form-control @error('detail') is-invalid @enderror" id="detail" name="detail" rows="3" required value="{{ old('detail') }}"></textarea>
                    @error('detail')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  {{-- <div class="col-12">
                    <label for="inputAddress2" class="form-label">Ingin Dikunjungi?</label>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                  </div> --}}
                  <div class="mb-3 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan <i>(Jika Ada)</i></label>
                    <textarea type="text" class="form-control" id="message" name="message" rows="3"></textarea>
                  </div>
                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-send me-1"></i> SUBMIT</button>
                  </div>
                </form>
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