<?php

class Konsul_KB Extends CI_Controller{
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
	    
	    $config['base_url'] = base_url() . 'Konsul_KB/page';
		$config['total_rows'] = $this->Model_kb->hitungJumlahAsset();
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
	    
		$data['judul'] = 'Halaman KB';
		$data['konsultasi_kb']= $this->Model_kb->dataKB($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['konsultasi_kb'] = $this->Model_kb->cariDataKB();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('konsul_kb/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function page($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'Konsul_KB/page';
		$config['total_rows'] = $this->Model_kb->hitungJumlahAsset();
		$config["per_page"] = 25;
		$config["uri_segment"] = 3;
		$config['num_links'] = 3;
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
		$data['konsultasi_kb']= $this->Model_kb->dataKB($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['konsultasi_kb'] = $this->Model_kb->cariDataKB();
		}
			$this->load->view('templates_ubah/header', $data);
			$this->load->view('konsul_kb/index', $data);
			$this->load->view('templates_ubah/footer');
	}
	
	
	public function detail($id_konkb)
	{
		$data['judul']='Detail Puspaga';
		$data['konsultasi_kb']= $this->Model_kb->getKBById($id_konkb);
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('konsul_kb/detail', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function jawab($id_konkb)
	{
		$data['judul']='Form Jawab Konsultasi Puspaga';
		$data['konsultasi_kb']= $this->Model_kb->getKBById($id_konkb);

		$this->form_validation->set_rules('jawaban', 'Jawaban', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_ubah/header', $data);
			$this->load->view('konsul_kb/form_jawab', $data);
			$this->load->view('templates_ubah/footer');
		} else {
			
			$this->Model_kb->jawabDataKonsul();
			$this->session->set_flashdata('flash', 'DiJawab');
			redirect('Konsul_KB');
		}
	}

	public function cetak()
    {
        $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 
        $pdf->Cell(190,7,'SISTEM INFORMASI PENGADUAN MASYARAKAT KABUPATEN CILACAP',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NO. KONSUL',1,0,'C');
        $pdf->Cell(39,6,'TANGGAL KONSUL',1,0,'C');
        $pdf->Cell(35,6,'NIK PENGADU',1,0,'C');
        $pdf->Cell(70,6,'NAMA PENGADU',1,0,'C');
        $pdf->Cell(45,6,'Judul Konsultasi',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $konkb  = $this->Model_kb->cetak();
        foreach ($konkb as $row){
        	$pdf->Cell(20,6,$row['id_konkb'],1,0);
            $pdf->Cell(39,6,$row['tgl_konsul'],1,0);
            $pdf->Cell(35,6,$row['nik_pengadu'],1,0);
            $pdf->Cell(70,6,$row['nama'],1,0);
            $pdf->Cell(45,6,$row['judul_konsul'],1,1);
        }
        $pdf->Output();
    }

    public function lakukan_download($id_konkb=null){	
    	$konkb  = $this->Model_kb->getDownloadById($id_konkb);	
    	foreach ((array)$konkb as $kb){
    	$file = 'lampiran/'.$kb['lampiran_kb'];	
		force_download($file,NULL);
	}
	}

}