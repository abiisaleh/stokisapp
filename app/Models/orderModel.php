<?php

namespace App\Models;

use CodeIgniter\Model;

class orderModel extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id_order';
    protected $allowedFields = ['id_pembeli', 'pembayaran', 'tanggal', 'status'];
}

?>