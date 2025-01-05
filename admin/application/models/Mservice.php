<?php
class Mservice extends CI_Model
{
    function tampil()
    {

        //melakukan query
        $q = $this->db->get("service");

        //wajib kita pecah ke array
        $d = $q->result_array();

        return $d;
    }

    function simpan($inputan)
    {
        //kita urusi dulu upload foto_service
        $config['upload_path'] = $this->config->item('assets_service');
        $config['allowed_types'] = 'gif|jpg|png|webp';

        $this->load->library('upload', $config);

        //adegan mengupload foto_service
        $ngupload = $this->upload->do_upload('foto_service');

        //jika ngupload, maka dapatkan nama fotonya utk ditampung ke db

        if ($ngupload) {
            $inputan['foto_service'] = $this->upload->data('file_name');
        }

        //query simpan data ke tabel service
        //insert into service bla bla bla
        $this->db->insert('service', $inputan);
    }

    function hapus($id_service)
    {

        // delete from service where id_service=5
        $this->db->where('id_service', $id_service);
        $this->db->delete('service');
    }

    function detail($id_service)
    {
        // Select * from service where id_service = 4
        $this->db->where('id_service', $id_service);
        $q = $this->db->get('service');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_service)
    {
        // Ngurusi foto service jika pengguna upload foto
        $config['upload_path'] = $this->config->item('assets_service');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // adegan upload
        $upload = $this->upload->do_upload('foto_service');

        // jika upload
        if ($upload) {
            $inputan['foto_service'] = $this->upload->data('file_name');
        }

        // query update sesuai id_service
        $this->db->where('id_service', $id_service);
        $this->db->update('service', $inputan);
    }
}