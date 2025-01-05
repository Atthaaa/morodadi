<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmember extends CI_Model
{
    function tampil()
    {
        $q = $this->db->get('member');
        $d = $q->result_array();
        return $d;
    }

    function detail($id_member)
    {
        $this->db->where('id_member', $id_member);
        $q = $this->db->get('member');
        $d = $q->row_array();
        return $d;
    }
}
