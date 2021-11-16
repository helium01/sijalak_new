<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('admin')}}/dist/img/faunaku2.png" alt="sijalak Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIJALAK</span>
    </a>
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin')}}/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
          <li class="nav-item">
            <a href="{{route('wilayah')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Wilayah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('persebaran')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Persebaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('hewan')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Data Hewan
              </p>
            </a>
          <li class="nav-item">
            <a href="{{route('provinsi')}}" class="nav-link">
            <i class="fas fa-map-marked-alt"></i>
              <p>
                 Data Provinsi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('peta')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Peta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('fauna_punah')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Fauna Punah
              </p>
            </a>
          </li>
          <hr class="bg-primary">
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
            <i class="fas fa-sign-out-alt "></i>
              <p>
                 keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </aside>