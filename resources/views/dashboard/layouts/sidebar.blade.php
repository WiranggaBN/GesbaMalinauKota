<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <!-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span><i class="bi bi-houses"></i> Dashboard
          </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/dashboard/home">
              <span data-feather="home" class="align-text-bottom"></span><i class="bi bi-house-door"></i> Penghuni Asrama
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('dashboard/datajemaat') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-people"></i> Calon Penghuni Asrama</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard/datajemaat">Data Jemaat</a></li>
            </ul>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('jadwalibadah*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-people"></i> Data Orang Tua</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/ibadahraya">Ibadah Raya</a></li>
            <li><a class="dropdown-item" href="/dashboard/ibadahpemuda">Ibadah Pemuda</a></li>
            <li><a class="dropdown-item" href="/dashboard/ibadahsekolahminggu">Ibadah Sekolah Minggu</a></li>
            <li><a class="dropdown-item" href="/dashboard/ibadahrumahtangga">Ibadah Rumah Tangga</a></li>
            <li><a class="dropdown-item" href="/dashboard/ibadahpersekutuan">Ibadah Persekutuan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('dashboard/posts*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-info-square"></i> Berita</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/posts">Ringkasan Khotbah</a></li>
            {{-- <li><a class="dropdown-item" href="/dashboard/pemberkatannikah">Ringkasan Khotbah</a></li> --}}
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('layanan*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-trello"></i> Pengumuman</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/jadwaldoasemalaman">Doa Semalaman</a></li>
            <li><a class="dropdown-item" href="/dashboard/jadwaldoadanpuasa">Doa dan Puasa</a></li>
            <li><a class="dropdown-item" href="/dashboard/jadwalpencariandana">Pencarian Dana</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('dashboard/pemberkatannikah*', 'dashboard/penyerahananak*', 'dashboard/baptisan*', 'dashboard/kunjungandoa*', 'dashboard/penghiburan*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-box2-heart"></i> Absensi</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/pemberkatannikah">Pemberkatan Nikah</a></li>
            <li><a class="dropdown-item" href="/dashboard/penyerahananak">Penyerahan Anak</a></li>
            <li><a class="dropdown-item" href="/dashboard/baptisan">Baptisan</a></li>
            <li><a class="dropdown-item" href="/dashboard/penghiburan">Penghiburan</a></li>
            <li><a class="dropdown-item" href="/dashboard/kunjungandoa">Kunjungan Doa</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('dashboard/kegiatan*', 'dashboard/ulangtahun*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-box"></i> Data Kamar</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/kegiatan">Kegiatan / Acara</a></li>
            <li><a class="dropdown-item" href="/dashboard/ulangtahun">Ulang Tahun</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/hubungikami*') ? 'active' : '' }}" aria-current="page" href="/dashboard/hubungikami">
            <span data-feather="home" class="align-text-bottom"></span><i class="bi bi-telephone-forward"></i>
            Hubungi Kami
          </a>
        </li> -->
      </ul>
      </ul>
    </div>
  </nav>