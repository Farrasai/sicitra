<?php

class Menu extends CI_Controller {
    public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}
    

	public function index()
	{
		$data['judul'] = 'Menu Pengaduan SICITRA';
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('menu/index');
		$this->load->view('templates/footer.php');
	}
}