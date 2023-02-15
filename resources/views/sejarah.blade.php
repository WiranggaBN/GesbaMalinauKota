@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sejarah Gereja</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

<button class="button-sejarah mt-4 mb-3">
  <img src="Vector1.png" alt="">
</button>
@foreach ($sejarah as $sejarahs) 
    <article>
      <h2><a href="/sejarahs/{{ $sejarahs->slug }}"></a></h2>
      {!! $sejarahs->body !!}
    </article>
@endforeach

{{-- Content Section --}}
{{-- <section id="content-sejarah">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button class="button-sejarah mt-4 mb-3">
                        <img src="Vector1.png" alt="">
                    </button>
                    <p>
                        Sebagai Gembala CK7, Pdt. DR. Janto Simkoputera, MD PhD juga merupakan seorang dokter ahli penyakit dalam atau internis yang cukup dihormati. Saat ini pun beliau melakukan praktik di salah satu rumah sakit ternama di Kebon Jeruk, Jakarta Barat. Beliau menamatkan pendidikan spesialis penyakit dalam di University of Hamburg, Jerman pada tahun 1976. Beliau juga anggota Ikatan Dokter Indonesia (IDI), serta Perhimpunan Dokter Spesialis Penyakit Dalam Indonesia. <br><br>

                        Latar belakang pendidikan medis beliau mencakup: <br>

                        <ul class="text-align-justify">
                            <li>Medical Doctor - Universitat Des Saarlandes, Hamburg, Jerman, 1971</li>
                            <li>Spesialis Penyakit Dalam - University of Hamburg, Jerman, 1976</li>
                            <li>Gastroenterologist - Harvard Medical School, Boston, AS, 1980</li>
                            <li>Hepatologist - Chiba University, Jepang, 1982</li>
                        </ul>
                    </p> 
                    <p>
                        Pdt. DR. Janto Simkoputera, MD PhD, atau secara akrab disapa dan dikenal sebagai DR. Janto, memiliki moto : to be or not to be. Artinya, menjadi orang Kristen harus taat firman Tuhan, atau tidak sama sekali! Sebab sama-sama berdosa kalau melanggar firman Tuhan, dan upah dosa ialah maut. Jadi, tidak banyak pilihan. Benar-benar mengutamakan Tuhan atau tidak sama sekali. Tidak bisa setengah-setengah. Sebab banyak orang yang melayani Tuhan, tetapi melanggar firman. <br><br>

                        Beliau selalu mendorong jemaat dan orang-orang agar percaya firman dan memprioritaskan Tuhan. Itulah wujud persembahan kepada Tuhan, yaitu melalui pelayanan yang penuh tanggung jawab. <br><br>

                        Sebagai seorang dokter spesialis yang sukses, sekaligus melakukan pelayanan penggembalaan jemaat dengan benar, beliau harus mengorbankan sebagian besar jam-jam praktik medisnya guna memberikan pelayanan terbaik kepada Tuhan.<br><br>

                        Itulah yang beliau pegang. Beliau percaya, semua pengorbanan itu wujud persembahan untuk Tuhan. Ada proses pembentukan karakter dan hati. Dan selama pelayanan pun proses pembentukan karakter pasti terus terjadi, dan baru selesai bila Tuhan Yesus datang kelak untuk kedua kalinya.<br><br>

                        Beliau memulai awal pelayanan penggembalaannya pada tahun 1998 dengan jemaat hanya sekitar 100 orang. Kini jumlah jemaat terus bermultiplikasi mencapai hingga puluhan ribu jemaat.<br><br>

                        Penggembalaan beliau mengikuti tuntunan Gembala Sidang, yaitu Pdt. DR. Ir. Niko Njotorahardjo, yaitu Restorasi Pondok Daud. Artinya, membawa hadirat Tuhan ke gereja ini. Itu pun yang menjadi DNA CK7. Dengan mengikuti tuntunan Gembala Sidang, Tuhan mengirimkan jiwa-jiwa, bukan melalui program-program yang menyenangkan manusia, atau dengan mengandalkan kekuatan sendiri.<br><br>

                        Dan dengan mengandalkan & mengikuti pimpinan Roh Kudus, gereja ini dipakai oleh Tuhan untuk memulihkan dan merestorasi Pondok Daud. Melalui doa, pujian, dan penyembahan di gereja ini, banyak jemaat yang merasakan hadirat-Nya.<br><br>

                        Pdt. DR. Janto Simkoputera, MD PhD pun mesti membagi waktu antara menangani pekerjaan sebagai seorang dokter sekaligus menggembalakan jemaat. Memang tidak mudah membagi waktu antara profesi dokter dan sebagai gembala gereja. Seharusnya seorang gembala memang menjadi seorang fulltimer (sepenuh waktu), bukan bekerja sekuler. Tetapi, di lain pihak justru melalui profesi beliau sebagai dokterlah yang memudahkan/membantunya mengajak banyak orang atau pasien untuk mencari Tuhan. Sebuah pekerjaan yang mungkin tidak banyak pendeta yang bisa mengatasinya.<br><br>

                        Pdt. Niko pun meneguhkan beliau supaya tidak perlu meninggalkan atau beralih profesi, sebab hanya dengan menjadi pendeta tidak dapat mengisi profesi dokter dalam menjangkau jiwa-jiwa. Dan hal itu memang benar, karena banyak sekali pasien beliau yang akhirnya menjadi jemaat CK7 sebab melihat campur tangan dan kuasa pertolongan Tuhan dalam hidup mereka lewat kesaksian serta pelayanan DR. Janto. Sebab itulah, DR. Janto tidak mengubah profesinya, sesuai anjuran Gembala Sidang.<br><br>

                        Tentang membagi waktu, memang berat sekali karena begitu banyak pekerjaan di rumah sakit dan dengan tanggung jawab yang sedemikian besar. Perlu pengorbanan yang tidak sedikit pula untuk semuanya. Tetapi, beliau yakin, tujuan kekristenan adalah untuk menjadi umat yang berkenan dengan memberikan yang terbaik bagi Allah.<br><br>

                        DR. Janto pun menerapkan disiplin di gereja yang beliau gembalakan. Di antaranya adalah adalah melalui Doa Fajar dan Menara Doa. Kegiatan doa tersebutpun ternyata sangat bermanfaat bagi pertumbuhan rohani jemaat dan merupakan generator pertumbuhan gereja sendiri.<br><br>

                        CK7 pun dikenal dengan kegiatan Doa Fajarnya yang sudah dimulai sejak belasan tahun silam. Doa Fajar dilaksanakan mulai pukul 04.45 WIB. Jemaat yang hadir diajar untuk mencari wajah Tuhan melalui doa, pujian, dan penyembahan, serta penyampaian firman Tuhan.<br><br>

                        Dan di masa pandemic covid-19 ini pun tidak menyurutkan roh dan semangat yang bernyala-nyala dari pengerja maupun jemaat untuk duduk di kaki Tuhan pada Pk. 04.40 WIB di Doa Fajar dan Pk. 15.00 s/d 21.00 WIB di Menara Doa secara online melalui aplikasi zoom.<br><br>

                        Khusus di masa pandemic covid-19 ini semua kegiatan yang biasa dilakukan semasa offline tetap diadakan secara online baik itu COOL (COmmunity Of Love), KOM (Kehidupan Orientasi Melayani), KOM Junior, Rumah Doa, Diklat Doa, bahkan Ibadah-Ibadah Khusus lainnya seperti MOI (Man Of Integrity), CM (Cancer Ministry), WOI (Woman Of Integrity), WBD (Welcome Baby Day), dll. Bahkan ada penambahan kegiatan online lainnya yaitu Bible Study dan SGL (Spiritual Guidance For Lovers).<br><br>

                        Ibadah rutin setiap hari Minggu seperti Ibadah Raya Bahasa Indonesia (dengan terjemahan Bahasa Inggris dan Sign Language), Ibadah Bahasa Mandarin, Ibadah Dewasa Muda, Ibadah Youth Bahasa Inggris, Ibadah Youth dan Junior Bahasa Indonesia, Joshua Generation Kids English Service, Sekolah Minggu Bahasa Indonesia, dan Ibadah Anak Berkebutuhan Khusus tetap dilakukan secara rutin melalui YouTube Channel GBI PRJ CK7.<br><br>

                        Tuhan mempercayakan visi kepada CK7 adalah menjadi gereja yang berkarakter Kristus dan berdampak bagi sesame dan ini menjadi komitmen kami baik sebelum pandemic covid-19 terlebih di masa pandemic covid-19 ini.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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