<?php $this->extend('layout/user'); ?>

<?php $this->section('content'); ?>

<!-- ========== slideshow start ========== -->
<div class="row">
    <div class="col mb-1">
        <!-- Carousel -->
        <div id="banner" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner rounded-md">
                <?php
                $count = 0;
                for ($i = 1; $i < 3; $i++) : ($count == 1) ? $class = 'active' : $class = '' ?>
                    <div class="carousel-item <?= $class; ?>">
                        <img src="/assets/images/stokisapp/banner/banner-<?= $i; ?>.jpeg" loading="lazy" alt="banner baru" class="d-block w-100">
                    </div>
                <?php
                    $count++;
                endfor; ?>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <!-- Carousel -->
        <div id="promo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#promo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#promo" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner rounded-md">
                <?php
                $count = 0;
                for ($i = 1; $i < 3; $i++) : ($count == 1) ? $class = 'active' : $class = ''; ?>
                    <div class="carousel-item <?= $class; ?>">
                        <img src="/assets/images/stokisapp/banner/promo-<?= $i; ?>.jpg" alt="promo baru" class="d-block w-100">
                    </div>
                <?php
                    $count++;
                endfor; ?>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#promo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#promo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>
<!-- ========== slideshow end ========== -->

<!-- ========== recomended start ========== -->
<!-- ========== title start ========== -->
<div class="title-wrapper pt-30 mb-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title" id="produk">
                <h2>Daftar Produk <?= ($keyword) ? '"' . $keyword . '"' : ""; ?></h2>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- ========== title end ========== -->
<!-- ========== card start ========== -->
<div class="row">
    <?php foreach ($produk as $Produk) : ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card-style-1 mb-10" style="padding: 0 0 25px 0;">
                <div class="card-image">
                    <a href="/home/detail/<?= $Produk['id_produk']; ?>">
                        <img src="/assets/images/stokisapp/products/small<?= $Produk['gambar']; ?>" class="mx-auto d-block" style="height: 230px; width: unset;">
                    </a>
                </div>
                <div class="card-content">
                    <p style="display: inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: -webkit-fill-available;">
                        <?= $Produk['nama']; ?>
                    </p>
                    <h4 class="text-bold"><span class="text-sm">Rp. </span><?= number_format($Produk['harga']); ?></h4>
                    <p class="text-sm">Stokis 363</p>
                    <span class="status-btn success-btn ml-10" style="position: absolute;top: 8px;right: 6px;"><?= $Produk['poin'] . 'pv'; ?></span>
                    <div class="row mt-10">
                        <a href="/home/detail/<?= $Produk['id_produk']; ?>" class="main-btn btn-sm primary-btn rounded-md btn-hover">
                            <i class="lni lni-eye mr-10"></i>
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- ========== card end ========== -->
<!-- ========== recomended end ========== -->
<?php $this->endSection('content'); ?>