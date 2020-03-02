<?php

class Home Extends CI_Controller{

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login_admin"));
		}
	}

	public function index()
	{
		$data['judul'] = 'Halaman Admin';
		$data['aduan']= $this->Model_aduan->getAllAduan();
		$data['total_aduan'] = $this->Model_aduan->hitungJumlahAsset();
		$data['konsultasi_puspaga']= $this->Model_puspaga->getAllPuspaga();
		$data['total_puspaga'] = $this->Model_puspaga->hitungJumlahAsset();
		$data['konsultasi_kb']= $this->Model_kb->getAllKB();
		$data['total_kb'] = $this->Model_kb->hitungJumlahAsset();
		$data['total_pengadu'] = $this->Model_pengadu->hitungJumlahAsset();
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}