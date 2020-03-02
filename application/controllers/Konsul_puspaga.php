<?php

class Konsul_Puspaga Extends CI_Controller{
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
		$data['judul'] = 'Halaman Puspaga';
		$data['konsultasi_puspaga']= $this->Puspaga_model->getAllPuspaga();
		if ($this->input->post('keyword')){
			$data['konsultasi_puspaga'] = $this->Puspaga_model->cariDataPuspaga();
		}
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('konsul_puspaga/index', $data);
		$this->load->view('templates/footer');
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
		$this->form_validation->set_rules('perihal_konpus', 'Perihal Konsultasi PUSPAGA', 'required');
		$data['judul']='Form Tambah Data Konsultasi';
		$data['pengadu']= $this->Pengadu_model->getNIKPengadu();
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/navmenu.php', $data);
			$this->load->view('konsul_puspaga/tambah',$data);
			$this->load->view('templates/footer.php');
		} else if (! $this->upload->do_upload('lampiran') == 'null') {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Puspaga_model->tambahDataKonPuspaga($image);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Konsul_puspaga');

		}else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Puspaga_model->tambahDataKonPuspaga($image);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Konsul_puspaga');
		}
	}
	
	public function hapus($id_konpus)
	{
		$this->Puspaga_model->hapusDataPuspaga($id_konpus);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Konsul_puspaga');
	}
	
	public function edit($id_konpus)
	{
		$data['judul']='Form Edit Data Konsultasi';
		$data['konsultasi_puspaga']= $this->Puspaga_model->getPuspagaById($id_konpus);

		$this->form_validation->set_rules('nik_pengadu', 'NIK pengadu', 'required');
		$this->form_validation->set_rules('tgl_konsul', 'Tanggal Konsultasi', 'required');
		$this->form_validation->set_rules('judul_konsul', 'Judul K0nsultasi', 'required');
		$this->form_validation->set_rules('perihal_konpus', 'Perihal Konsultasi PUSPAGA', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/navmenu.php', $data);
			$this->load->view('konsul_puspaga/edit', $data);
			$this->load->view('templates/footer.php');
		} else {
			
			$this->Puspaga_model->ubahDataKonPuspaga();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Konsul_puspaga');
		}
	}
}