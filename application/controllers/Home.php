<?php


/**
 * 
 */
class Home extends CI_Controller {
	public function index($nama = '')
	{
		$data['judul'] = 'SICITRA';
		$data['nama'] = $nama;
		$this->load->view('templates/header.php', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer.php');
	}
}
