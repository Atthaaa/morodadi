<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller
{   

    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_member')) {
            redirect('/', 'refresh');
        }
    }

    public function index()
    {
        // Data untuk dikirimkan ke view
        $data['title'] = 'Tentang Kami - Radiator Morodad';
        $data['content'] = 'Kami adalah bengkel radiator profesional yang berpengalaman dalam memperbaiki dan merawat radiator kendaraan Anda. Dengan layanan terbaik, kami berkomitmen memberikan kepuasan kepada pelanggan.';

        // Memuat view
        $this->load->view('header', $data); // Header umum
        $this->load->view('aboutus', $data); // View khusus untuk About Us
        $this->load->view('footer'); // Footer umum
    }
}
