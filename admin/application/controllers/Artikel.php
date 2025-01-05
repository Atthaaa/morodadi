<?php
class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_admin')) {
            redirect('/', 'refresh');
        }
    }

    function index()
    {
        //panggil model artikel
        $this->load->model("Martikel");

        $data["artikel"] = $this->Martikel->tampil();

        $this->load->view("header");
        $this->load->view("artikel_tampil", $data)/*memberikan/ mengoper data dari $data ke view artikel tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_artikel", "Nama artikel", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Martikel
            $this->load->model('Martikel');
            //jalankan fungsi simpan()
            $this->Martikel->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data artikel tersimpan');

            //redirect ke filter artikel utk tampil artikel

            redirect('artikel', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('artikel_tambah');
        $this->load->view('footer');
    }

    function hapus($id_artikel)
    {

        //panggilMartikel
        $this->load->model('Martikel');

        //jalankan fungsi hapus
        $this->Martikel->hapus($id_artikel);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'artikel telah terhapus');

        //redirect ke artikel utk tampil data
        redirect('artikel', 'refresh');
    }

    function edit($id_artikel)
    {
        // 1. Tampilkan artikel lama
        $this->load->model('Martikel');
        $data['artikel'] = $this->Martikel->detail($id_artikel);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("judul_artikel", "Nama artikel", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Martikel->edit($inputan, $id_artikel);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'artikel telah diubah');
            // Redirect
            redirect('artikel', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('artikel_edit', $data);
        $this->load->view('footer');
    }
}
