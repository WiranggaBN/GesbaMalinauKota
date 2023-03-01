@extends('layouts.main')

@section('container')
{{-- hero section --}}
<section id="khotbah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ringkasan Khotbah</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-kpk" >
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mt-4">          
        {{-- @foreach ($materipengajarann as $materipengajaran) 
        </div>
        <div class="mt-5">
          <h3 class="text-dark text-decoration-none">
            <a href="/materipengajarann/{{ $materipengajaran->slug }}" class="text-dark text-decoration-none">{{ $materipengajaran->title }}</a>
          </h3>
          <hr>
          <img src="../kpk6.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">{{ $materipengajaran->title_image }}</p>
          {!! $materipengajaran->excerpt !!}<a href="/kpksatu" class="text-decoration-none"> Lanjutkan membaca...</a>
        </div>
        @endforeach --}}
        @foreach ($posts as $post)
        <div class="mt-5">
          <h3 class="text-dark">
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
          </h3>
          <hr>
          <img src="F.jpg" alt="" class="gambarsatudua mt-2"><br>
          <p class="mt-2 text-center">{{ $post->title_image }}</p>
          <p>{{ $post->excerpt }}</p><a href="/posts/{{ $post->slug }}" class="text-decoration-none"> Lanjutkan membaca...</a>
        </div>
        @endforeach
        {{-- <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">TABERNAKEL II</h3></a>
          <hr>
          <img src="kpk2.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">KOLAM PEMBASUHAN <br> Keluaran 30:17-21</p>
          <p class="text-justify">Ayat 17 Maka berfirmanlah Tuhan kepada Musa, firmannya : <br><br> Ayat 18 Dan lagi hendaklah kau perbuat sebuah kolam daripada tembaga dan kakinyapun daripada tembaga akan pebasuhan dan tarulah dia diantara kemah perhimpunan dengan mezbah, lalu bubuhlah air dalamnya. <br><br> Ayat 19 Maka Harun dan anak-anaknya laki-laki hendaklah membasuh kaki tangannya dengan air yang dari kolam itu. <br><br> Ayat 20 Maka apabila mereka itu masuk kedalam kemah perhimpunan, tak akan jangan dibasuhkannya dirinya dengan air, asal jangan mereka itu mati dibunuh; maka demikianpun apabila mereka itu mengahmpiri mezbah hendak berbuat bakti dan memasang korban bakaran itu bagi Tuhan. <br><br> Ayat 21 Maka hendaklah mereka itu membasuh kaki tangannya, supaya jangan mereka itu mati dibunuh; maka perkara inilah menjadi suatu hukum yang kekal baginya dan bagi benihnya turun temurun adanya.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">TABERNAKEL I</h3></a>
          <hr>
          <img src="kpk3.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">PENGERTIAN TENTANG TABERNAKEL <br> KELUARAN 25 : 8</p>
          <p class="text-center"><i>“Maka hendaklah mereka itu memperbuatkan Daku sebuah Baitulmukadis supaya Aku duduk diantara mereka itu”.</i></p>
          <p class="text-justify">abernakel diambil dari bahasa asing bumi belahan barat yang diterjemahkan Rumah Allah. Rumah Sembahyang Baitulmukadis.Tabernakel ini dibangun berdasarkan hikmat Allah yang ditujukan kepada Nabi Musa tatkala Nabi Musa bersekutu dengan Tuhan. Hendaklah diketahui bahwa hikmat Allah itu menjadi kebodohan bagi manusia, 1 Korintus 1:21.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">PELAJARAN ROH KUDUS</h3></a>
          <hr>
          <img src="kpk4.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">PELAJARAN ROH KUDUS</p>
          <p class="text-justify">Pelajaran Roh Kudus adalah pelajaran yg terpenting bagi gereja, begitu banyak pendapat tentang pekerjaan Roh Kudus. Pekerjaan Roh Kudus ini akan diterangkan bersama dengan susunan Tabernakel. Susunan pekerjaan Roh Kudus akan diuraikan dalam 7 Tingkat Iman. 
          <ol>
            <li>Mendengar Firman dan Percaya.</li>
            <li>Menyesal dan Bertobat</li>
            <li>Mengeluarkan buah-buah Pertobatan</li>
            <li>Baptisan Air</li>
            <li>Baptisan Roh Kudus dan Kepenuhan Roh Kudus</li>
            <li>Karunia-karunia Rohani : Karunia-karunia Roh Kudus, jawatan Tuhan, Buah Roh Kudus, Rahasia Penyembahan
            </li>
            <li>kesempurnaan.</li>
          </ol>
          Dalam susunan Tabernakel :
          <a href="/kpksatu " class="text-decoration-none">Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">LAMBANG PENYERAHAN DIRI</h3></a>
          <hr>
          <img src="kpk5.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">LAMBANG PENYERAHAN DIRI</p>
          <p class="text-justify">Tuhan Yesus memberi kita 2 lambang penyerahan diri yg besar. Keduanya terbuat dari kayu. Yang satu adalah  Salib dan lainnya adalah Kuk. Salib dan Kuk melambangkan 2 aspek penyerahan diri yg berbeda. Salib merupakan alat kematian; kuk merupakan alat untuk bekerja keras. Salib merupakan lambang pengorbanan; Kuk merupakan lambang pelayanan. Salib mengingatkan kita pada darah; Kuk mengingatkan kita pada keringat. Penyerahan diri Kristen itu berarti siap memikul Salib dan siap Memikul Kuk. Jadi siap mati bagi Kristus dan siap memeras keringat / bekerja keras bagi Kristus. Luk. 9:23 ; Mat. 11 : 29. Tuhan Yesus tidak hanya mengajak kita datang kepadaNya, tetapi juga menyuruh kita untuk memikul KukNya sehingga kita bisa belajar kepadaNya. Mat. 11:28-29.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">RAHASIA PEMBANGUNAN GEREJA HUJAN AWAL & GEREJA HUJAN AKHIR</h3></a>
          <hr>
          <img src="kpk7.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">HAGAI 2:10</p>
          <p class="text-justify">Adapun  Rumah ini, kemegahannya yang kemudian akan melebihi kemegahannya yang semula, Firman Tuhan semesta alam, dan ditempat ini Aku akan member damai sejahtera, demikianlah Firman Tuhan semesta alam. Hal ini berbicara tentang Kaabah Solaiman dan Kaabah Zerubabel. Kaabah Solaiman adalah Kaabah yang paling inidah yang dibuat oleh Raja Solaiman untuk Allah berdasarkan petunjuk Tuhan kepada ayahnya Daud. Raja Daud tidak diizinkan membangun Kaabah karena pada masa pemerintahannya dia banyak menumpahkan darah. Tapi Allah mempercayakan anaknya Solaiman yang menggantikan dia sebagai Raja bagi bangsa Israel, sebab itu dinamakan Kaabah Solaiman. Dia dikarunikan Allah akal budi dan pengertian yang luar biasa perh. 1Raja 4:29-34, hikmatnya hampir sama dengan Adam saat ditaman Eden selagi Adam belum jatuh dalam dosa Kej. 1:28-31; Kej. 2:19-20. Sebab itu Raja Solaiman dikatan raja hikmat , dan memerintah bangsa Israel selama 40 th 1Raja 11:42. Setelah dia mati diganti oleh anaknya Rehabeam 1Raja 11:43.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DUKA CITA KUDUS</h3></a>
          <hr>
          <img src="kpk8.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">2Korintus 7:10</p>
          <p class="text-center">Sebab dukacita menurut kehendak Allah menghasilkan pertobatan yang membawa keselamatan dan yang tidak akan disesalkan, tetapi dukacita yang dari dunia ini menghasilkan kematian.</p>
          <p class="text-justify">Tangisan adalah suatu hal yang universal, hal ini terjadi sejak manusia jatuh dalam dosa. Tangian tidak mengenal siapapun, apakah dia anak kecil, remaja, pemuda, orang tua ataupun kakek nenek dalam segala lapisan masyarakat, pendidikan, kedudukan, sosial budaya, suku, bangsa manapun  yang ada didunia semua mengalaminya.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DILEMA PEMUDA AKHIR ZAMAN</h3></a>
          <hr>
          <img src="kpk9.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="text-justify mt-2">Manusia diciptakan Allah pada hari yang ke enam,  setelah Allah menciptakan langit, bumi, laut dan sekalian isinya. Allah menempatkan manusia yaitu Adam dan Hawa di taman Eden dimana semua kebutuhan mereka telah disediakan.

            Kemudian Allah berfirman kepada Adam : Adapun buah-buah segala pohon yang dalam Taman ini  boleh engkau makan sesuka mu. Tetapi buah pohon pengetahuan akan hal baik dan jahat itu jangan engkau makan, karena pada hari engkau makan dari padanya engkau akan mati Kej. 2:16-17.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">TABERNAKEL DIHUBUNGKAN DENGAN 7 TINGKAT IMAN</h3></a>
          <hr>
          <img src="kpk10.jpg" alt="" class="gambarsatu mt-2"><br>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">KERANG MUTIARA</h3></a>
          <hr>
          <img src="kpk11.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="text-justify mt-2">Pada suatu hari seekor anak kerang di dasar laut mengadu kepada ibunya kerana sebutir pasir yang tajam memasuki tubuhnya yang merah dan lembek.<br><br> “Anakku…”kata ibunya sambil bercucuran air mata..<br><br> “Tuhan tidak memberikan pada kita bangsa kerang sebuah tanganpun, sehingga ibu tak mampu menolongmu. Aku tahu anakku, ia sangat sakit, tetapi terimalah itu sebagai takdir alam.” <br><br> ” Kuatkan hatimu. Jangan terlalu lincah lagi. Kerahkan semangatmu melawan rasa ngilu dan pedih yang menggigit. Balutlah pasir itu dengan getah perutmu.” <br><br> “Hanya itu yang boleh kau buat..” kata ibunya dengan sendu dan lembut. Anak kerang pun melakukan nasihat ibunya.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">Wahyu pasal 2 & 3, 7 Sidang Jemaat di Asia kecil</h3></a>
          <hr>
          <img src="kpk12.png" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">WAHYU PASAL DUA</p>
          <p class="text-justify">PEMBAGIANNYA : 
          <ol>
            <li>NASEHAT UNTUK SIDANG JEMAAT  EPESUS           AYAT   1 – 7</li>
            <li>NASEHAT UNTUK SIDANG JEMAAT SMIRNA           AYAT   8 – 11</li>
            <li>NASEHAT UNTUK SIDANG JEMAAT PERGAMUS     AYAT   12 – 17</li>
            <li>NASEHAT UNTUK SIDANG JEMAAT TIATIRA            AYAT   18 – 29</li>
          </ol>
          I. NASEHAT UNTUK SIDANG JEMAAT EPESUS.<br><br> EPESUS ARTINYA TERPUJI <br><br> PENDAHULUAN : Sidang Epesus ini memiliki sejarah karena ditempat inilah  rasul Paulus mendirikan sekolah Alkitab di Tiranus selama 2 th, sehingga sekalian orang yang diam di Asia mendengar Firman. Di Epesus ini pula rasul Ku Yohanes meninggal pada th 100 m [ mati sahid ]. Rasul Yohanes seperti telah diterangkan pada pendahuluan bahwa ia telah dibuang pada th 94 m oleh kaisar Domitian dari kerajaan Roma, dipulau Patmos. Disinilah dia beroleh kesempatan baik bersekutu dengan Aku sehingga pada th 96 m ia memperoleh anugerah dari Aku yang heran yaitu menerima buku Wahyu ini. Setelah ia selesai dengan buku Wahyu ini dan disuratkannya, maka ia dibebaskan dari pulau Patmos dan kembali ke Yerusalem. Kemudian dari Yerusalem kembali ke negeri kafir sampai ke Epesus. Pekabarannya berobah dari pekabaran yang lemah lembut, menjadi pekabaran yang keras. Dimana dia berhadapan sekarang dengan pengajaran palsu dan sesat, yang sudah menjalar dizamannya, banyak nabi-nabi palsu dihadapinya. Pada th 96 m rasul Ku ini berada dikota Epesus dan menulis :
          <ol>
            <li>Injil Yohanes</li>
            <li>Pertama Yohanes</li>
            <li>Kedua Yohanes</li>
            <li>Ketiga Yohanes</li>
          </ol>
          <a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">ARAHKAN KE ZION</h3></a>
          <hr>
          <img src="kpk13.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">ARAHKAN KE ZION <br>
            YERMIA 4:6</p>
          <p class="text-justify">Nabi Yermia adalah seorang hamba Tuhan yang diutus Tuhan untuk menyampaikan Firman Nya kepada bangsa Israel dalam hal ini bangsa Yehuda. Kita mengetahui bahwa pada waktu itu Israel telah terbagi menjadi dua Kerajaan :
            <ol>
              <li>Kerajaan Israel diutara dengan ibu kota Samaria.</li>
              <li>Kerajaan Yehuda diselatan dengan ibu kota Yerusalem</li>
            </ol>
            Kerajaan Israel terbagi dua tatkala Raja Solaiman wafat. Pada mulanya Kerajaan Yehuda ini berjalan dengan baik dengan berpegang pada hukum Torat dan Syariatnya, mereka tetap menjalankan ibadah kepada Tuhan. Yerusalem sebagai pusat pemerintahan dan tempat kedudukan Raja, sekaligus sebagai pusat kegiatan beribadah, karena di Yerusalem berdiri Kaabah Solaiman yang megah.
          <a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">RAHASIA KITAB WAHYU</h3></a>
          <hr>
          <img src="kpk14.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">KITAB WAHYU</p>
          <p class="text-justify">Wahyu kepada Yohanes : <br><br>

            Diungkapkan melalui visiun di Sulawesi Selatan kemudian disempurnakan di Sulawesi Utara.<br><br>
            
            Pendahuluan :<br><br>
            
            Judul yang sesungguhnya dari kitab ini adalah : Wahyunya Aku [ Tuhan Yesus ] bukan Wahyunya Yohanes. Rasul Ku Yohanes menerima wahyu ini dari Aku tatkala rasul Ku ini diasingkan / dibuang ke pulau Patmos karena menyaksikan kebenaran Firman Ku [ lihat peta, letaknya pulau Patmos di Asia kecil dilaut tengah ]. Dipulau Patmos inilah Aku menunjukkan kepadanya melalui wahyu / penglihatan hal-hal yang sedang terjadi pada zamannya [ gereja hujan awal ]dan hal-hal yang akan terjadi diakhir zaman yang belum pernah dilihatnya dan ia sendiripun tidak mengerti. Hal ini terjadi selain ditetapkan kepadanya juga disebabkan karena pengalaman rohani yang indah serta persekutuan yang heran dengan Aku.<a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DOA YANG SEHARUSNYA…………..</h3></a>
          <hr>
          <img src="kpk15.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">HENDAKLAH BERDOA,  MINTA PELARIAN ITU JANGAN BERLAKU PADA <br>MUSIN DINGIN ATAU HARI SABAT <br>MATIUS 24:20-21</p>
          <p class="text-justify">Tuhan Yesus menyapaikan kebenaran Firman Allah ini, dimana dikatakan hendaklah kamu berdoa, minta pelarian mu itu jangan berlaku pada musim dingin atau hari sabat. <br><br> Ada beberapa hal yang sangat penting yang harus kita perhatikan dalam Firman Tuhan ini : 
          <ol>
            <li>I.        Apa yang dimaksud dengan berdoa minta pelarian mu itu ?</li>
            <li>II.      Firman Tuhan ini ditujukan kepada siapa ?</li>
            <li>III.    Apa yang dimaksud dengan musim dingin atau hari sabat ?</li>
            <li>IV.    Mengapa pelarian itu jangan pada musim dingin atau hari sabat ?</li>
          </ol>
          Pertama kita harus memahami bahwa konteks Mat. 24 ini berbicara tentang akhir zaman, dimana Tuhan berjanji dia akan datang kedua kalinya dalam dua tahap :
          <ol>
            <li>Tahap pertama Dia hanya datang diatas awan-awan menjemput gereja Nya yang sudah dewasa rohani sempurna roh, jiwa dan tubuh tidak ada cacat cela atau gereja penganten Kristus 1Tess. 5:23-24; Mat. 5:48; Wah.12:1-2; Epes. 5:26-27,31-32.</li>
            <li>Tahap kedua yaitu untuk mengakhiri zaman antiKris dimana Dia akan turun kebumi dan berpijak diatas bukit Zaitun Zac. 14:1-4; Kisah 1:9-12; Wah. 19:11-21.</li>
          </ol>
          <a href="/kpksatu " class="text-decoration-none"> Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">RAHASIA PEKABARAN 12 RASUL HUJAN AWAN & 12 RASUL HUJAN AKHIR</h3></a>
          <hr>
          <img src="kpk16.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">RAHASIA PEKABARAN 12 RASUL HUJAN AWAL DAN 12 RASUL HUJAN AKHIR</p>
          <p class="text-justify">Untuk mengetahui dan mengerti bedanya dan rahasianya pekabaran 12 rasul rasul hujan awal dan 12 rasul hujan akhir, perhatikan Firman Tuhan dalam :
            <ol>
              <li>1Raja. 7:25 [ rahasia pekabaran 12 rasul hujan awal ]</li>
              <li>1Raja 10:18-20 [ rahasia pekabaran 12 rasul hujan akhir ]</li>
            </ol>
            Rahasia Pekabaran 12 Rasul Hujan Awal 1Raja 7:25 : <br><br>
            Maka tertanggunglah ia oleh Lembu 12 ekor, 3 ekor Lembuh kepalanya arah ke utara, dan 3 ekor Lembu kepalanya arah ke barat, dan 3 ekor Lembu arah kepalanya ke selatan, 3 ekor Lembu arah kepalanya ke timur dan kolam itupun tertanggunglah keatasnya, dan buntut segala lembu itu arah kedalam. <br><br> Dalam 1Raja 7:25 kita nampak 12 ekor lembu yg memikul kolam tembaga yg berada dihalaman pada Kaabah raja Salomo. Adapun 12 ekor Lembu ini yg memikul kolam tembaga yg berada dihalaman kaabah salomo, itu menunjuk kepada 12 rasul hujan awal yg membentuk gereja penganten pada hujan awal. Adapun sifat lembu adalah binatang penurut dan menenggala [ dipakai untuk membajak ] dan binatang yg dipakai untuk korban sembelihan. Lihat pelajaran Tabernakel Bil. 28 & 29. Kebanyakan orang suka membajak sawah dan ladang dengan mempergunakan Lembu daripada Kerbau, karena lebih cepat dan tahan panas. Adapun pekabaran rasul hujan awal adalah bersifat seperti lembu yakni pekabaran yg lemah lembut dan tidak suka melawan meskipun mereka mengalami banyak sengsara dan aniaya karena melayani Tuhan. Pekabaran mereka pada waktu itu hanya berhadapan dengan :
          <a href="/kpksatu " class="text-decoration-none">Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DARI TIMUR MEMANCAR KEBENARAN ALLAH DANIEL 9:20-27</h3></a>
          <hr>
          <img src="kpk17.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">DARI TIMUR MEMANCAR KEBENARAN ALLAH <br> DANIEL 9 : 20 -27</p>
          <p class="text-justify">Dalam kitab Daniel 9:20-27 ini berbicara tentang umat Israel <a href="/kpksatu " class="text-decoration-none">Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DARI TIMUR MEMANCAR KEBENARAN ALLAH DANIEL 9:20-27</h3></a>
          <hr>
          <img src="kpk18.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">DARI TIMUR MEMANCAR KEBENARAN ALLAH <br> DANIEL 9 : 20 -27</p>
          <p class="text-justify">Dalam kitab Daniel 9:20-27 ini berbicara tentang umat Israel <a href="/kpksatu " class="text-decoration-none">Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DARI TIMUR MEMANCAR KEBENARAN ALLAH DANIEL 9:20-27</h3></a>
          <hr>
          <img src="kpk19.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">DARI TIMUR MEMANCAR KEBENARAN ALLAH <br> DANIEL 9 : 20 -27</p>
          <p class="text-justify">Dalam kitab Daniel 9:20-27 ini berbicara tentang umat Israel <a href="/kpksatu " class="text-decoration-none">Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DARI TIMUR MEMANCAR KEBENARAN ALLAH DANIEL 9:20-27</h3></a>
          <hr>
          <img src="kpk20.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">DARI TIMUR MEMANCAR KEBENARAN ALLAH <br> DANIEL 9 : 20 -27</p>
          <p class="text-justify">Dalam kitab Daniel 9:20-27 ini berbicara tentang umat Israel <a href="/kpksatu " class="text-decoration-none">Lanjutkan membaca...</a> </p>
        </div>
        <div class="mt-5">
          <a href="/kpksatu" class="text-decoration-none"><h3 class="text-dark">DARI TIMUR MEMANCAR KEBENARAN ALLAH DANIEL 9:20-27</h3></a>
          <hr>
          <img src="kpk21.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">DARI TIMUR MEMANCAR KEBENARAN ALLAH <br> DANIEL 9 : 20 -27</p>
          <p class="text-justify">Dalam kitab Daniel 9:20-27 ini berbicara tentang umat Israel <a href="/kpksatu " class="text-decoration-none">Lanjutkan membaca...</a> </p>
        </div> --}}
        {{-- <div class="unduh-materi mt-5">
          <a href="https://drive.google.com/file/d/12QjzCY58s_kge5BxrSi3gscdUqPpBIwW/view?usp=sharing"  terget="_blank">
            <button class="btn-unduh-materi"><i class="fa fa-download"></i> Download</button>
          </a>
        </div> --}}
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