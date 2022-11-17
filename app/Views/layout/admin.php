<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon" />
    <title>stokisapp | <?= $title; ?></title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/lineicons.css" />
    <link rel="stylesheet" href="/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="/assets/css/datatable.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
</head>

<body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper" style="overflow:hidden">
        <div class="navbar-logo">
            <a href="index.html">
                <img src="/assets/images/logo/logo.svg" alt="logo" />
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item <?= ($title == "Dashboard") ? "active" : ""; ?>">
                    <a href="/admin">
                        <span class="icon">
                            <i class="lni lni-dashboard text-bold"></i>
                        </span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item <?= ($title == "Point Of Sales") ? "active" : ""; ?>">
                    <a href="/admin/pos">
                        <span class="icon">
                            <i class="lni lni-calculator text-bold"></i>
                        </span>
                        <span class="text">POS</span>
                    </a>
                </li>
                <li class="nav-item <?= ($title == "Stok Produk") ? "active" : ""; ?>">
                    <a href="/admin/stok">
                        <span class="icon">
                            <i class="lni lni-archive text-bold"></i>
                        </span>
                        <span class="text">Stok</span>
                    </a>
                </li>
                <li class="nav-item <?= ($title == "Pesanan") ? "active" : ""; ?>">
                    <a href="/admin/pesanan">
                        <span class="icon">
                            <i class="lni lni-agenda text-bold"></i>
                        </span>
                        <span class="text">Pesanan</span>
                    </a>
                </li>
                <li class="nav-item <?= ($title == "Pelanggan") ? "active" : ""; ?>">
                    <a href="/admin/pelanggan">
                        <span class="icon">
                            <i class="lni lni-users text-bold"></i>
                        </span>
                        <span class="text">Pelanggan</span>
                    </a>
                </li>
                <li class="nav-item <?= ($title == "Stokis") ? "active" : ""; ?>">
                    <a href="/admin/stokis">
                        <span class="icon">
                            <i class="lni lni-home text-bold"></i>
                        </span>
                        <span class="text">Stokis</span>
                    </a>
                </li>
                <li class="nav-item <?= ($title == "Produk") ? "active" : ""; ?>">
                    <a href="/admin/produk">
                        <span class="icon">
                            <i class="lni lni-dropbox text-bold"></i>
                        </span>
                        <span class="text">Produk</span>
                    </a>
                </li>
                <li class="nav-item <?= ($title == "Notifikasi") ? "active" : ""; ?>">
                    <a href="/admin/notifikasi">
                        <span class="icon">
                            <i class="lni lni-alarm text-bold"></i>
                        </span>
                        <span class="text">Notifikasi</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-20">
                                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                    <i class="lni lni-chevron-left me-2"></i> Menu
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">
                            <!-- notification start -->
                            <div class="notification-box ml-15 d-none d-md-flex">
                                <button class="dropdown-toggle" type="button" id="notification" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="lni lni-alarm"></i>
                                    <span>2</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="/assets/images/lead/lead-6.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    John Doe
                                                    <span class="text-regular">
                                                        comment on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="/assets/images/lead/lead-1.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Jonathon
                                                    <span class="text-regular">
                                                        like on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- notification end -->
                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6>John Doe</h6>
                                            <div class="image">
                                                <img src="/assets/images/profile/profile-image.png" alt="" />
                                                <span class="status"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="lni lni-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-user"></i> View Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-alarm"></i> Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" id="dark"> <i class="lni lni-night"></i> Dark Mode </a>
                                        <a href="#0" id="light" class="d-none"> <i class="lni lni-sun"></i> Light Mode </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid">
                <!-- ========== content-wrapper start ========== -->
                <!-- ========== title start ========== -->
                <div class="title-wrapper pt-30 mb-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="titlemb-30">
                                <h2><?= $title; ?></h2>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title end ========== -->
                <?php $this->renderSection('content'); ?>
                <!-- ========== content-wrapper end ========== -->
            </div>
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Designed and Developed by
                                <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                                    PlainAdmin
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6">
                        <div class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                ">
                            <a href="#0" class="text-sm">Term & Conditions</a>
                            <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/Chart.min.js"></script>
    <script src="/assets/js/dynamic-pie-chart.js"></script>
    <script src="/assets/js/moment.min.js"></script>
    <script src="/assets/js/fullcalendar.js"></script>
    <script src="/assets/js/jvectormap.min.js"></script>
    <script src="/assets/js/world-merc.js"></script>
    <script src="/assets/js/polyfill.js"></script>
    <script src="/assets/js/datatable.js"></script>
    <script src="/assets/js/Sortable.min.js"></script>
    <script src="/assets/js/main.js"></script>

    <script>
        // =========== theme change
        const darkThemeButton = document.querySelector("#dark")
        const lightThemeButton = document.querySelector("#light");

        darkThemeButton.addEventListener("click", () => {
            document.body.classList.add("darkTheme");
            darkThemeButton.classList.add("d-none");
            lightThemeButton.classList.remove("d-none");
        });

        lightThemeButton.addEventListener("click", () => {
            document.body.classList.remove("darkTheme");
            darkThemeButton.classList.remove("d-none");
            lightThemeButton.classList.add("d-none");
        });
    </script>

    <?php $this->renderSection('script'); ?>
</body>

</html>