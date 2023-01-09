<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1
        text-muted">
            <span>Dashboard Wilayah Indonesia</span>
          </h6>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('provinsi*') ? 'active' : ''}}" aria-current="page" href="provinsi">
            <span data-feather="file-text"></span>
            Provinsi
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('kabupaten*') ? 'active' : ''}}" href="kabupaten">
            <span data-feather="home"></span>
            Kabupaten
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('kecamatan*') ? 'active' : ''}}" href="kecamatan">
            <span data-feather="home"></span>
            Kecamatan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('desa*') ? 'active' : ''}}" href="desa">
            <span data-feather="home"></span>
            Desa
          </a>
        </li>
      </ul>
    </div>
  </nav>
