<?php

class Aduan Extends CI_Controller{
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
	    
	    $config['base_url'] = base_url() . 'aduan/page';
		$config['total_rows'] = $this->Model_aduan->hitungJumlahAsset();
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
	    
		$data['judul'] = 'Halaman Pengaduan';
		$data['jenis_kasus'] = $this->Model_aduan->getAllKasus();
		$data['aduan']= $this->Model_aduan->dataAduan($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['aduan'] = $this->Model_aduan->cariDataAduan();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('aduan/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function page($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'aduan/page';
		$config['total_rows'] = $this->Model_aduan->hitungJumlahAsset();
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
	    
		$data['judul'] = 'Halaman Pengaduan';
		$data['jenis_kasus'] = $this->Model_aduan->getAllKasus();
		$data['aduan']= $this->Model_aduan->dataAduan($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['aduan'] = $this->Model_aduan->cariDataAduan();
		}
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('aduan/index', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function detail($id_aduan)
	{
		$data['judul']='Detail Aduan';
		$data['aduan']= $this->Model_aduan->getAduanById($id_aduan);
		$data['proses']= $this->Model_aduan->getProsesById($id_aduan);
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('aduan/detail', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function status($id_aduan)
	{
		$data['judul']='Status Aduan';
		$data['aduan']= $this->Model_aduan->getAduanById($id_aduan);
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_ubah/header', $data);
			$this->load->view('aduan/status', $data);
			$this->load->view('templates_ubah/footer');
		} else {		
			$this->Model_aduan->ubahStatus();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('aduan');
		}
	}


	public function tambahproses()
	{
		
		$this->form_validation->set_rules('id_aduan', 'Id_aduan', 'required');
		$this->form_validation->set_rules('tgl_proses', 'Tgl_proses', 'required');
		$this->form_validation->set_rules('proses', 'Proses', 'required');
		$data['aduan']= $this->Model_aduan->getAduanById($id_aduan);
		if ($this->form_validation->run() == FALSE ) {
		redirect('aduan/detail');

		}
		else {
			$this->Model_aduan->tambahDataProses();
			$this->session->set_flashdata('data', 'Ditambah');	
		}
		redirect('aduan');
	}

	
	
	public function cetak($id_aduan)
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
        $pdf->Cell(25,6,'NO. ADUAN',1,0,'C');
        $pdf->Cell(35,6,'TANGGAL ADUAN',1,0,'C');
        $pdf->Cell(25,6,'JENIS KASUS',1,0,'C');
        $pdf->Cell(35,6,'NIK PENGADU',1,0,'C');
        $pdf->Cell(60,6,'NAMA PENGADU',1,0,'C');
        $pdf->Cell(35,6,'NIK KORBAN',1,0,'C');
        $pdf->Cell(60,6,'NAMA KORBAN',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $aduan ['aduan'] = $this->Model_aduan->getAduanById($id_aduan);
        foreach ($aduan as $row){
        $originalDate = $row['tgl_aduan'];
          $newDate = date("d-m-Y", strtotime($originalDate));
        	$pdf->Cell(25,6,$row['id_aduan'],1,0);
            $pdf->Cell(35,6,$newDate,1,0);
            $pdf->Cell(25,6,$row['nama_kasus'],1,0);
            $pdf->Cell(35,6,$row['nik_pengadu'],1,0);
            $pdf->Cell(60,6,$row['nama'],1,0);
            $pdf->Cell(35,6,$row['nik_korban'],1,0);
            $pdf->Cell(60,6,$row['nama_korban'],1,1);

        }
        $pdf->Output();
    }


    public function cetakaduan()
    {
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 
        $pdf->Cell(290,7,'SISTEM INFORMASI PENGADUAN MASYARAKAT KABUPATEN CILACAP',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,6,'NO. ADUAN',1,0,'C');
        $pdf->Cell(39,6,'TANGGAL ADUAN',1,0,'C');
        $pdf->Cell(35,6,'JENIS KASUS',1,0,'C');
        $pdf->Cell(35,6,'NIK PENGADU',1,0,'C');
        $pdf->Cell(55,6,'NAMA PENGADU',1,0,'C');
        $pdf->Cell(70,6,'JUDUL ADUAN',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $aduan  = $this->Model_aduan->cetakAduan();
        foreach ($aduan as $row){
        $originalDate = $row['tgl_aduan'];
          $newDate = date("d-m-Y", strtotime($originalDate));
        	$pdf->Cell(25,6,$row['id_aduan'],1,0);
            $pdf->Cell(39,6,$newDate,1,0);
            $pdf->Cell(35,6,$row['nama_kasus'],1,0);
            $pdf->Cell(35,6,$row['nik_pengadu'],1,0);
            $pdf->Cell(55,6,$row['nama'],1,0);
            $pdf->Cell(70,6,$row['judul_aduan'],1,1);
        }
        $pdf->Output();
    }

    public function lakukan_download($id_aduan=null){	
    	$aduan  = $this->Model_aduan->getDownloadById($id_aduan);	
    	foreach ((array)$aduan as $adu){
    	$file = 'lampiran/'.$adu['lampiran_aduan'];	
		force_download($file,NULL);
	}
	}

}