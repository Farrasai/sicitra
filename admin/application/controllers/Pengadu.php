<?php

class Pengadu Extends CI_Controller{
    
    public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login_admin"));
		}
	}

	public function index($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'pengadu/page';
		$config['total_rows'] = $this->Model_pengadu->hitungJumlahAsset();
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
	    
		$data['judul'] = 'Halaman Pengadu';
		$data['pengadu']= $this->Model_pengadu->getAllPengadu($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['pengadu'] = $this->Model_pengadu->cariDataPengadu();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('pengadu/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function page($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'pengadu/page';
		$config['total_rows'] = $this->Model_pengadu->hitungJumlahAsset();
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
	    
		$data['judul'] = 'Halaman Pengadu';
		$data['pengadu']= $this->Model_pengadu->getAllPengadu($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['pengadu'] = $this->Model_pengadu->cariDataPengadu();
		}
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('pengadu/index', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function detail($nik_pengadu)
	{
		$data['judul']='Detail Pengadu';
		$data['pengadu']= $this->Model_pengadu->getPengaduById($nik_pengadu);
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('pengadu/detail', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function cetak($nik_pengadu)
	{
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(290,7,'SISTEM INFORMASI PENGADUAN MASYARAKAT KABUPATEN CILACAP',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,6,'NIK PENGADU',1,0,'C');
        $pdf->Cell(70,6,'NAMA PENGADU',1,0,'C');
        $pdf->Cell(40,6,'JENIS KELAMIN',1,0,'C');
        $pdf->Cell(35,6,'NO. TELEPON',1,0,'C');
        $pdf->Cell(90,6,'ALAMAT',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pengadu ['pengadu'] = $this->Model_pengadu->getPengaduById($nik_pengadu);
        foreach ($pengadu as $row){
            $pdf->Cell(35,6,$row['nik_pengadu'],1,0);
            $pdf->Cell(70,6,$row['nama'],1,0);
            $pdf->Cell(40,6,$row['jk'],1,0);
            $pdf->Cell(35,6,$row['no_tlp'],1,0);
            $pdf->Cell(90,6,$row['alamat'],1,1);

        }
        $pdf->Output();
    }

    public function cetakpengadu()
	{
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(290,7,'SISTEM INFORMASI PENGADUAN MASYARAKAT KABUPATEN CILACAP',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,6,'NIK PENGADU',1,0,'C');
        $pdf->Cell(70,6,'NAMA PENGADU',1,0,'C');
        $pdf->Cell(40,6,'JENIS KELAMIN',1,0,'C');
        $pdf->Cell(35,6,'NO. TELEPON',1,0,'C');
        $pdf->Cell(90,6,'ALAMAT',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pengadu = $this->Model_pengadu->cetakPengadu();
        foreach ($pengadu as $row){
            $pdf->Cell(35,6,$row['nik_pengadu'],1,0);
            $pdf->Cell(70,6,$row['nama'],1,0);
            $pdf->Cell(40,6,$row['jk'],1,0);
            $pdf->Cell(35,6,$row['no_tlp'],1,0);
            $pdf->Cell(90,6,$row['alamat'],1,1);

        }
        $pdf->Output();
    }
	
}