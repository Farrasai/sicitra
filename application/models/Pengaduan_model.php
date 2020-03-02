<?php

class Pengaduan_model extends CI_model {

	public function getAllPengaduan()
	{
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
		$this->db->order_by('id_aduan', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getAduanByNIK($id_aduan)
	{
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->join('jenis_kasus', 'jenis_kasus.id_jenis = aduan.id_jenis');
		$this->db->where('aduan.id_aduan',  $id_aduan);
		$query = $this->db->get_where();
        return $query->row_array();
}
	
	public function getAduanById($id_aduan)
	{
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->join('jenis_kasus', 'jenis_kasus.id_jenis = aduan.id_jenis');
		$this->db->where('aduan.id_aduan',  $id_aduan);
		$query = $this->db->get_where();
        return $query->row_array();
}


    public function ubahDataAduan()
	{
		$data = [
        "nik_pengadu" => $this->input->post('nik_pengadu', true),
					"nik_korban" => $this->input->post('nik_korban', true),
					"tgl_aduan" => $this->input->post('tgl_aduan', true),
					"id_jenis" => $this->input->post('id_kasus', true),
					"judul_aduan" => $this->input->post('judul_aduan', true),
					"perihal_aduan" => $this->input->post('perihal_aduan', true),
					"status_aduan" => $this->input->post('status_aduan', true)
		];
		
		$this->db->where('id_aduan', $this->input->post('id'));
		$this->db->update('aduan', $data);
	}
	
	public function getAllKasus()
	{
		return $query = $this->db->get('jenis_kasus')->result_array();
	}

	public function buatAduan($image,$params=null)
	{
		$data = array(
					"id_admin" => $this->input->post('id_admin', true),
					"nik_pengadu" => $this->input->post('nik_pengadu', true),
					"nik_korban" => $this->input->post('nik_korban', true),
					"tgl_aduan" => $this->input->post('tgl_aduan', true),
					"id_jenis" => $this->input->post('id_kasus', true),
					"judul_aduan" => $this->input->post('judul_aduan', true),
					"perihal_aduan" => $this->input->post('perihal_aduan', true),
					"status_aduan" => $this->input->post('status_aduan', true),
					"lampiran_aduan" => $image

	);

		$this->db->insert('aduan', $data);
		
		$nik_pengadu = $_POST['nik_pengadu'];
		$judul_aduan = $_POST['judul_aduan'];


		$message ='Aduan Masuk dari : '.$nik_pengadu.' %0A'.$judul_aduan.' %0A'.'Klik Link berikut untuk menjawab pertanyaan'.' %0A'.'http://sicitra.com/admin/aduan'.'';

		$api = 'https://api.telegram.org/bot694725514:AAGceSzN3H8ahH--E8EPIf0pLocIC74JxhI/sendMessage?chat_id=613161658&text='.$message.'';


		$ch = curl_init($api);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
	}
	
	public function tambahDataKorban()
	{
		$data = array(
		"nik_korban" => $this->input->post('nik_korban', true),
        "nama_korban" => $this->input->post('nama_korban', true),
        "tmpt_lahir" => $this->input->post('tmpt_lahir', true),
        "tgl_lahir" => $this->input->post('tgl_lahir', true),
        "jk" => $this->input->post('jk', true),
        "usia" => $this->input->post('usia', true),
        "agama" => $this->input->post('agama', true),
        "alamat" => $this->input->post('alamat', true),
        "pendidikan" => $this->input->post('pendidikan', true),
        "pekerjaan" => $this->input->post('pekerjaan', true),
        "no_tlp" => $this->input->post('no_tlp', true),
        "status_kawin" => $this->input->post('status_kawin', true),
        "difabel" => $this->input->post('difabel', true)
);
		$this->db->insert('korban', $data);
	}

	public function getProsesById($id_aduan)
	{
		$this->db->select('*');
		$this->db->from('proses');
		$this->db->join('aduan', 'aduan.id_aduan = proses.id_aduan');
		$this->db->where('proses.id_aduan',  $id_aduan);
		$query = $this->db->get();
        return $query->result_array();
}
	
	public function hitungJumlahAsset()
{   
    $this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
    $query = $this->db->get();
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
}