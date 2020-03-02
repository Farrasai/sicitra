<?php

class Pengadu extends CI_Controller {
    
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
		$data['judul'] = 'Halaman Profil';
		$data['pengadu']= $this->Pengadu_model->getNIKPengadu();
		$data['korbann']= $this->Pengadu_model->getNIKKorban();
		$data['total_aduan'] = $this->Pengaduan_model->hitungJumlahAsset();
		$data['total_kb'] = $this->KB_model->hitungJumlahAsset();
		$data['total_puspaga'] = $this->Puspaga_model->hitungJumlahAsset();
		$data['korban'] = $this->Pengadu_model->getAllKorbanByAduan();
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('pengadu/index', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit()
	{
		$config['upload_path']          = './admin/ktp/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_tlp', 'No Telepon', 'required');
		$data['pengadu']= $this->Pengadu_model->getNIKPengadu();
		if ($this->form_validation->run() == FALSE){
			redirect('pengadu');	

		} else if (! $this->upload->do_upload('gambar')) {

			redirect('pengadu');

		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Pengadu_model->ubahDataPengadu($image);
			redirect('pengadu');
		}
	}
}
