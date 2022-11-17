<?php $this->extend('layout/user'); ?>

<?php $this->section('content'); ?>
<!-- ========== Card-wrapper Start ========== -->
<div class="row">
    <div class="col-xl-8 col-lg-8">
        <div class="card-style-5 mb-30">
            <div class="card-image text-center" style="max-width:fit-content; min-width:200px;">
                <a href="#0">
                    <img src="/assets/images/stokisapp/products/<?= $produk['gambar']; ?>" alt="<?= $produk['nama']; ?>" style="height: 300px; width: unset;">
                </a>
            </div>
            <div class="card-content">
                <h4 class="card-title">
                    <?= $produk['nama']; ?> <span class="text-sm bg-success text-white rounded-pill px-2"><?= $produk['poin']; ?>pv</span>
                </h4>
                <h3 class="text-bold mb-20" id="hargaProduk">Rp. <?= number_format($produk['harga']); ?></h3>
                <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                        <tbody>
                            <tr>
                                <td class="max-width">
                                    <h6 class="text-muted">isi</h6>
                                </td>
                                <td>
                                    <p class="text-right">60 Capsule</p>
                                </td>
                            </tr>
                            <!-- end table row -->
                            <tr>
                                <td>
                                    <h6 class="text-muted">Anjuran Pakai</h6>
                                </td>
                                <td>
                                    <p class="text-right">60 Capsule</p>
                                </td>
                            </tr>
                            <!-- end table row -->
                            <tr>
                                <td>
                                    <h6 class="text-muted">Keterangan Produk</h6>
                                </td>
                                <td>
                                    <p><?= $produk['deskripsi']; ?>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, earum? Obcaecati eius assumenda excepturi blanditiis, omnis libero quia aspernatur similique aperiam, quidem sunt cupiditate laboriosam expedita nemo doloribus quod officia!</p>
                                </td>
                            </tr>
                            <!-- end table row -->
                            <tr>
                                <td>
                                    <h6 class="text-muted">Peringatan & Perhatian</h6>
                                </td>
                                <td>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus blanditiis aperiam et voluptas aut quidem dicta culpa quibusdam molestias consectetur, cumque sit officia labore, velit soluta quia incidunt veniam minus!</p>
                                </td>
                            </tr>
                            <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <div class="col-xl-4 col-lg-4">
        <form action="/home/keranjangAdd" method="post">
            <!-- hidden input  -->
            <input type="text" name="produk" value="<?= $produk['id_produk']; ?>" hidden>
            <input type="text" name="harga" value="<?= $produk['harga']; ?>" hidden>
            <!-- end hidden input  -->
            <div class="card-style">
                <h6 class="mb-25">Order</h6>
                <div class="select-style-1">
                    <label>Diskon Member</label>
                    <div class="select-position">
                        <select id="diskon" name="diskon">
                            <option id="konsumen" value="Konsumen">Konsumen</option>
                            <option id="distributor" value="Distributor">Distributor -20.000</option>
                            <option id="silver" value="Silver">Silver -30.000</option>
                            <option id="gold" value="Gold">Gold -50.000</option>
                            <option id="platinum" value="Platinum">Platinum -100.000</option>
                        </select>
                    </div>
                    <label>Atur <a href="/home/user/#distributor">ID Member</a> untuk mengaktifkan diskon</label>
                </div>
                <!-- end select -->
                <div class="select-style-1">
                    <label>Stokis</label>
                    <div class="select-position">
                        <select id="stokis" name="stokis">
                            <?php foreach ($stok as $Stokis) : ?>
                                <option id="konsumen" value="<?= $Stokis['id_stokis'] ?>"><?= $Stokis['kecamatan'] ?> - Stok <?= $Stokis['qty'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <!-- end select -->
                <div class="input-style-1">
                    <label>Atur Jumlah</label>
                    <div class="row">
                        <div class="col-5">
                            <input type="number" id="stokProduk" name="qty" value="1" min="1" max="" onchange="hargaStok()">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="main-btn primary-btn btn-hover">
                                <i class="lni lni-plus"></i>
                                Keranjang
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end select -->
            </div>
        </form>
    </div>

    <!-- ========== rekomendasi start ========== -->
    <div class="title-wrapper pt-30 mb-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title">
                    <h2>Rekomendasi Produk</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== rekomendasi end ========== -->
    <div class="row">
        <?php foreach ($rekomendasi as $Produk) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 col-6 mt-10">
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
</div>
<!-- ========== Card-wrapper End ========== -->
<?php $this->endSection('content'); ?>