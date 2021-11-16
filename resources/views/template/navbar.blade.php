<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <div class="dropdown">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            upload data
          </button>
          <div class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-muted" href="{{route('upload_wilayah')}}">Data wilayah</a>
            <a class="dropdown-item text-muted" href="{{route('upload_fauna')}}">Data fauna</a>
            <a class="dropdown-item text-muted" href="{{route('upload_provinsi')}}">Data provinsi</a>
            <a class="dropdown-item text-muted" href="{{route('upload_faunapunah')}}">Data fauna punah</a>
            <a class="dropdown-item text-muted" href="{{route('upload_persebaran')}}">Data persebaran</a>
          </div>
        </div>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('laporan')}}" class="nav-link">Laporan Kesalahan Sistem</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Cari sesuatu" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
  </nav>