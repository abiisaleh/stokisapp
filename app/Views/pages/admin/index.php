<?php $this->extend('layout/admin'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon purple">
                <i class="lni lni-cart-full"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Total Stokis</h6>
                <h3 class="text-bold mb-10">34567</h3>
                <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 days)</span>
                </p>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon success">
                <i class="lni lni-dollar"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Total Produk</h6>
                <h3 class="text-bold mb-10">$74,567</h3>
                <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +5.45%
                    <span class="text-gray">Increased</span>
                </p>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon primary">
                <i class="lni lni-credit-cards"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Stokis Verifikasi</h6>
                <h3 class="text-bold mb-10">$24,567</h3>
                <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -2.00%
                    <span class="text-gray">Expense</span>
                </p>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
</div>

<div class="row">
    <div class="col-lg-7">
        <div class="card-style mb-30">
            <div class="
                    title
                    d-flex
                    justify-content-between
                    align-items-center
                  ">
                <div class="left">
                    <h6 class="text-medium mb-30">Sells by State</h6>
                </div>
            </div>
            <!-- End Title -->
            <div id="map" style="width: 100%; height: 400px" class="jvm-container">
            </div>
            <p>Last updated: 7 days ago</p>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card-style mb-30">
            <div class="
                    title
                    d-flex
                    flex-wrap
                    justify-content-between
                    align-items-center
                  ">
                <div class="left">
                    <h6 class="text-medium mb-30">Top Selling Products</h6>
                </div>
                <div class="right">
                    <div class="select-style-1">
                        <div class="select-position select-sm">
                            <select class="light-bg">
                                <option value="">Yearly</option>
                                <option value="">Monthly</option>
                                <option value="">Weekly</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
            </div>
            <!-- End Title -->
            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>
                                <h6 class="text-sm text-medium">Products</h6>
                            </th>
                            <th class="min-width">
                                <h6 class="text-sm text-medium">Category</h6>
                            </th>
                            <th class="min-width">
                                <h6 class="text-sm text-medium">Price</h6>
                            </th>
                            <th class="min-width">
                                <h6 class="text-sm text-medium">Sold</h6>
                            </th>
                            <th class="min-width">
                                <h6 class="text-sm text-medium">Profit</h6>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-1">
                                </div>
                            </td>
                            <td>
                                <div class="product">
                                    <div class="image">
                                        <img src="assets/images/products/product-mini-1.jpg" alt="">
                                    </div>
                                    <p class="text-sm">Arm Chair</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm">Interior</p>
                            </td>
                            <td>
                                <p class="text-sm">$345</p>
                            </td>
                            <td>
                                <p class="text-sm">43</p>
                            </td>
                            <td>
                                <p class="text-sm">$45</p>
                            </td>
                            <td>
                                <div class="action justify-content-end">
                                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="lni lni-more-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Remove</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Edit</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-1">
                                </div>
                            </td>
                            <td>
                                <div class="product">
                                    <div class="image">
                                        <img src="assets/images/products/product-mini-2.jpg" alt="">
                                    </div>
                                    <p class="text-sm">SOfa</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm">Interior</p>
                            </td>
                            <td>
                                <p class="text-sm">$145</p>
                            </td>
                            <td>
                                <p class="text-sm">13</p>
                            </td>
                            <td>
                                <p class="text-sm">$15</p>
                            </td>
                            <td>
                                <div class="action justify-content-end">
                                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="lni lni-more-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Remove</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Edit</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-1">
                                </div>
                            </td>
                            <td>
                                <div class="product">
                                    <div class="image">
                                        <img src="assets/images/products/product-mini-3.jpg" alt="">
                                    </div>
                                    <p class="text-sm">Dining Table</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm">Interior</p>
                            </td>
                            <td>
                                <p class="text-sm">$95</p>
                            </td>
                            <td>
                                <p class="text-sm">32</p>
                            </td>
                            <td>
                                <p class="text-sm">$215</p>
                            </td>
                            <td>
                                <div class="action justify-content-end">
                                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="lni lni-more-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Remove</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Edit</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-input-primary">
                                    <input class="form-check-input" type="checkbox" id="checkbox-1">
                                </div>
                            </td>
                            <td>
                                <div class="product">
                                    <div class="image">
                                        <img src="assets/images/products/product-mini-4.jpg" alt="">
                                    </div>
                                    <p class="text-sm">Office Chair</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm">Interior</p>
                            </td>
                            <td>
                                <p class="text-sm">$105</p>
                            </td>
                            <td>
                                <p class="text-sm">23</p>
                            </td>
                            <td>
                                <p class="text-sm">$345</p>
                            </td>
                            <td>
                                <div class="action justify-content-end">
                                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="lni lni-more-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Remove</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#0" class="text-gray">Edit</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- End Table -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon purple">
                <i class="lni lni-cart-full"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">New Orders</h6>
                <h3 class="text-bold mb-10">34567</h3>
                <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 days)</span>
                </p>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon success">
                <i class="lni lni-dollar"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Total Income</h6>
                <h3 class="text-bold mb-10">$74,567</h3>
                <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +5.45%
                    <span class="text-gray">Increased</span>
                </p>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon primary">
                <i class="lni lni-credit-cards"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Total Expense</h6>
                <h3 class="text-bold mb-10">$24,567</h3>
                <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -2.00%
                    <span class="text-gray">Expense</span>
                </p>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon orange">
                <i class="lni lni-user"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">New User</h6>
                <h3 class="text-bold mb-10">34567</h3>
                <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -25.00%
                    <span class="text-gray"> Earning</span>
                </p>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
</div>

