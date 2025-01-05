<?php
class Mslider extends CI_Model
{
    function tampil()
    {

        //melakukan query
        $q = $this->db->get("slider");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;
    }

    function simpan($inputan)
    {
        //kita urusi dulu upload foto_slider
        $config['upload_path'] = $this->config->item('assets_slider');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        //adegan mengupload foto_slider
        $ngupload = $this->upload->do_upload('foto_slider');

        //jika ngupload, maka dapatkan nama fotonya utk ditampung ke db

        if ($ngupload) {
            $inputan['foto_slider'] = $this->upload->data('file_name');
        }

        //query simpan data ke tabel slider
        //insert into slider bla bla bla
        $this->db->insert('slider', $inputan);
    }

    function hapus($id_slider)
    {

        // delete from slider where id_slider=5
        $this->db->where('id_slider', $id_slider);
        $this->db->delete('slider');
    }

    function detail($id_slider)
    {
        // Select * from slider where id_slider = 4
        $this->db->where('id_slider', $id_slider);
        $q = $this->db->get('slider');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_slider)
    {
        // Ngurusi foto slider jika pengguna upload foto
        $config['upload_path'] = $this->config->item('assets_slider');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // adegan upload
        $upload = $this->upload->do_upload('foto_slider');

        // jika upload
        if ($upload) {
            $inputan['foto_slider'] = $this->upload->data('file_name');
        }

        // query update sesuai id_slider
        $this->db->where('id_slider', $id_slider);
        $this->db->update('slider', $inputan);
    }
}