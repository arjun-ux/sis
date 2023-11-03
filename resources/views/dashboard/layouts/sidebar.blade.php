<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #3d9970">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link" style="text-decoration: none">
      <img src="{{ asset('img/pondok.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-dark">PP AL-ANWARI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt text-white"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users text-white"></i>
                <p>
                    Santri
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('siswa') }}" class="nav-link">
                        <i class="nav-icon left fas fa-angle-right"></i>
                        <p>Daftar Santri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('siswa.create') }}" class="nav-link">
                        <i class="nav-icon left fas fa-angle-right"></i>
                        <p>Tambah Santri</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('kamar') }}" class="nav-link">
                <i class="nav-icon fas fa-layer-group text-white"></i>
                <p>
                    Kamar
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('diniyyah') }}" class="nav-link">
                <i class="nav-icon fas fa-layer-group text-white"></i>
                <p>
                    Diniyyah
                </p>
                </a>
            </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
