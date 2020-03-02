<?php

class Login_gagal Extends CI_Controller{

	public function index()
	{
		$data['judul'] = 'Halaman Login Admin';
		$this->load->view('login_admin/gagal', $data);
	}
}