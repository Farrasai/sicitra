<?php

class Lupa_Pass Extends CI_Controller{

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login_admin"));
		}
	}

	public function index()
	{
		$data['judul'] = 'Lupa Password';
		$this->load->view('templates/header', $data);
		$this->load->view('lupa_pass/lupa_pass');
		$this->load->view('templates/footer');
	}

	public function cek() 
	{
	$pass = $this->input->post('pass');
$url = 'https://md5.pinasthika.com/api/decrypt?value='.$pass.'';

$result ['hasil'] = file_get_contents($url);
//do your post action here, with the result
		$data['judul'] = 'Lupa Password';
		$this->load->view('templates_tambah/header', $data);
		$this->load->view('lupa_pass/hasil', $result);
		$this->load->view('templates_tambah/footer');

	}
}