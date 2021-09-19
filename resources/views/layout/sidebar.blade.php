<a href="{{url('/')}}" class="brand-link" style="background-color: #fff">
    <img src="{{url('img/logokiosrakyat.png')}}" alt="Logo" class="brand-image img-circle" style="opacity: .8">
    <span class="brand-text font-weight-light" style="color: #000"><b>POS KiosRakyat</b></span>
</a>

<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if(Auth::guard('retailer')->check())
                <img src="{{url(Auth::user()->file_foto_depan)}}" class="img-circle elevation-2" alt="User Image" style="height: 40px;width: 40px;">
            @else
                <img src="{{url('img/avatar.png')}}" class="img-circle elevation-2" alt="User Image" style="height: 40px;width: 40px;">
            @endif
        </div>
        <div class="info">
            <a href="{{url('profile/retailer')}}" class="d-block">
                @if(Auth::guard('retailer')->check())
                {{ Auth::user()->nama_pemilik }}
                @else
                <a href="{{url('profile/retailer_operator')}}" class="d-block">
                    {{ Auth::user()->nama }}
                    @endif
                </a>
            </a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('dashboard.index')}}" class="nav-link @yield('dashboard_aktif')">
                    <ion-icon name="home"></ion-icon>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('transaksi.index')}}" class="nav-link @yield('transaction_aktif')">
                    <ion-icon name="cart"></ion-icon>
                    <p>
                        Transaksi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('transaksi.index')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Penjualan</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('transaksi.index')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pembelian</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link @yield('product_aktif')">
                    <ion-icon name="basket"></ion-icon>
                    <p>
                        Managemen
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(Auth::guard('retailer')->check()) -->
                    <li class="nav-item">
                        <a href="{{url('/operator')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Operator Kasir</p>
                        </a>
                    </li>
                    @endif
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('product.index')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Produk</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{url('report')}}" class="nav-link @yield('report_aktif')">
                    <ion-icon name="clipboard"></ion-icon>
                    <p>
                        Laporan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('report')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Harian </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('report')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Bulanan</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- @if(Auth::guard('retailer')->check())
            <li class="nav-item">
                <a href="{{url('/operator')}}" class="nav-link @yield('operator_aktif')">
                    <ion-icon name="people"></ion-icon>
                    <p>
                        Petugas Kasir
                    </p>
                </a>
            </li>
            @endif -->
            <li class="nav-item">
                <a href="#" class="nav-link @yield('about_aktif')">
                    <ion-icon name="alert"></ion-icon>
                    <p>
                        Pengaturan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('profile/retailer')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profil</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('report')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Struk Nota</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('report')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Printer</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
