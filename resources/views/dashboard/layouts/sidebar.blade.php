<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span><i class="bi bi-houses"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/dashboard/home">
              <span data-feather="home" class="align-text-bottom"></span><i class="bi bi-house-door"></i> Home
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('dashboard/sejarah', 'dashboard/visimisi', 'dashboard/gembalasidang') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-calendar-event"></i> Profil</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard/sejarah">Sejarah Gereja</a></li>
              <li><a class="dropdown-item" href="/dashboard/visimisi">Visi Misi</a></li>
              <li><a class="dropdown-item" href="/dashboard/gembalasidang">Gembala Sidang</a></li>
            </ul>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('jadwalibadah') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-calendar-event"></i> Jadwal Ibadah</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ibadah Raya</a></li>
            <li><a class="dropdown-item" href="#">Ibadah Pemuda</a></li>
            <li><a class="dropdown-item" href="#">Ibadah Sekolah Minggu</a></li>
            {{-- <li><hr class="dropdown-divider"></li> --}}
            <li><a class="dropdown-item" href="#">Ibadah Rumah Tangga</a></li>
            <li><a class="dropdown-item" href="#">Ibadah Persekutuan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('inforohani') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-info-square"></i> Info Rohani</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Materi Pengajaran</a></li>
            <li><a class="dropdown-item" href="#">Ringkasan Khotbah</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('layanan') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-trello"></i> Layanan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Doa Semalaman</a></li>
            <li><a class="dropdown-item" href="#">Doa dan Puasa</a></li>
            <li><a class="dropdown-item" href="#">Pencarian Dana</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('kamipeduli') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-box2-heart"></i> Kami Peduli</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Pemberkatan Nikah</a></li>
            <li><a class="dropdown-item" href="#">Penyerahan Anak</a></li>
            <li><a class="dropdown-item" href="#">Baptisan</a></li>
            <li><a class="dropdown-item" href="#">Penghiburan</a></li>
            <li><a class="dropdown-item" href="#">Kunjungan Doa</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('hubungi') ? 'active' : '' }}" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span><i class="bi bi-telephone-forward"></i>
              Hubungi Kami
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('persembahan') ? 'active' : '' }}" aria-current="page" href="#">
            <span data-feather="home" class="align-text-bottom"></span><i class="bi bi-cash"></i>
            Persembahan
          </a>
        </li>
      </ul>
      </ul>
    </div>
  </nav>