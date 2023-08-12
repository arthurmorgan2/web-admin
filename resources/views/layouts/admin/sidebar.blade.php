<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background-color: #4e73df">
    <!-- Brand Logo Dispetaru Admin -->
    <a href="#" class="brand-link" style="border-bottom: solid rgb(109, 109, 109) 1px; ">
        <img src="{{ asset('assets/img/logo.jpg') }}" alt="DPTR Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: white" fa-bold>BALAI PPA DP3AP2 DIY</span>
    </a>

    <!-- Brand Logo Dispetaru Admin -->

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header" style="color: white">Menu</li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: white"></i>
                        <p style="color: white">
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/data-pengunjung') }}" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-user fa-user-tie" style="color: white"></i>
                        <p style="color: white">
                            Data Pengunjung
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/data-artikel') }}" class="nav-link">
                        <i class="nav-icon fa-regular fa-newspaper" style="color: white"></i>

                        <p style="color: white">
                            Data Artikel
                            <i class="fas fa-angle-left right" style="color: white"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/data-artikel') }}" class="nav-link">
                                <p style="font-size: 14px; color:white;">Tabel Artikel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/data-kategori') }}" class="nav-link">
                                <p style="font-size: 14px; color:white;">Kategori Artikel</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/data-gallery') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-photo-film" style="color: white"></i>
                        <p style="color: white">
                            Gallery
                            <i class="fas fa-angle-left right" style="color: white"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/data-gallery') }}" class="nav-link">
                                <p style="font-size: 14px; color:white;">Tabel Foto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/data-video') }}" class="nav-link">
                                <p style="font-size: 14px; color:white;">Tabel Video</p>
                            </a>
                        </li>

                    </ul>
                </li>
        </nav>
        <!-- End Sidebar Menu -->
    </div>
    <!-- /.sidebar -->
</aside>
