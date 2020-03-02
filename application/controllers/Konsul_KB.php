<?php

class Konsul_KB Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Halaman KB';
		$data['konsultasi_kb']= $this->KB_model->getAllKB();
		if ($this->input->post('keyword')){
			$data['konsultasi_kb'] = $this->KB_model->cariDataKB();
		}
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('konsul_kb/index', $data);
		$this->load->view('templates/footer.php');
	}
	
	public function tambah()
	{

		$config['upload_path']          = './admin/lampiran/';
        $config['allowed_types']        = 'doc|jpg|png|jpeg|docx|pdf|zip';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);


		$this->form_validation->set_rules('nik_pengadu', 'NIK pengadu', 'required');
		$this->form_validation->set_rules('tgl_konsul', 'Tanggal Konsultasi', 'required');
		$this->form_validation->set_rules('judul_konsul', 'Judul K0nsultasi', 'required');
		$this->form_validation->set_rules('perihal_konkb', 'Perihal Konsultasi KB', 'required');
		$data['judul']='Form Tambah Data Konsultasi';
		$data['pengadu']= $this->Pengadu_model->getNIKPengadu();
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/navmenu.php', $data);
			$this->load->view('konsul_kb/tambah',$data);
			$this->load->view('templates/footer.php');
		} else if (! $this->upload->do_upload('lampiran') == 'null') {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->KB_model->tambahDataKonKB($image);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Konsul_KB');
		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->KB_model->tambahDataKonKB($image);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Konsul_KB');
		}
	}
	
	public function hapus($id_konkb)
	{
		$this->KB_model->hapusDataKB($id_konkb);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Konsul_KB');
	}
    
    public function edit($id_konkb)
	{
		$data['judul']='Form Edit Data Konsultasi';
		$data['konsultasi_kb']= $this->KB_model->getKBById($id_konkb);

		$this->form_validation->set_rules('nik_pengadu', 'NIK pengadu', 'required');
		$this->form_validation->set_rules('tgl_konsul', 'Tanggal Konsultasi', 'required');
		$this->form_validation->set_rules('judul_konsul', 'Judul K0nsultasi', 'required');
		$this->form_validation->set_rules('perihal_konkb', 'Perihal Konsultasi KB', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/navmenu.php', $data);
			$this->load->view('konsul_kb/edit', $data);
			$this->load->view('templates/footer.php');
		} else {
			
			$this->KB_model->ubahDataKonKB();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Konsul_KB');
		}
	}
}