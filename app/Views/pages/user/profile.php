<?php $this->extend('layout/user'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card-style settings-card-1 mb-30">
            <div class="
                    title
                    mb-30
                    d-flex
                    justify-content-between
                    align-items-center
                  ">
                <h6>Akun</h6>
                <button class="border-0 bg-transparent">
                    <i class="lni lni-pencil-alt"></i>
                </button>
            </div>
            <div class="profile-info">
                <div class="d-flex align-items-center mb-30">
                    <div class="profile-image">
                        <img src="/assets/images/profile/profile-1.png" alt="" id="gambarProfile">
                        <div class="update-image">
                            <input type="file" onchange="preview('#gambarProfile')">
                            <label for="gambarProfile"><i class="lni lni-cloud-upload"></i></label>
                        </div>
                    </div>
                    <div class="profile-meta">
                        <h5 class="text-bold text-dark mb-10 d-inline">abiisaleh</h5>
                        <span class="bg-warning text-sm rounded-pill px-3 text-white">distributor</span>
                        <p class="text-sm text-gray">email</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-style-1">
                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                        <input type="text" placeholder="Full Name" value="<?= $pembeli['nama'] ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-style-1">
                        <label>Telp / Whatsapp<span class="text-danger">*</span></label>
                        <input type="text" placeholder="08xx" value="<?= $pembeli['telp'] ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-style-1">
                        <label id="distributor">ID Distributor</label>
                        <input type="text" placeholder="91xxx" value="<?= $pembeli['id_member'] ?>">
                    </div>
                </div>
                <button class="main-btn primary-btn btn-hover">
                    Reset Password
                </button>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-lg-6">
        <div class="card-style settings-card-2 mb-30">
            <div class="title mb-30">
                <h6>Profile</h6>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="input-style-1">
                            <label id="distributor">ID Stokis</label>
                            <input type="text" placeholder="xx">
                        </div>
                    </div>
                    <!-- untuk provinsi kabupaten kecamatan nanti pakai API -->

                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input type="text" placeholder="Address" value="<?= $pembeli['alamat'] ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="main-btn primary-btn btn-hover">
                            Update Profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-lg-6">
        
    </div>
    <!-- end col -->
</div>
<?php $this->endSection('content'); ?>