<div class="row">
    <!-- grafik penjualan -->
    <div class="col-lg-7">
        <div class="card-style mb-30">
            <div class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  ">
                <div class="left">
                    <h6 class="text-medium mb-2">Sales Forecast</h6>
                </div>
                <div class="right">
                    <div class="select-style-1 mb-2">
                        <div class="select-position select-sm">
                            <select class="light-bg">
                                <option value="">Last Month</option>
                                <option value="">Last 3 Months</option>
                                <option value="">Last Year</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
            </div>
            <!-- End Title -->
            <div class="chart">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <div id="legend3">
                    <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                        <li>
                            <div class="d-flex">
                                <span class="bg-color primary-bg"> </span>
                                <div class="text">
                                    <p class="text-sm text-success">
                                        <span class="text-dark">Revenue</span> +25.55%
                                        <i class="lni lni-arrow-up"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="bg-color purple-bg"></span>
                                <div class="text">
                                    <p class="text-sm text-success">
                                        <span class="text-dark">Net Profit</span> +45.55%
                                        <i class="lni lni-arrow-up"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="bg-color orange-bg"></span>
                                <div class="text">
                                    <p class="text-sm text-danger">
                                        <span class="text-dark">Order</span> -4.2%
                                        <i class="lni lni-arrow-down"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <canvas id="Chart3" style="width: 100%; height: 450px; display: block;" width="522" height="450" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>

    <!-- top selling produk -->
    <div class="col-lg-5">
        <div class="card-style mb-30">
            <div class="
                    title
                    d-flex
                    flex-wrap
                    justify-content-between
                    align-items-center
                  ">
                <div class="left">
                    <h6 class="text-medium mb-30">Top Selling Products</h6>
                </div>
                <div class="right">
                    <div class="select-style-1">
                        <div class="select-position select-sm">
                            <select class="light-bg">
                                <option value="">Yearly</option>
                                <option value="">Monthly</option>
                                <option value="">Weekly</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
            </div>
            <!-- End Title -->
            <div class="table-responsive">
                <table class="table top-selling-table">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="text-sm text-medium">No</h6>
                            </th>
                            <th>
                                <h6 class="text-sm text-medium">Products</h6>
                            </th>
                            <th class="min-width">
                                <h6 class="text-sm text-medium">Price</h6>
                            </th>
                            <th class="min-width">
                                <h6 class="text-sm text-medium">Sold</h6>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <tr>
                                <td>
                                    <p class="text-sm"><?= $i; ?></p>
                                </td>
                                <td>
                                    <div class="product">
                                        <div class="image">
                                            <img src="assets/images/products/product-mini-1.jpg" alt="">
                                        </div>
                                        <p class="text-sm">Arm Chair</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">Interior</p>
                                </td>
                                <td>
                                    <p class="text-sm">43</p>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
                <!-- End Table -->
            </div>
        </div>
    </div>
</div>
<?php $this->endSection('content'); ?>

<?php $this->Section('script'); ?>
<script>
    // ======== jvectormap activation
    var markers = [{
            name: "Egypt",
            coords: [26.8206, 30.8025]
        },
        {
            name: "Russia",
            coords: [61.524, 105.3188]
        },
        {
            name: "Canada",
            coords: [56.1304, -106.3468]
        },
        {
            name: "Greenland",
            coords: [71.7069, -42.6043]
        },
        {
            name: "Brazil",
            coords: [-14.235, -51.9253]
        },
    ];

    var jvm = new jsVectorMap({
        // map: "world_merc",
        map: "world_merc",
        selector: "#map",
        zoomButtons: true,

        regionStyle: {
            initial: {
                fill: "#d1d5db",
            },
        },

        labels: {
            markers: {
                render: (marker) => marker.name,
            },
        },

        markersSelectable: true,
        selectedMarkers: markers.map((marker, index) => {
            var name = marker.name;

            if (name === "Russia" || name === "Brazil") {
                return index;
            }
        }),
        markers: markers,
        markerStyle: {
            initial: {
                fill: "#4A6CF7"
            },
            selected: {
                fill: "#ff5050"
            },
        },
        markerLabelStyle: {
            initial: {
                fontWeight: 400,
                fontSize: 14,
            },
        },
    });

    // =========== chart three start
    const ctx3 = document.getElementById("Chart3").getContext("2d");
    const chart3 = new Chart(ctx3, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
            labels: [
                "Jan",
                "Fab",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            // Information about the dataset
            datasets: [{
                    label: "Revenue",
                    backgroundColor: "transparent",
                    borderColor: "#4a6cf7",
                    data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#4a6cf7",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
                {
                    label: "Profit",
                    backgroundColor: "transparent",
                    borderColor: "#9b51e0",
                    data: [
                        120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
                    ],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#9b51e0",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
                {
                    label: "Order",
                    backgroundColor: "transparent",
                    borderColor: "#f2994a",
                    data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#f2994a",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
            ],
        },

        // Configuration options
        options: {
            tooltips: {
                intersect: false,
                backgroundColor: "#fbfbfb",
                titleFontColor: "#8F92A1",
                titleFontSize: 16,
                titleFontFamily: "Inter",
                titleFontStyle: "400",
                bodyFontFamily: "Inter",
                bodyFontColor: "#171717",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 15,
                borderColor: "rgba(143, 146, 161, .1)",
                borderWidth: 1,
                title: false,
            },

            title: {
                display: false,
            },

            layout: {
                padding: {
                    top: 0,
                },
            },

            legend: false,

            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawTicks: false,
                        drawBorder: false,
                    },
                    ticks: {
                        padding: 35,
                        max: 300,
                        min: 50,
                    },
                }, ],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "rgba(143, 146, 161, .1)",
                        zeroLineColor: "rgba(143, 146, 161, .1)",
                    },
                    ticks: {
                        padding: 20,
                    },
                }, ],
            },
        },
    });
    // =========== chart three end
</script>
<?php $this->endSection('script'); ?>