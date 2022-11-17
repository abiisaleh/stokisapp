<?php $this->extend('layout/admin');?>

<?php $this->section('content');?>
<div class="card-style">
    <div class="table-wrapper table-responsive">
        <table id="tbStokis">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pemilik</th>
                    <th>Telp</th>
                    <th>Alamat</th>
                    <th>Kabupaten</th>
                    <th>file</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($stokis as $Stokis) :?>
                    <tr>
                        <td><?= $Stokis['id_stokis'];?></td>
                        <td><?= $Stokis['pemilik'];?></td>
                        <td><?= $Stokis['telp'];?></td>
                        <td><?= $Stokis['alamat'].', '.$Stokis['kelurahan'].', '.$Stokis['kecamatan'];?></td>
                        <td><?= $Stokis['kabupaten'];?></td>
                        <td><?= $Stokis['dokumen'];?>
                            <a href="/"><i class="lni lni-download"></i></a>
                        </td>
                        <td>
                            <a href="" class="btn btn-success">Verifikasi</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->endSection('content');?>

<?php $this->section('script');?>
<script>    
    const dataTableGudang = new simpleDatatables.DataTable("table", {
        searchable: false,
        paging: false
    });
</script>
<?php $this->endSection('script');?>