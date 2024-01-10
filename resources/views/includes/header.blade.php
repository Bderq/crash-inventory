    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <div class="row align-self-center">
                <div class="col-4">
                    <div class="topbar-left">
                        <ul class="list-unstyled col-3 mb-0">
                            <li>
                                <button class="nav-link button-menu-mobile waves-effect waves-light">
                                    <i class="ti-menu nav-icon"></i>
                                </button>
                            </li>
                        </ul>
                        <a href="../dashboard/html/demos/index.html" class="logo">
                            <span>
                                <img src="../dashboard/html/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-between align-items-center">
                    <a href="../dashboard/html/demos/index.html" class="logo">
                        <span>
                            <img src="../dashboard/html/assets/images/logo-sm2.png" alt="logo-small" class="logo-sm2"
                                style="width: 100px">
                        </span>
                    </a>
                </div>
                <div class="col-3">
                    <ul class="list-unstyled topbar-nav float-right mb-0">


                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../assets/images/users/user-1.png" alt="User" class="rounded-circle" />
                                <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i>
                                    Profil</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i>
                                    Ayarlar</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="#"><i class="ti-power-off text-muted mr-2"></i>
                                    Çıkış</a>
                            </div>
                        </li>
                    </ul>
                </div><!--end topbar-nav-->
            </div>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->


    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a class="nav-link" href="{{ route('home') }}"><i class="ti-bar-chart"></i><span>Stok
                        Durumu</span><span class="menu-arrow"><i class=""></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>İrsaliye</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('product-in') }}"><i
                                class="ti-control-record"></i>Ürün Giriş</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('product-out') }}"><i
                                class="ti-control-record"></i>Ürün Çıkış</a></li>
                    <li class="nav-item"><a class="nav-link" href="../demos/movements.html"><i
                                class="ti-control-record"></i>Hareketler</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Ürün</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('add-product') }}"><i
                                class="ti-control-record"></i>Ürün Ekle</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('showProductList') }}"><i
                                class="ti-control-record"></i>Ürün Listesi</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('category-list') }}"><i
                                class="ti-control-record"></i>Kategoriler</a></li>
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Depo</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('add-warehouse') }}"><i
                                class="ti-control-record"></i>Depo Ekle</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('showWarehouseList') }}"><i
                                class="ti-control-record"></i>Depo Listesi</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Transfer</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="../demos/add-warehouse.html"><i
                                class="ti-control-record"></i>Depo Ekle</a></li>
                    <li class="nav-item"><a class="nav-link" href="../demos/warehouse-list.html"><i
                                class="ti-control-record"></i>Depo Listesi</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Admin</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="../demos/add-user.html"><i
                                class="ti-control-record"></i>Kullanıcı Ekle</a></li>
                    <li class="nav-item"><a class="nav-link" href="../demos/user-list.html"><i
                                class="ti-control-record"></i>Kullanıcı Listesi</a></li>
                </ul>
            </li>

        </ul>
    </div>
