<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="logo.png">
    <link rel="icon" href="../logo.png">

    {{-- Bootstrap CSS --}}   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    {{-- My Style --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/masuk.css">
    @stack('style')

    <title>GESBA | {{ $title }}</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100">
        <div class="container-fluid">
          <a class="navbar-brand me-4 mx-5" href="/">
            <img src="../logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-center">
            <b>GESBA Malinau Kota</b>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0">                
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">HOME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('sejarah', 'visimisi', 'gembalasidang') ? 'active' : '' }}" href="/profil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PROFIL
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/sejarah">Sejarah Gereja</a></li>
                  <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  <li><a class="dropdown-item" href="/gembalasidang">Gembala Sidang</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('ibadahraya*', 'ibadahpemuda*', 'ibadahsm*', 'ibadahrt*', 'ibadahpersekutuan*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  JADWAL IBADAH
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/ibadahraya">Ibadah Raya</a></li>
                  <li><a class="dropdown-item" href="/ibadahpemuda">Ibadah Pemuda</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  <li><a class="dropdown-item" href="/ibadahsekolahminggu">Ibadah Sekolah Minggu</a></li>
                  <li><a class="dropdown-item" href="/ibadahrumahtangga">Ibadah Rumah Tangga</a></li>
                  <li><a class="dropdown-item" href="/ibadahpersekutuan">Ibadah Persekutuan</a></li>                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('posts*', 'materipengajaran*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  INFO ROHANI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/materipengajarann">Materi Pengajaran</a></li>  
                  <li><a class="dropdown-item" href="/posts">Ringkasan Khotbah</a></li>                
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('doasemalaman*', 'jadwaldoasemalaman*', 'doadanpuasa*', 'jadwaldoadanpuasa*', 'pencariandana*', 'jadwalpencariandana*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  LAYANAN
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/doasemalaman">Doa Semalaman</a></li>
                  <li><a class="dropdown-item" href="/doadanpuasa">Doa dan Puasa</a></li>                 
                  <li><a class="dropdown-item" href="/pencariandana">Pencarian Dana</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('pemberkatannikah*', 'halpemberkatannikah*', 'penyerahananak*', 'halpenyerahananak*', 'baptisan*', 'penghiburan*', 'kunjungandoa*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  KAMI PEDULI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pemberkatannikah">Pemberkatan Nikah</a></li>
                  <li><a class="dropdown-item" href="/penyerahananak">Penyerahan Anak</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  <li><a class="dropdown-item" href="/baptisan">Baptisan</a></li>
                  <li><a class="dropdown-item" href="/penghiburan">Penghiburan</a></li>
                  <li><a class="dropdown-item" href="/kunjungandoa">Kunjungan Doa</a></li>                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('persembahan') ? 'active' : '' }}" aria-current="page" href="/persembahan">PERSEMBAHAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('hubungikami') ? 'active' : '' }}" aria-current="page" href="/hubungikami">HUBUNGI KAMI</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('masuk') ? 'active' : '' }}" aria-current="page" href="/masuk">LOGIN</a>
              </li>                 --}}
          </div>
        </div>
      </nav>
      {{-- Navbar --}}

      <div class="container">
        @yield('container')
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      @stack('scripts')
</body>
</html>