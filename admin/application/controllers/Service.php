<?php
class Service extends CI_Controller
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
        //panggil model service
        $this->load->model("Mservice");

        $data["service"] = $this->Mservice->tampil();

        $this->load->view("header");
        $this->load->view("service_tampil", $data)/*memberikan/ mengoper data dari $data ke view service tampil */;
        $this->load->view("footer");
    }

    function tambah()
    {

        //mendapatkan inputan dari formulir pakai $this->input->post()
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("nama_service", "Nama service", "required");
        
        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run() == true) {
            //panggil model Mservice
            $this->load->model('Mservice');
            //jalankan fungsi simpan()
            $this->Mservice->simpan($inputan);


            //pesan dilayar
            $this->session->set_flashdata('pesan_sukses', 'Data service tersimpan');

            //redirect ke filter service utk tampil service

            redirect('service', 'refresh');
        }


        $this->load->view('header');
        $this->load->view('service_tambah');
        $this->load->view('footer');
    }

    function hapus($id_service)
    {

        //panggilMservice
        $this->load->model('Mservice');

        //jalankan fungsi hapus
        $this->Mservice->hapus($id_service);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'service telah terhapus');

        //redirect ke service utk tampil data
        redirect('service', 'refresh');
    }

    function edit($id_service)
    {
        // 1. Tampilkan service lama
        $this->load->model('Mservice');
        $data['service'] = $this->Mservice->detail($id_service);

        // 2. Mikir ubah data
        $inputan = $this->input->post();

        // form validation
        $this->form_validation->set_rules("nama_service", "Nama service", "required");

        // atur pesan bindo
        $this->form_validation->set_message("required", "%s wajib diisi");

        // jika ada inputan
        if ($this->form_validation->run() == true) {
            // Jalankan fungsi edit
            $this->Mservice->edit($inputan, $id_service);
            // Pesan
            $this->session->set_flashdata('pesan_sukses', 'service telah diubah');
            // Redirect
            redirect('service', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('service_edit', $data);
        $this->load->view('footer');
    }
}
