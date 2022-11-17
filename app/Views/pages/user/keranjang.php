<?php $this->extend('layout/user'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-8">
        <div class="card-style">
            <h6 class="card-title">Order summary</h6>
            <?php foreach ($cart as $Cart) : ?>
                <div class="single-notification">
                    <div class="notification">
                        <div class="image text-success">
                            <span><?= $Cart['qty']?>x</span>
                        </div>
                        <a href="#0" class="content">
                            <h6 class="mb-0 mt-2"><?= $Cart['nama']?></h6>
                            <span class="text-sm text-medium text-gray">Rp. <?= number_format($Cart['subtotal']) ?></span>
                        </a>
                    </div>
                    <div class="action">
                        <a class="text-danger delete-btn" href="/home/cartDelete/<?= $Cart['id_cart']?>">
                            <i class="lni lni-trash-can"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end single notification -->
        </div>
    </div>

    <div class="col-4">
        <div class="card-style">
            <h6 class="card-title">Detail Pembayaran</h6>
            <div class="card-body">
                <form action="/home/orderAdd" method="post">
                    <div class="input-style-3">
                        <input type="text" placeholder="Alamat">
                        <span class="icon"><i class="lni lni-map-marker"></i></span>
                    </div>
                    <div class="input-style-3">
                        <input type="text" placeholder="Telp">
                        <span class="icon"><i class="lni lni-phone"></i></span>
                    </div>
                    <div class="select-style-2">
                        <div class="select-position">
                            <select name="payment">
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="cash">Cash</option>
                                <option value="transfer">Transfer</option>
                                <option value="ewallet">E-Wallet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-between px-2 mb-10">
                        <div class="col-auto">
                            <h6 class="col">Total</h6>
                        </div>
                        <div class="col-auto">
                            <h4 class="col right">Rp. 400.000</h4>
                        </div>
                    </div>
                    <div class="row px-3">
                        <input type="submit" class="main-btn primary-btn rounded-md btn-hover" value="Check Out">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection('content'); ?>