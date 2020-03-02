<?php

class Berita extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}
	
	
	public function Index($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'Berita/index';
		$config['total_rows'] = $this->Berita_model->JumlahDataKB();
		$config['total_rows'] = $this->Berita_model->JumlahDataPuspaga();
		$config["per_page"] = 4;
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
	    
		$data['judul'] = 'Halaman KB';
		$data['konsultasi_kb']= $this->Berita_model->getAllKB($config["per_page"], $offset);
				$data['konsultasi_puspaga']= $this->Berita_model->getAllPuspaga($config["per_page"], $offset);

		$data['judul'] = 'Menu Berita SICITRA';
		$this->load->view('templates/navmenu.php', $data);
		$this->load->view('berita/index', $data);
		$this->load->view('templates/footer.php');
	}
}