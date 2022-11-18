<?php

namespace App\Controllers;

use App\Models\produkModel;
use App\Models\stokisModel;
use App\Models\stokModel;

class Admin extends BaseController
{
    protected $produkModel;
    protected $stokisModel;
    protected $stokModel;

    public function __construct()
    {
        $this->produkModel = new produkModel();
        $this->stokisModel = new stokisModel();
        $this->stokModel = new stokModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        return view('pages/admin/index', $data);
    }

    public function pos()
    {
        $data = [
            'title' => 'Point Of Sales'
        ];

        return view('pages/admin/pos', $data);
    }

    public function stok()
    {
        $data = [
            'title' => 'Stok Produk',
            'produk' => $this->produkModel->findAll(),
            'stok' => $this->produkModel->ProdukStokisStok('363')->findAll()
        ];

        return view('pages/admin/stok', $data);
    }

    public function stokAdd()
    {
        $produk = $this->produkModel->find($this->request->getVar('idProduk'));
        $idStokis = '363';

        $data = [
            'id_stok'   => $idStokis.'-'.$produk['id_produk'],
            'id_stokis' => $idStokis,
            'id_produk' => $produk['id_produk'],
            'qty'       => $this->request->getVar('stok')
        ];

        $this->stokModel->save($data);

        return redirect()->to('/admin/stok');
    }

    public function pesanan()
    {
        $data = [
            'title' => 'Pesanan'
        ];

        return view('pages/admin/pesanan', $data);
    }

    public function pelanggan()
    {
        $data = [
            'title' => 'Pelanggan'
        ];

        return view('pages/admin/pelanggan', $data);
    }

    public function stokis()
    {
        $data = [
            'title' => 'Stokis',
            'stokis' => $this->stokisModel->findAll()
        ];

        return view('pages/admin/stokis', $data);
    }

    public function produk($id = "")
    {
        $produkDetail = $this->produkModel->find($id);

        $data = [
            'title' => 'Produk',
            'produk' => $this->produkModel->findAll(),
            'produkDetail' => $produkDetail
        ];

        return view('pages/admin/produk', $data);
    }

    public function produkSave($id)
    {
        //admbil filegambar
        $filegambar = $this->request->getFile('gambar');
        //ambil nama file
        $namaFile = $filegambar->getName();
        //compres image dan simpan
        \Config\Services::image('gd')->withFile($filegambar)->resize(80, 80, true, 'height')->save('assets\images\products\thumb' . $namaFile, 90);
        \Config\Services::image('gd')->withFile($filegambar)->resize(200, 200, true, 'height')->save('assets\images\products\small' . $namaFile, 90);
        //get real size for detail
        $filegambar->move('assets\images\stokisapp\products', null, true);

        $this->produkModel->save([
            'id_produk' => $id,
            'nama' => $this->request->getVar('nama'),
            'gambar' => $namaFile,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'diskon_distributor' => $this->request->getVar('dDistributor'),
            'diskon_silver' => $this->request->getVar('dSilver'),
            'diskon_gold' => $this->request->getVar('dGold'),
            'diskon_platinum' => $this->request->getVar('dPlatinum'),
            'poin' => $this->request->getVar('poin')
        ]);

        if ($id == null)
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        else
            session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/admin/produk');
    }

    public function produkDelete($id)
    {
        $this->produkModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/admin/produk');
    }

    public function notifikasi()
    {
        $data = [
            'title' => 'Notifikasi'
        ];

        return view('pages/admin/notifikasi', $data);
    }
}
