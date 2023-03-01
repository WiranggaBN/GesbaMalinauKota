@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="doadanpuasa">
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
<section id="content-doadanpuasa" >
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div>
            <a href="/pencariandana">
              <button class="button-doadanpuasa mt-4 mb-3 me-3">
                Tujuan Pencarian Dana
              </button>
            </a>
            <a href="/jadwalpencariandana">
              <button class="button-doadanpuasa2 mt-4 mb-3">
                Jadwal & Lokasi Pencarian Dana
              </button>
            </a>
          </div>
          <div>
            <p>Shalom . . . Merupakan suatu kehormatan bagi GESBA Malinau Kota yang dipercayakan Tuhan untuk mengembalakan Jemaat dan Pengerja yang adalah milik Kristus, yang militan dan siap bayar harga untuk rela datang bekerjasama untuk Tuhan pada Pencarian Dana. Selamat Berjuang . . . !</p>
            <div class="card-juduldoadanpuasa">
              <h4>Definisi Pencarian Dana</h4>
            </div>
            <p>Pencarian Dana adalah salah satu sarana yang di sediakan oleh Pencarian Dana bagi jemaat Tuhan untuk dapat datang dan Berdoa, Memuji dan Menyembah Tuhan dalam keintiman (saat teduh) secara bersama-sama dan menerima pengajaran Firman Tuhan.</p>
            <div class="card-juduldoadanpuasa">
              <h4>Tujuan Pencarian Dana</h4>
            </div>
            <p>Pencarian Dana adalah salah satu sarana yang di sediakan oleh Pencarian Dana bagi jemaat Tuhan untuk dapat datang dan Berdoa, Memuji dan Menyembah Tuhan dalam keintiman (saat teduh) secara bersama-sama dan menerima pengajaran Firman Tuhan.</p>
            <div class="card-juduldoadanpuasa">
              <h4>Keuntungan dari Pencarian Dana</h4>
            </div>
            <p>Pencarian Dana adalah salah satu sarana yang di sediakan oleh Pencarian Dana bagi jemaat Tuhan untuk dapat datang dan Berdoa, Memuji dan Menyembah Tuhan dalam keintiman (saat teduh) secara bersama-sama dan menerima pengajaran Firman Tuhan.</p>
            {{-- <div class="card-juduldoadanpuasa">
              <h4>Penghalang untuk datang ke Doa dan Puasa</h4>
            </div>
            <p>Doa fajar adalah salah satu sarana yang di sediakan oleh GBI - PRJ bagi jemaat Tuhan untuk dapat datang dan Berdoa, Memuji dan Menyembah Tuhan dalam keintiman (saat teduh) secara bersama-sama dan menerima pengajaran Firman Tuhan.</p>
            <div class="card-juduldoadanpuasa">
              <h4>Solusi untuk mengalahkan penghalang</h4>
            </div>
            <p>Doa fajar adalah salah satu sarana yang di sediakan oleh GBI - PRJ bagi jemaat Tuhan untuk dapat datang dan Berdoa, Memuji dan Menyembah Tuhan dalam keintiman (saat teduh) secara bersama-sama dan menerima pengajaran Firman Tuhan.</p> --}}
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