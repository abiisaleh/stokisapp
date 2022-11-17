<?php

namespace App\Models;

use CodeIgniter\Model;

class stokModel extends Model
{
    protected $table = 'stok';
    protected $primaryKey = 'id_stok';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id_stok', 'id_stokis', 'id_produk', 'qty'];

    public function stokStokis()
    {
        return $this->table('stok')->join('stokis', 'stokis.id_stokis = stok.id_stokis');
    }
}