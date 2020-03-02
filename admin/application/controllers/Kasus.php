<?php

class Kasus Extends CI_Controller{
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
		$data['judul']='Data Jenis Kasus';
		$data['kasus']= $this->Model_kasus->getAllKasus();
		if ($this->input->post('keyword')){
			$data['kasus'] = $this->Model_kasus->cariDataKasus();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('kasus/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_kasus', 'Nama_kasus', 'required');
		$data['judul']='Form Tambah Jenis Kasus';
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_tambah/header', $data);
			$this->load->view('kasus/form_tambah');
			$this->load->view('templates_tambah/footer');
		} else {
			
			$this->Model_kasus->tambahDataKasus();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('kasus');
		}
	}
		
	public function hapus($id_jenis)
	{
		$this->Model_kasus->hapusDataKaasus($id_jenis);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('kasus');
	}

	public function edit($id_jenis)
	{
		$data['judul']='Form Edit Jenis Kasus';
		$data['kasus']= $this->Model_kasus->getJenisByKode($id_jenis);

		$this->form_validation->set_rules('nama_kasus', 'Nama_kasus', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_ubah/header', $data);
			$this->load->view('kasus/form_edit', $data);
			$this->load->view('templates_ubah/footer');
		} else {
			
			$this->Model_kasus->ubahDataKasus();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('kasus');
		}
	}
}