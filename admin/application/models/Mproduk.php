<?php
class Mproduk extends CI_Model
{
    function tampil()
    {

        //melakukan query
        $q = $this->db->get("produk");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;
    }

    function simpan($inputan)
    {
        //kita urusi dulu upload foto_produk
        $config['upload_path'] = $this->config->item('assets_produk');
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        //adegan mengupload foto_produk
        $ngupload = $this->upload->do_upload('foto_produk');

        //jika ngupload, maka dapatkan nama fotonya utk ditampung ke db

        if ($ngupload) {
            $inputan['foto_produk'] = $this->upload->data('file_name');
        }

        //query simpan data ke tabel produk
        //insert into produk bla bla bla
        $this->db->insert('produk', $inputan);
    }

    function hapus($id_produk)
    {

        // delete from produk where id_produk=5
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }

    function detail($id_produk)
    {
        // Select * from produk where id_produk = 4
        $this->db->where('id_produk', $id_produk);
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_produk)
    {
        // Ngurusi foto produk jika pengguna upload foto
        $config['upload_path'] = $this->config->item('assets_produk');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // adegan upload
        $upload = $this->upload->do_upload('foto_produk');

        // jika upload
        if ($upload) {
            $inputan['foto_produk'] = $this->upload->data('file_name');
        }

        // query update sesuai id_produk
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $inputan);
    }
}
