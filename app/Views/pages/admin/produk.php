<?php $this->extend('layout/admin');?>

<?php $this->section('content');?>
<!-- ========== product start ========== -->
<div class="col mb-30">
    <div class="card-style">
        <h6 class="card-title mb-25">Detail Produk</h6>
        <form action="/admin/produkSave/<?= ($produkDetail == null) ? "" : $produkDetail['id_produk']; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="text" placeholder="Nama Produk.." name="nama" value="<?= ($produkDetail == null) ? "" : $produkDetail['nama']; ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="file" placeholder="Gambar" name="gambar" value="<?= ($produkDetail == null) ? "" : $produkDetail['gambar']; ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <textarea placeholder="Deskripsi.." rows="5" name="deskripsi"><?= ($produkDetail == null) ? "" : $produkDetail['deskripsi']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="number" placeholder="Harga" name="harga" value="<?= ($produkDetail == null) ? "" : $produkDetail['harga']; ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="text" placeholder="Diskon Distributor.." name="dDistributor" value="<?= ($produkDetail == null) ? "" : $produkDetail['diskon_distributor']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="input-style-1">
                                <input type="text" placeholder="Diskon Silver.." name="dSilver" value="<?= ($produkDetail == null) ? "" : $produkDetail['diskon_silver']; ?>">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-style-1">
                                <input type="text" placeholder="Diskon Gold.." name="dGold" value="<?= ($produkDetail == null) ? "" : $produkDetail['diskon_gold']; ?>">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-style-1">
                                <input type="text" placeholder="Diskon Platinum.." name="dPlatinum" value="<?= ($produkDetail == null) ? "" : $produkDetail['diskon_platinum']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="number" placeholder="Poin.." name="poin" value="<?= ($produkDetail == null) ? "" : $produkDetail['poin']; ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input class="btn btn-primary" type="submit" value="Simpan">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ========== product end ========== -->

<!-- ========== product start ========== -->
<div class="col">
    <div class="card-style">
        <h6 class="mb-10">Daftar Produk</h6>
        <div class="table-wrapper table-responsive">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>
                            <h6>#</h6>
                        </th>
                        <th>
                            <h6>Nama</h6>
                        </th>
                        <th>
                            <h6>Harga</h6>
                        </th>
                        <th>
                            <h6>Poin</h6>
                        </th>
                        <th>
                            <h6>Diskon</h6>
                        </th>
                        <th>
                            <h6>Aksi</h6>
                        </th>
                    </tr>
                    <!-- end table row-->
                </thead>
                <tbody>
                    <?php foreach ($produk as $produk) : ?>
                        <tr>
                            <td>
                                <p><?= $produk['id_produk'];?></p>
                            </td>
                            <td class="min-width">
                                <p><?= $produk['nama']; ?></p>
                            </td>
                            <td class="min-width">
                                <p><?= number_format($produk['harga'], 0); ?></p>
                            </td>
                            <td class="min-width">
                                <p><?= $produk['poin']; ?></p>
                            </td>
                            <td class="min-width">
                                <p>
                                    <span class="status-btn active-btn"><?= $produk['diskon_distributor']; ?></span>
                                </p>
                            </td>
                            <td>
                                <div class="action">
                                    <a class="text-danger mx-1" href="/admin/produkDelete/<?= $produk['id_produk']; ?>">
                                        <i class="lni lni-trash-can"></i>
                                    </a>
                                    <a class="text-success mx-1" href="/admin/Produk/<?= $produk['id_produk']; ?>">
                                        <i class="lni lni-pencil"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- end table row -->
                </tbody>
            </table>
            <!-- end table -->
        </div>
    </div>
</div>
<!-- ========== product end ========== -->

<?php $this->endSection('content'); ?>
<?php $this->Section('script'); ?>
<script>
    const dataTable = new simpleDatatables.DataTable("#table");
</script>
<?php $this->endSection('script'); ?>
