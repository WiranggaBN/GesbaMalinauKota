@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Doa Ucapan Syukur</h2>
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
              <div class="card-doaucapansyukur">
                <label class="label-title mb-2">Jika Bpk/Ibu ada pertanyaan bisa menghubungi nomor berikut,</label>
                <ul class="list-icons m-t-10">
                  <li><i class="fa-solid fa-mobile text-dark"></i> <strong>Ibu Novi</strong> (<strong><a href="tel:081212262677">081212262677</a></strong>)</li>
                  <li><i class="fa-solid fa-mobile text-dark"></i> <strong>Pak Indarwanto Tarigan</strong> (<strong><a href="tel:081291024270">081291024270</a></strong>)</li>
                  <li><i class="fa-solid fa-mobile text-dark"></i> <strong>Pak Lukas</strong> (<strong><a href="tel:081398036651">081398036651</a></strong>)</li>
              </ul>
              </div>
              <div class="card-doaucapansyukur mt-4">
                <div class="form-group m-b-0">
                            <label class="label-title mb-2">Permintaan pelayanan ini ditujukan untuk? <span class="clr-alizarin">*</span></label>
                            <div class="row">                                    
                                <div class="col-xs-12">
                                  <div class="radio radio-block radio-info">
                                    <input type="radio" id="diminta_oleh1" value="1" name="diminta_oleh" class="diminta_oleh">
                                    <label for="diminta_oleh1"> Diri Sendiri
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="radio radio-block radio-info">
                                    <input type="radio" id="diminta_oleh0" value="0" name="diminta_oleh" class="diminta_oleh">
                                    <label for="diminta_oleh0"> Orang Lain</label>
                                  </div>
                                </div>                            
                                </div>
                        </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card-doaucapansyukur1">
                <form class="row g-3">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                  <hr>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Ingin Dikunjungi?</label>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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