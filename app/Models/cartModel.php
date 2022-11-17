<?php

namespace App\Models;

use CodeIgniter\Model;

class cartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id_cart';
    protected $allowedFields = ['id_produk', 'id_pembeli', 'id_order', 'qty', 'subtotal'];

    public function cartProduk()
    {
        return $this->table('cart')->join('produk', 'produk.id_produk = cart.id_produk');
    }
}

?>