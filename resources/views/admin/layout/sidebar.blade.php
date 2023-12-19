
<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="">
          <img src="{{asset('template')}}/assets/img/alfadani.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">LPK AL FADANI </span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
      {{-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main"> --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('') ? 'active' : 'kategori' }} " href="/kategori">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-home text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Kategori</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('berita') ? 'active' : '' }} " href="/berita">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-newspaper text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Berita</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('program') ? 'active' : '' }} " href="/program">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-code text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Program</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }} " href="/about">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-info-circle text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('galery') ? 'active' : '' }} " href="/galery">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-images text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Galery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('sambutan') ? 'active' : '' }} " href="/sambutan">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-user text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Sambutan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('visimisi') ? 'active' : '' }} " href="/visimisi">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-eye text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Visi Misi</span>
            </a>
          </li>
      <li class="nav-item">
            <a class="nav-link {{ Request::is('navbar') ? 'active' : '' }} " href="/navbar">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-file text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Menu</span>
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link {{ Request::is('page') ? 'active' : '' }} " href="/page">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-file text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Page</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('setting') ? 'active' : '' }} " href="/setting">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-cog text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('user') ? 'active' : '' }} " href="/user">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">User</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
