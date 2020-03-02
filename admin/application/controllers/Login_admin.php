<?php

class Login_admin Extends CI_Controller{

	public function index()
	{
		$data['judul'] = 'Halaman Login Admin';
		$this->load->view('login_admin/index', $data);
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'pass' => $password);
		$cek = $this->Model_login_admin->cek_login('admin',$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'username' => $username,
				'status' => "login_admin"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("home"));
 
		}
		else
		{
			redirect(base_url("login_gagal"));
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login_admin'));
	}
}