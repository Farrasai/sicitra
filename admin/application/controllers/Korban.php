<?php

class Korban Extends CI_Controller{
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
	    
	    $config['base_url'] = base_url() . 'Korban/page';
		$config['total_rows'] = $this->Model_korban->hitungJumlahAsset();
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
	    
		$data['judul'] = 'Halaman Korban';
		$data['korban']= $this->Model_korban->dataKorban($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['korban'] = $this->Model_pelaku->cariDataKorban();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('korban/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function page($offset=NULL)
	{
	    
	    $config['base_url'] = base_url() . 'Korban/page';
		$config['total_rows'] = $this->Model_korban->hitungJumlahAsset();
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
	    
		$data['judul'] = 'Halaman Korban';
		$data['korban']= $this->Model_korban->dataKorban($config["per_page"], $offset);
		if ($this->input->post('keyword')){
			$data['korban'] = $this->Model_pelaku->cariDataKorban();
		}
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('korban/index', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function detail($nik_korban)
	{
		$data['judul']='Detail Korban';
		$data['korban']= $this->Model_korban->getKorbanById($nik_korban);
		$this->load->view('templates_ubah/header', $data);
		$this->load->view('korban/detail', $data);
		$this->load->view('templates_ubah/footer');
	}

	public function edit($nik_korban)
	{
		$data['judul']='Form Edit Data Korban';
		$data['korban']= $this->Model_korban->getKorbanById($nik_korban);

		$this->form_validation->set_rules('nik_korban', 'nik_korban', 'required');
		$this->form_validation->set_rules('nama_korban', 'nama_korban', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tmpt_lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
		$this->form_validation->set_rules('jk', 'Jk', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('no_tlp', 'No_tlp', 'required');
		$this->form_validation->set_rules('status_kawin', 'Status_kawin', 'required');
		$this->form_validation->set_rules('difabel', 'Difabel', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates_ubah/header', $data);
			$this->load->view('korban/form_edit', $data);
			$this->load->view('templates_ubah/footer');
		} else {
			
			$this->Model_korban->ubahDataKorban();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('korban');
		}
	}

	public function cetak($nik_korban)
	{
        $pdf = new FPDF('l','mm','A3');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(390,7,'SISTEM INFORMASI PENGADUAN MASYARAKAT KABUPATEN CILACAP',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,6,'NIK Korban',1,0,'C');
        $pdf->Cell(60,6,'NAMA Korban',1,0,'C');
        $pdf->Cell(35,6,'Tempat Lahir',1,0,'C');
        $pdf->Cell(24,6,'Tanggal Lahir',1,0,'C');
        $pdf->Cell(25,6,'Jenis Kelamin',1,0,'C');
        $pdf->Cell(20,6,'Agama',1,0,'C');
        $pdf->Cell(60,6,'Alamat',1,0,'C');
        $pdf->Cell(30,6,'No Telepon',1,0,'C');
        $pdf->Cell(30,6,'Pendidikan',1,0,'C');
        $pdf->Cell(30,6,'Pekerjaan',1,0,'C');
        $pdf->Cell(30,6,'Status Kawin',1,0,'C');
        $pdf->Cell(20,6,'Difabel',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $aduan ['korban'] = $this->Model_korban->getKorbanById($nik_korban);
        foreach ($aduan as $row){
        $originalDate = $row['tgl_lahir'];
          $newDate = date("d-m-Y", strtotime($originalDate));
            $pdf->Cell(35,6,$row['nik_korban'],1,0);
            $pdf->Cell(60,6,$row['nama_korban'],1,0);
            $pdf->Cell(35,6,$row['tmpt_lahir'],1,0);
            $pdf->Cell(24,6,$newDate,1,0);
            $pdf->Cell(25,6,$row['jk'],1,0);
            $pdf->Cell(20,6,$row['agama'],1,0);
            $pdf->Cell(60,6,$row['alamat'],1,0);
            $pdf->Cell(30,6,$row['no_tlp'],1,0);
            $pdf->Cell(30,6,$row['pendidikan'],1,0);
            $pdf->Cell(30,6,$row['pekerjaan'],1,0);
            $pdf->Cell(30,6,$row['status_kawin'],1,0);
            $pdf->Cell(20,6,$row['difabel'],1,1);

        }
        $pdf->Output();
    }
}