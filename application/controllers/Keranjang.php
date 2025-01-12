<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mkeranjang');
    }

    public function index() {
        $data['keranjang'] = $this->Mkeranjang->semua_keranjang();
        $data['total_harga'] = $this->Mkeranjang->total_harga();
        $this->load->view('keranjang', $data);
    }

    public function tambah() {
        $id_produk = $this->input->post('id_produk');
        $this->Mkeranjang->tambah_ke_keranjang($id_produk);
        redirect('produk');
    }

    public function hapus($id_produk) {
        $this->Mkeranjang->hapus_dari_keranjang($id_produk);
        redirect('keranjang');
    }

    public function checkout() {
        // Tambahkan logika pembayaran/checkout di sini
        $this->Mkeranjang->kosongkan_keranjang();
        redirect('produk');
    }
    public function update() {
    $id_produk = $this->input->post('id_produk');
    $action = $this->input->post('action');

    if ($action == 'tambah') {
        $this->Mkeranjang->tambah_ke_keranjang($id_produk);
    } elseif ($action == 'kurangi') {
        $this->Mkeranjang->update_keranjang($id_produk, 'kurangi');
    }

    redirect('produk');
}
}
