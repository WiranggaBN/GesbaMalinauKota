@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="visimisi">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gembala Sidang</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-pendeta">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
              <a href="/"><button class="button-sejarah mt-4 mb-3">
                <img src="Vector1.png" alt="">
            </button></a>
                <div class="col-md-12 d-flex">
                    
                    {{-- @foreach ($gembalasidang as $gembalasidangs)
                    <p>{!! $gembalasidangs->body !!}</p>
                    @endforeach --}}
                    <div class="col-6">
                      <img src="foto_gembala.jpeg" alt="" class="foto_gembala mt-2">
                    </div>
                    <div class="col-6">
                      <h2 class="text-dark">Profil Gembala Sidang </h2>
                      <ul>
                        <li>Nama : Pdt.Daud Pakiding, S.Th</li>
                        <li>Tempat tanggal lahir: Tana Toraja, 16 April 1973</li>
                        <li>Pendidikan Terakhir : S1 Teologi STT Sunergio</li>
                        <li>Pengalaman ikut organisasi: Kordinator daerah kaltim 2005-2010, ketua bpd kaltim 2010-2015, ketua BPD Kaltara 2015-2022, Ketua PGPI Malinau 2017-2018, pegurus pusat ketua depetemen misi dan perintisan 2015-2021.</li>
                        {{-- <li>Pengalaman kerja gembala sidang : <br>   --}}
                      </ul>
                    </div>
                </div>
                <div class="col-12 mt-3">
                  <h2 class="text-center text-dark">Riwayat Pelayanan</h2>
                  <p>Pada tahun 1990 saat masih umur 17 tahun ditawarkan oleh bapak Pdt. Barnabas di GESBA Sukamaju di dusun kambarak desa sukadamai kecamatan sukamaju kabupaten luwu  Sulawesi Selatan. pada saat itu ditanyakan siapa yang mau sekolah Alkitab, kemudian pak gembala menerima tawaran itu  dan sekolah Alkitab di SATFM Sekolah Alkitab Tiranus Filadelfia Makassar dan selesai 13 Agustus 1991, kemudian langsung menjadi pengerja di GESBA wasponda sampai 29 Desember 1992  dan januari 1993-desember 1997. Kemudian pada Januari 1998 mulai merintis pelayanan di kalimantan Timur di loa janan Samarinda sampai bulan Augustus 1998, kemudian pidah membuka persekutuan di kampung enam tarakan di Rumah Bpk Simon Toding sampai tahun 1999  dan membangun Gereja GPSI elsadai enam dan dan tahun  2000 mulai membuka pos PI  di lapangan dan tanggal 3 Oktober 2001 dibuka secara Resmi  Gereja Segala Bangsa Filadefia Tarakan.</li></p>
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