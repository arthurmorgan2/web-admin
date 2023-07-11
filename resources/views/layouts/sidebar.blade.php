<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo Dispetaru Admin -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo.jpg') }}" alt="DPTR Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">DISPERTARU</span>
    </a>
    <!-- Brand Logo Dispetaru Admin -->

    <!-- Sidebar -->
    <div class="sidebar">
              <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tabel_izin') }}" class="nav-link">
                        <i class="nav-icon far fa-edit"></i>
                        <p>
                            Permohonan Izin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tabel') }}" class="nav-link">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>
                            Pemanfaatan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Data-Pengawasan') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pengawasan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas bi-box-arrow-right"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
        </nav>
    <!-- End Sidebar Menu -->
    </div>
    <!-- /.sidebar -->
</aside>
