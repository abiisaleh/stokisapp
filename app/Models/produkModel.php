<?php

namespace App\Models;

use CodeIgniter\Model;

class produkModel extends Model
{
    protected $table    = 'produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama', 'harga', 'gambar', 'poin', 'deskripsi', 'diskon_distributor', 'diskon_silver', 'diskon_gold', 'diskon_platinum'];

    public function search($keyword)
    {
        return $this->table($this->table)->like('nama', $keyword)->orLike('deskripsi', $keyword);
    }

    public function ProdukStokisStok($id)
    {
        return $this->table('produk')
            ->join('stok', 'stok.id_produk = produk.id_produk')
            ->join('stokis', 'stokis.id_stokis = stok.id_stokis')
            ->like('stok.id_stokis', $id);
    }
}
