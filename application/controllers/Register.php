<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function index()
	{
		$this->load->model('Mmember');

		$this->form_validation->set_rules('email_member', 'email', 'required|is_unique[member.email_member]');
		$this->form_validation->set_rules('password_member', 'password', 'required');
		$this->form_validation->set_rules('nama_member', 'nama', 'required');
		$this->form_validation->set_rules('alamat_member', 'alamat', 'required');
		$this->form_validation->set_rules('wa_member', 'wa', 'required');

		$this->form_validation->set_message('required', "%s wajib di isi");
		$this->form_validation->set_message('is_unique', "%s yang sama sudah digunakan");


		if ($this->form_validation->run() == TRUE) {

			$m['email_member'] = $this->input->post('email_member');
			$m['password_member'] = sha1($this->input->post('password_member'));
			$m['nama_member'] = $this->input->post('nama_member');
			$m['alamat_member'] = $this->input->post('alamat_member');
			$m['wa_member'] = $this->input->post('wa_member');

			$this->Mmember->register($m);
			$this->session->set_flashdata('pesan_sukses', 'registrasi berhasil, silahkan login');
			redirect('/', 'refresh');
		}

		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
}
