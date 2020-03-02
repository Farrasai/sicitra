<?php

class Pelaku Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login_admin"));
		}
		$this->load->library('form_validation');
	}

	public function index($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'pelaku/page';
		$config['total_rows'] = $this->Model_pelaku->hitungJumlahAsset();
		$config["per_page"] = 25;
		$config["uri_segment"] = 3;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['offset'] = $offset;
		
		// Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);
		$data["links"] = $this->pagination->create_links();
	    
		$data['judul'] = 'Halaman Pelaku';
		$data['pelaku']= $this->Model_pelaku->dataPelaku($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['pelaku'] = $this->Model_pelaku->cariDataPelaku();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('pelaku/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function page($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'pelaku/page';
		$config['total_rows'] = $this->Model_pelaku->hitungJumlahAsset();
		$config["per_page"] = 25;
		$config["uri_segment"] = 3;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['offset'] = $offset;
		
		// Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);
		$data["links"] = $this->pagination->create_links();
	    
		$data['judul'] = 'Halaman Pelaku';
		$data['pelaku']= $this->Model_pelaku->dataPelaku($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['pelaku'] = $this->Model_pelaku->cariDataPelaku();
		}
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('pelaku/index', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nik_pelaku', 'Nik_pelaku', 'required');
		$this->form_validation->set_rules('id_aduan', 'Id_aduan', 'required');
		$this->form_validation->set_rules('nama_pelaku', 'Nama_pelaku', 'required');
		$this->form_validation->set_rules('tmpt_lahir_pelaku', 'Tmpt_lahir_pelaku', 'required');
		$this->form_validation->set_rules('tgl_lahir_pelaku', 'Tgl_lahir_pelaku', 'required');
		$this->form_validation->set_rules('jk_pelaku', 'Jk_pelaku', 'required');
		$this->form_validation->set_rules('usia_pelaku', 'Usia_pelaku', 'required');
		$this->form_validation->set_rules('agama_pelaku', 'Agama_pelaku', 'required');
		$this->form_validation->set_rules('alamat_pelaku', 'Alamat_pelaku', 'required');
		$this->form_validation->set_rules('pendidikan_pelaku', 'Pendidikan_pelaku', 'required');
		$this->form_validation->set_rules('pekerjaan_pelaku', 'Pekerjaan_pelaku', 'required');
		$this->form_validation->set_rules('no_tlp_pelaku', 'No_tlp_pelaku', 'required');
		$this->form_validation->set_rules('status_kawin_pelaku', 'Status_kawin_pelaku', 'required');
		$this->form_validation->set_rules('difabel_pelaku', 'Difabel_pelaku', 'required');
		$data['judul']='Form Tambah Data Pelaku';
		$data['aduan']= $this->Model_pelaku->getAllKorbanByAduan();
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_tambah/header', $data);
			$this->load->view('pelaku/form_tambah', $data);
			$this->load->view('templates_tambah/footer');
		} else {
			
			$this->Model_pelaku->tambahDataPelaku();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('pelaku');
		}
	}

	public function detail($nik_pelaku)
	{
		$data['judul']='Detail Pelaku';
		$data['pelaku']= $this->Model_pelaku->getPelakuById($nik_pelaku);
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('pelaku/detail', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function edit($nik_pelaku)
	{
		$data['judul']='Form Edit Data Pelaku';
		$data['pelaku']= $this->Model_pelaku->getPelakuById($nik_pelaku);

		$this->form_validation->set_rules('nik_pelaku', 'Nik_pelaku', 'required');
		$this->form_validation->set_rules('id_aduan', 'Id_aduan', 'required');
		$this->form_validation->set_rules('nama_pelaku', 'Nama_pelaku', 'required');
		$this->form_validation->set_rules('tmpt_lahir_pelaku', 'Tmpt_lahir_pelaku', 'required');
		$this->form_validation->set_rules('tgl_lahir_pelaku', 'Tgl_lahir_pelaku', 'required');
		$this->form_validation->set_rules('jk_pelaku', 'Jk_pelaku', 'required');
		$this->form_validation->set_rules('usia_pelaku', 'Usia_pelaku', 'required');
		$this->form_validation->set_rules('agama_pelaku', 'Agama_pelaku', 'required');
		$this->form_validation->set_rules('alamat_pelaku', 'Alamat_pelaku', 'required');
		$this->form_validation->set_rules('pendidikan_pelaku', 'Pendidikan_pelaku', 'required');
		$this->form_validation->set_rules('pekerjaan_pelaku', 'Pekerjaan_pelaku', 'required');
		$this->form_validation->set_rules('no_tlp_pelaku', 'No_tlp_pelaku', 'required');
		$this->form_validation->set_rules('status_kawin_pelaku', 'Status_kawin_pelaku', 'required');
		$this->form_validation->set_rules('difabel_pelaku', 'Difabel_pelaku', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_ubah/header', $data);
			$this->load->view('pelaku/form_edit', $data);
			$this->load->view('templates_ubah/footer');
		} else {
			
			$this->Model_pelaku->ubahDataPelaku();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('pelaku');
		}
	}
}