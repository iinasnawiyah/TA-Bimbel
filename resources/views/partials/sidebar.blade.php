@section('sidebar')
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('dashboardadmin')}}" class="header {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}" style="color: #000000">
            <img src="{{ asset('') }}template2/img/20210817_115852.png" alt="logo">
        </a>
        </a>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                @if (Auth::user()->role == 'admin')
                <li>
                    <a href="{{ route('dashboardadmin') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                        <span class="fa fa-home"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pengajar.index') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'pengajar' ? 'active' : '' }}">
                        <span class="fa fa-user"></span><span class="mtext">Kelola Akun Pengajar</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('siswa.index') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
                        <span class="fa fa-user"></span><span class="mtext">Kelola Akun Siswa</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('kelas.index') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
                        <span class="fa fa-gear"></span><span class="mtext">Kelola Kategori Kelas</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('kelpaket.index') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'kelpaket' ? 'active' : '' }}">
                        <span class="fa fa-gear"></span><span class="mtext">Kelola Paket</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('kelRiwayatPaket') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'kelRiwayatPaket' || Request::segment(2) == 'kelPembayaran' || Request::segment(2) == 'kelPembayaran' ? 'active' : '' }}">
                        <span class="fa fa-money"></span><span class="mtext">Kelola Pembayaran</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('kelKegiatan') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'kelKegiatan' || Request::segment(2) == 'dataKegiatan' ? 'active' : '' }}">
                        <span class="fa fa-map-o"></span><span class="mtext">Kelola Kegiatan Bimbel</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listPaket') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'listAbsen' || Request::segment(2) == 'listPaket' ? 'active' : '' }}">
                        <span class="fa fa-map-o"></span><span class="mtext">Kelola Absensi Bimbel</span>
                    </a>
                </li>

                <!-- GURU -->
                @elseif(Auth::user()->role == 'pengajar')
                <li>
                    <a href="{{ route('dashboardadmin') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                        <span class="fa fa-home"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dataSiswa') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'datasiswa' ? 'active' : '' }}">
                        <span class="fa fa-user"></span><span class="mtext">Data Siswa</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('manajemenKegiatan') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'manajemen' ? 'active' : '' }}">
                        <span class="fa fa-map-o"></span><span class="mtext">Kegiatan</span>
                    </a>
                </li>

                <!-- SISWA -->
                @else
                <li>
                    <a href="{{route('dashboardadmin')}} " class="dropdown-toggle no-arrow {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                        <span class="fa fa-home"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('paket.index') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'paket' ? 'active' : '' }}">
                        <span class="fa fa-gear"></span><span class="mtext">Pilih Paket</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('riwayatPaket') }}" class="dropdown-toggle no-arrow {{ Request::segment(2) == 'riwayatPaket' || Request::segment(2) == 'listPembayaran' || Request::segment(2) == 'listKegiatan' ? 'active' : '' }}">
                        <span class="fa fa-gear"></span><span class="mtext">Riwayat Paket</span>
                    </a>
                </li>
                @endif
                <!-- <li class="dropdown">
                                                                 <a href="javascript:;" class="dropdown-toggle">
                                                                  <span class="fa fa-clone"></span><span class="mtext">Extra Pages</span>
                                                                 </a>
                                                                 <ul class="submenu">
                                                                  <li><a href="blank.php">Blank</a></li>
                                                                  <li><a href="contact-directory.php">Contact Directory</a></li>
                                                                  <li><a href="blog.php">Blog</a></li>
                                                                  <li><a href="blog-detail.php">Blog Detail</a></li>
                                                                  <li><a href="product.php">Product</a></li>
                                                                  <li><a href="product-detail.php">Product Detail</a></li>
                                                                  <li><a href="faq.php">FAQ</a></li>
                                                                  <li><a href="profile.php">Profile</a></li>
                                                                  <li><a href="gallery.php">Gallery</a></li>
                                                                  <li><a href="pricing-table.php">Pricing Tables</a></li>
                                                                 </ul>
                                                                </li>
                                                                <li class="dropdown">
                                                                 <a href="javascript:;" class="dropdown-toggle">
                                                                  <span class="fa fa-list"></span><span class="mtext">Multi Level Menu</span>
                                                                 </a>
                                                                 <ul class="submenu">
                                                                  <li><a href="javascript:;">Level 1</a></li>
                                                                  <li><a href="javascript:;">Level 1</a></li>
                                                                  <li><a href="javascript:;">Level 1</a></li>
                                                                  <li class="dropdown">
                                                                   <a href="javascript:;" class="dropdown-toggle">
                                                                    <span class="fa fa-plug"></span><span class="mtext">Level 2</span>
                                                                   </a>
                                                                   <ul class="submenu child">
                                                                    <li><a href="javascript:;">Level 2</a></li>
                                                                    <li><a href="javascript:;">Level 2</a></li>
                                                                   </ul>
                                                                  </li>
                                                                  <li><a href="javascript:;">Level 1</a></li>
                                                                  <li><a href="javascript:;">Level 1</a></li>
                                                                  <li><a href="javascript:;">Level 1</a></li>
                                                                 </ul>
                                                                </li>
                                                                <li>
                                                                 <a href="sitemap.php" class="dropdown-toggle no-arrow">
                                                                  <span class="fa fa-sitemap"></span><span class="mtext">Sitemap</span>
                                                                 </a>
                                                                </li>
                                                                <li>
                                                                 <a href="chat.php" class="dropdown-toggle no-arrow">
                                                                  <span class="fa fa-comments-o"></span><span class="mtext">Chat <span class="fi-burst-new text-danger new"></span></span>
                                                                 </a>
                                                                </li>
                                                                <li>
                                                                 <a href="invoice.php" class="dropdown-toggle no-arrow">
                                                                  <span class="fa fa-map-o"></span><span class="mtext">Invoice</span>
                                                                 </a>
                                                                </li> -->
            </ul>
        </div>
    </div>
</div>
@endsection