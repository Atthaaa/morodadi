<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_admin')) {
            redirect('/', 'refresh');
        }
    }
    public function index()
    {

        // panggil model Mtransaksi dan fungsi tampil
        $this->load->model('Mtransaksi');
        $data['transaksi'] = $this->Mtransaksi->tampil();

        $this->load->view('header');
        $this->load->view('transaksi_tampil', $data);
        $this->load->view('footer');
    }

    function detail($id_transaksi)
    {
        // Panggil model Mtransaksi
        $this->load->model("Mtransaksi");

        // Panggil fungsi detail()
        $data['transaksi'] = $this->Mtransaksi->detail($id_transaksi);
        // Panggil fungsi transaksi_detail()
        $data['transaksi_detail'] = $this->Mtransaksi->transaksi_detail($id_transaksi);

        $this->load->view('header');
        $this->load->view('transaksi_detail', $data);
        $this->load->view('footer');
    }
}