@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="doadanpuasa">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Doa dan Puasa</h2>
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
            <a href="/doadanpuasa">
              <button class="button-doadanpuasa mt-4 mb-3 me-3">
                Manfaat Doa dan Puasa
              </button>
            </a>
            <a href="/jadwaldoadanpuasa">
              <button class="button-doadanpuasa2 mt-4 mb-3">
                Jadwal & Lokasi Doa dan Puasa
              </button>
            </a>
          </div>
          <div>
            <p>Shalom . . . Merupakan suatu kehormatan bagi GESBA Malinau Kota yang dipercayakan Tuhan untuk mengembalakan Jemaat dan Pengerja yang adalah milik Kristus, yang militan dan siap bayar harga untuk datang berdoa dan berpuasa serta bersekutu dan mencari wajah Tuhan di Doa dan Puasa. Selamat Berjuang . . . !</p>
            <div class="card-juduldoadanpuasa">
              <h4>Definisi Doa dan Puasa</h4>
            </div>
            <p>Definisi doa dan puasa adalah suatu hubungan yang dilakukan secara rutin untuk berkomunikasi kepada Tuhan dengan cara tidak makan, minum dan menjaga sikap serta hanya fokus pada persekutuan dengan Tuhan melalui Firman dan Roh Tuhan.</p>
            <div class="card-juduldoadanpuasa">
              <h4>Makna Doa dan Puasa</h4>
            </div>
            <p>Mengikuti Teladan Yesus dan Nabi-nabi serta Rasul-rasul.
              Matius 17:1-4</p>
            <div class="card-juduldoadanpuasa">
              <h4>Keuntungan dari mengikuti Doa dan Puasa</h4>
            </div>
            <p>Membatalkan bencana yang Tuhan akan lakukan seperti di Ninewe
              Yunus 3:7-10 <br>
              Mendapat kuasa dari Tuhan untuk mengusir kuasa setan
              Matius 17:21</p>
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