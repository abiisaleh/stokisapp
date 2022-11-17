<?php $this->extend('layout/admin'); ?>

<?php $this->section('content'); ?>
    <div class="card-style">
            <form action="stokAdd" method="POST">
                <div class="row">
                    <div class="select-style-2 col-8">
                        <div class="select-position">
                        <select name="idProduk">
                            <option value="">Pilih produk..</option>
                            <?php foreach($produk as $Produk) : ?>
                                <option value="<?= $Produk['id_produk'] ?>"><?= $Produk['nama']?></option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                    </div>
                    <div class="input-style-1 col-2">
                        <input type="text" placeholder="1" name="stok">
                    </div>
                    <div class="col-2">
                        <input class="main-btn primary-btn btn-hover" type="submit" value="stok">
                    </div>
                </div>    
            </form>  
            <div class="table-wrapper table-responsive">
                <table id="tableGudang">
                    <thead>
                        <tr>
                            <th>
                                <h6 class="min-width">#</h6>
                            </th>
                            <th>
                                <h6>Nama</h6>
                            </th>
                            <th>
                                <h6>Harga</h6>
                            </th>
                            <th>
                                <h6>Dist</h6>
                            </th>
                            <th>
                                <h6>Poin</h6>
                            </th>
                            <th>
                                <h6 class="min-width">Stok</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1; 
                        foreach ($stok as $Stok) :?>
                            <tr>
                                <td>
                                    <p><?= $i++ ?></p>
                                </td>
                                <td>
                                    <p><?= $Stok['nama']?></p>
                                </td>
                                <td>
                                    <p><?= number_format($Stok['harga'],0)?></p>
                                </td>
                                <td>
                                    <p><?= number_format($Stok['diskon_distributor'],0) ?></p>
                                </td>
                                <td>
                                    <p><?= $Stok['poin']?></p>
                                </td>
                                <td>
                                    <p><?= $Stok['qty'] ?></p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
    </div>
<?php $this->endSection('content'); ?>

<?php $this->Section('script'); ?>
<script>    
    const dataTableGudang = new simpleDatatables.DataTable("#tableGudang", {
        searchable: false,
        paging: false,
    });
</script>
<?php $this->endSection('script'); ?>