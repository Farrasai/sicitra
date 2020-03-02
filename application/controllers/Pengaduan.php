<?php

Class Pengaduan extends CI_Controller {

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
		$data['judul'] = 'Halaman Aduan CITRA';
		$data['pengaduan'] = $this->Pengaduan_model->getAllPengaduan();
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('pengaduan/index', $data);
		$this->load->view('templates/footer.php');
	}
	
	public function detail($id_aduan)
	{
		$data['judul']='Detail Aduan';
		$data['pengaduan']= $this->Pengaduan_model->getAduanById($id_aduan);
		$data['proses']= $this->Pengaduan_model->getProsesById($id_aduan);
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('pengaduan/detail', $data);
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

		$data['judul'] = 'Form Buat Aduan';

		$this->form_validation->set_rules('nik_pengadu', 'NIK Pengadu', 'required');
		$this->form_validation->set_rules('nik_korban', 'NIK Korban', 'required');
		$this->form_validation->set_rules('tgl_aduan', 'Tanggal Aduan', 'required');
		$this->form_validation->set_rules('id_kasus', 'Jenis Kasus', 'required');
		$this->form_validation->set_rules('judul_aduan', 'Judul Aduan', 'required');
		$this->form_validation->set_rules('perihal_aduan', 'Perihal Aduan', 'required');
		$this->form_validation->set_rules('status_aduan', 'Status Aduan', 'required');

        $data['jenis_kasus'] = $this->Pengaduan_model->getAllKasus();
        $data['pengadu']= $this->Pengadu_model->getNIKPengadu();
        $data['korban'] = $this->Pengadu_model->getAllKorbanByAduan();
        $data['aduan'] = $this->Pengadu_model->getNIKKorban();
        $no_ktp = $this->input->post('nik_korban');
			$sql = $this->db->query("SELECT nik_korban FROM korban where nik_korban='$no_ktp'");
			$cek_nik = $sql->num_rows();
		if ($this->form_validation->run() == FALSE ) {
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('pengaduan/tambah', $data);
		$this->load->view('templates/footer.php');
		} else if ( $cek_nik <= 0) {
				$this->session->set_flashdata('message', 'NIK Korban Belum Terdaftar ');
			redirect('pengaduan/tambah');

		} else if (! $this->upload->do_upload('lampiran') == 'null') {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Pengaduan_model->buatAduan($image);
			$this->session->set_flashdata('flash', 'Ditambahkan. Mohon Cek aduan secara berkala untuk melihat STATUS');
			redirect('pengaduan');
		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Pengaduan_model->buatAduan($image);
			$this->session->set_flashdata('flash', 'Ditambahkan. Mohon Cek aduan secara berkala untuk melihat STATUS');
			redirect('pengaduan');
		}
	}
	
	public function edit($id_aduan)
	{
	    $data['judul'] = 'Form Edit Aduan';	
		$data['pengaduan']= $this->Pengaduan_model->getAduanByNIK($id_aduan);
		$data['jenis_kasus'] = $this->Pengaduan_model->getAllKasus();
		$data['korban'] = $this->Pengadu_model->getAllKorbanByAduan();


		$this->form_validation->set_rules('nik_pengadu', 'NIK Pengadu', 'required');
		$this->form_validation->set_rules('nik_korban', 'NIK Korban', 'required');
		$this->form_validation->set_rules('tgl_aduan', 'Tanggal Aduan', 'required');
		$this->form_validation->set_rules('id_kasus', 'Jenis Kasus', 'required');
		$this->form_validation->set_rules('judul_aduan', 'Judul Aduan', 'required');
		$this->form_validation->set_rules('perihal_aduan', 'Perihal Aduan', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/navmenu.php', $data);
			$this->load->view('pengaduan/edit', $data);
			$this->load->view('templates/footer.php');
		} else {
			
			$this->Pengaduan_model->ubahDataAduan();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('pengaduan');
		}
	}
	
	public function korban()
	{
		$this->form_validation->set_rules('nik_korban', 'NIK Korban', 'required');
		$this->form_validation->set_rules('nama_korban', 'Nama Korban', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('no_tlp', 'No Telepon', 'required');
		$this->form_validation->set_rules('status_kawin', 'Status Kawin', 'required');
		$this->form_validation->set_rules('difabel', 'Difabel', 'required');

		$data['pengadu']= $this->Pengadu_model->getNIKPengadu();
		$no_ktp = $this->input->post('nik_korban');
			$sql = $this->db->query("SELECT nik_korban FROM korban where nik_korban='$no_ktp'");
			$cek_nik = $sql->num_rows();
		if ($this->form_validation->run() == FALSE ) {
		redirect('pengaduan/tambah');

		}else if (! $cek_nik <= 0) {
				$this->session->set_flashdata('alert', 'NIK Korban Sudah Terdaftar ');
			redirect('pengaduan/tambah');
		}else {
			$this->Pengaduan_model->tambahDataKorban();
			$this->session->set_flashdata('pesan', 'Ditambah');
			redirect('pengaduan/tambah');
		}
	}
}

