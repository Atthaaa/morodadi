<?php
class Mproduk extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get('produk');
        $d = $q->result_array();

        return $d;
    }

    function tampil_produk_terbaru()
    {
        $this->db->order_by('id_produk', 'desc');
        $q = $this->db->get('produk');
        $this->db->get('produk', 4, 0);
        $d = $q->result_array();

        return $d;
    }

    function detail($id_produk)
    {
        // Detail sesuai produk dengan id yang login
        $this->db->where('id_produk', $id_produk);
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }

    function getProdukById($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $q = $this->db->get('produk');

        return $q->row_array(); // Mengembalikan satu baris data
    }

    function tampil_berdasarkan_tipe($tipe_mobil)
    {
    $this->db->where('tipe_mobil', $tipe_mobil);
    $q = $this->db->get('produk');
    return $q->result_array();
    }

}
