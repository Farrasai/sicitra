<?php

class Tentang extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}
	
	public function Index()
	{

		$data['judul'] = 'Menu Tentang SICITRA';
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('tentang/index');
		$this->load->view('templates/footer.php');
	}
}