<?php


/**
 * 
 */
class Register_berhasil extends CI_Controller {
	public function index($nama = '')
	{
		$data['judul'] = 'Selamat Datang di SICITRA';
		$data['nama'] = $nama;
		$this->load->view('templates/header.php', $data);
		$this->load->view('home/berhasil', $data);
		$this->load->view('templates/footer.php');
	}
}
