<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$inputan = $this->input->post();

		// Form validation username dan password wajib di isi
		$this->form_validation->set_rules("username_member", "Username", "required");
		$this->form_validation->set_rules("password_member", "Password", "required");

		// atur pesan bindo
		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run() == true) {
			$this->load->model('Mmember');
			$output = $this->Mmember->login($inputan);

			if ($output == "ada") {
				$this->session->set_flashdata('pesan_sukses', 'Berhasil login');
				redirect('welcome', 'refresh');
			} else {
				$this->session->set_flashdata('pesan_gagal', 'Gagal login');
				redirect('/', 'refresh');
			}
		}

		$this->load->model('Mslider');
		$data['slider'] = $this->Mslider->tampil();

		$this->load->model('Mservice');
		$data['service'] = $this->Mservice->tampil();

		$this->load->model('Mproduk');
		$data['produk'] = $this->Mproduk->tampil_produk_terbaru();

		$this->load->model('Martikel');
		$data['artikel'] = $this->Martikel->tampil_artikel_terbaru();

		$this->load->view('header');
		$this->load->view('welcome', $data);
		$this->load->view('footer');
	}
}
