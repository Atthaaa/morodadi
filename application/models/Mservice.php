<?php
class Mservice extends CI_Model
{
    // Fungsi untuk menampilkan semua data service
    function tampil()
    {
        $q = $this->db->get('service');
        return $q->result_array();
    }

    // Fungsi untuk menampilkan 4 data service terbaru
    function tampil_service_terbaru()
    {
        $this->db->order_by('id_service', 'desc'); // Urutkan berdasarkan id_service (descending)
        $this->db->limit(4); // Batasi hasil hanya 4
        $q = $this->db->get('service');
        return $q->result_array();
    }

    // Fungsi untuk menampilkan service berdasarkan id_member
    function service_member($id_member)
    {
        $this->db->where('id_member', $id_member);
        $q = $this->db->get('service');
        return $q->result_array();
    }
}
?>