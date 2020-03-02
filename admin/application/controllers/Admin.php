<?php

class Admin Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login_admin"));
	}
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul']='Data Admin';
		$data['admin']= $this->Model_admin->getAllAdmin();
		if ($this->input->post('keyword')){
			$data['admin'] = $this->Model_admin->cariDataAdmin();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$data['judul']='Form Tambah Data Admin';
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_tambah/header', $data);
			$this->load->view('admin/form_tambah');
			$this->load->view('templates_tambah/footer');
		} else {
			
			$this->Model_admin->tambahDataAdmin();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin');
		}
	}
		
	public function hapus($id_admin)
	{
		$this->Model_admin->hapusDataAdmin($id_admin);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin');
	}

	public function edit($id_admin)
	{
		$data['judul']='Form Edit Data Admin';
		$data['admin']= $this->Model_admin->getAdminByKode($id_admin);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_ubah/header', $data);
			$this->load->view('admin/form_edit', $data);
			$this->load->view('templates_ubah/footer');
		} else {
			
			$this->Model_admin->ubahDataAdmin();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin');
		}
	}
}