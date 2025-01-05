<?php
class Produk extends CI_Controller
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
        //panggil model produk
        $this->load->model("Mproduk");

        $data["produk"] = $this->Mproduk->tampil();

        $this->load->view("header");
        $this->load->view("produk_tampil", $data)/*memberikan/ mengoper data dari $data ke view produk tampil */;
        $this->load->view('footer');
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("nama_produk", "Nama produk", "required");
        $this->form_validation->set_rules("deskripsi_produk", "Deskripsi produk", "required");
        $this->form_validation->set_rules("harga_produk", "Harga produk", "required");


        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Mproduk
            $this->load->model('Mproduk');
            //jalankan fungsi simpan()
            $this->Mproduk->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data produk tersimpan');

            //redirect ke filter produk utk tampil produk

            redirect('produk', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('produk_tambah');
        $this->load->view('footer');
    }

    function hapus($id_produk)
    {

        //panggilMproduk
        $this->load->model('Mproduk');

        //jalankan fungsi hapus
        $this->Mproduk->hapus($id_produk);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'produk telah terhapus');

        //redirect ke produk utk tampil data
        redirect('produk', 'refresh');
    }

    function edit($id_produk)
    {
        // 1. Tampilkan produk lama
        $this->load->model('Mproduk');
        $data['produk'] = $this->Mproduk->detail($id_produk);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("nama_produk", "Nama produk", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Mproduk->edit($inputan, $id_produk);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'produk telah diubah');
            // Redirect
            redirect('produk', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('produk_edit', $data);
        $this->load->view('footer');
    }
}
