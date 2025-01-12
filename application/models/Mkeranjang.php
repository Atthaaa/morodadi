<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkeranjang extends CI_Model {

    public function tambah_ke_keranjang($id_produk, $jumlah = 1) {
        $produk = $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
        if ($produk) {
            if (isset($_SESSION['keranjang'][$id_produk])) {
                $_SESSION['keranjang'][$id_produk]['jumlah'] += $jumlah;
            } else {
                $_SESSION['keranjang'][$id_produk] = [
                    'id_produk' => $id_produk,
                    'nama_produk' => $produk['nama_produk'],
                    'harga_produk' => $produk['harga_produk'],
                    'jumlah' => $jumlah
                ];
            }
        }
    }

    public function hapus_dari_keranjang($id_produk) {
        if (isset($_SESSION['keranjang'][$id_produk])) {
            unset($_SESSION['keranjang'][$id_produk]);
        }
    }

    public function semua_keranjang() {
        return isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : [];
    }

    public function total_harga() {
        $total = 0;
        foreach ($this->semua_keranjang() as $item) {
            $total += $item['harga_produk'] * $item['jumlah'];
        }
        return $total;
    }

    public function kosongkan_keranjang() {
        unset($_SESSION['keranjang']);
    }
    
    public function update_keranjang($id_produk, $action) {
    // Periksa apakah produk ada di keranjang
    if (isset($_SESSION['keranjang'][$id_produk])) {
        if ($action == 'tambah') {
            // Tambahkan jumlah produk
            $_SESSION['keranjang'][$id_produk]['jumlah'] += 1;
        } elseif ($action == 'kurangi') {
            // Kurangi jumlah produk
            $_SESSION['keranjang'][$id_produk]['jumlah'] -= 1;
            
            // Hapus produk jika jumlah <= 0
            if ($_SESSION['keranjang'][$id_produk]['jumlah'] <= 0) {
                unset($_SESSION['keranjang'][$id_produk]);
            }
        }
    }
}

}
