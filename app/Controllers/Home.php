<?php

namespace App\Controllers;

use App\Models\produkModel;
use App\Models\cartModel;
use App\Models\orderModel;
use App\Models\stokisModel;
use App\Models\stokModel;
use App\Models\pembeliModel;

class Home extends BaseController
{
    protected $produkModel;
    protected $cartModel;
    protected $orderModel;
    protected $stokisModel;
    protected $stokModel;
    protected $pembeliModel;

    public function __construct()
    {
        $this->produkModel = new produkModel();
        $this->cartModel = new cartModel();
        $this->orderModel = new orderModel();
        $this->stokisModel = new stokisModel();
        $this->stokModel = new stokModel();
        $this->pembeliModel = new pembeliModel();
    }

    public function index()
    {
        //Pencarian
        $keyword = $this->request->getVar('keyword');
        if (!$keyword) {
            // kalau tidak ada keyword tampilkan semua
            $produk = $this->produkModel->findAll();
        } else {
            // kalau ada cari keywords
            $produk = $this->produkModel->search($keyword)->findAll();
        };

        $data = [
            'title' => 'Stokis Tiens Papua',
            'produk' => $produk,
            'keyword' => $keyword
        ];

        return view('index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->find($id),
            'stok' => $this->stokModel->stokStokis()->where('id_produk = '.$id)->find(),
            'rekomendasi' => $this->produkModel->findAll(4),
        ];
        
        return view('pages/user/detail', $data);
    }

    public function keranjang()
    {
        $data = [
            'title' => 'Keranjang',
            'cart' => $this->cartModel->cartProduk()->where('id_pembeli ='.'1')->where('id_order = ')->find()
        ];

        return view('pages/user/keranjang', $data);
    }

    public function keranjangAdd()
    {
        $cart = [
            'id_produk' => $this->request->getVar('produk'),
            'id_order'  => NULL,
            'qty'       => $this->request->getVar('qty'),
            'subtotal'  => $this->request->getVar('harga'),
            'id_pembeli'=> 1
        ];
        
        $this->cartModel->save($cart);

        return redirect()->to('/home');
    }

    public function cartDelete($id)
    {
        $this->cartModel->delete($id);

        return redirect()->to('/home');
    }

    public function orderAdd()
    {
        $order = [
            'id_pembeli'    => 1,
            'pembayaran'    => $this->request->getVar("payment"),
            'status'        => 0, //0 lunas 1 belum lunas
        ];

        $this->orderModel->insert($order);

        // update cart
        $cart = $this->cartModel->where('id_pembeli ='.'1')->find();

        foreach ($cart as $ID) {
            $cartUpdate = [
                'id_cart'      => $ID['id_cart'],
                'id_order'     => $this->orderModel->getInsertID()
            ];

            $this->cartModel->save($cartUpdate);
        }

        echo("Berhasil Disimpan");
    }

    public function notifikasi()
    {
        $data = [
            'title' => 'Notifikasi'
        ];

        return view('pages/user/notifikasi', $data);
    }

    public function user()
    {
        $data = [
            'title' => 'User Profile',
            'pembeli' => $this->pembeliModel->find('1')
        ];

        return view('pages/user/profile', $data);
    }
}
