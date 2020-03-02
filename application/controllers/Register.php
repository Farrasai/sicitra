<?php 

class Register extends CI_Controller{
    
    	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('templates/header');
	}
	
	public function daftar()
	{
		$config['upload_path']          = './admin/ktp/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);

	    $this->form_validation->set_rules('nik_pengadu', 'Nik_pengadu', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Pass', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jk', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_tlp', 'No_telp', 'required');

		$no_ktp = $this->input->post('nik_pengadu');
			$sql = $this->db->query("SELECT nik_pengadu FROM pengadu where nik_pengadu='$no_ktp'");
			$cek_nik = $sql->num_rows();
		if ($this->form_validation->run() == FALSE){

			redirect('register_gagal');

		} else if (! $this->upload->do_upload('gambar')) {

			redirect('register_gagal');

		}
		else if (! $cek_nik <= 0) {
				$this->session->set_flashdata('message', 'NIK Pengadu Sudah Terdaftar ');
			redirect('home');
		} 
		else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Register_model->tambahDataPengadu($image);
			redirect('Register_berhasil');
		}
	}

}