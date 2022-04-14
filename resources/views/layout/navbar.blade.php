<link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="/">
        <img
            src="{{ asset('img/logo-rekwis.png') }}"
            alt="Go-wis Logo"
            class="rounded"
            loading="lazy"
            width="50px"
            height="50px"
        />
        <span class="gowis mx-3">RekWis</span>
      </a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('paketWisata') ? 'active' : '' }}" href="/paketWisata">Destinasi Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('sewaHotel') ? 'active' : '' }}" href="/sewaHotel">Sewa Hotel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('berita') ? 'active' : '' }}" href="/berita">Berita</a>
          </li>
        </ul>
        <!-- Left links -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat datang, {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
            <div class="d-flex align-items-center">
              <button type="button" class="btn btn-light px-3 me-2">
                <a style="text-decoration: none" href="/login">Login <i class="bi bi-box-arrow-in-left"></i></a>
              </button>
            </div>
          @endauth
        </ul>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->