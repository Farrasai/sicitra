<?php


class Model_korban extends CI_Model {
	public function getAllKorban ()
	{
		return $query = $this->db->get('korban')->result_array();
		$this->db->limit(10);
	}
	public function getKorbanById($nik_korban)
	{
		$this->db->select('*');
		$this->db->from('korban');
		$this->db->where('nik_korban',  $nik_korban);
		$query = $this->db->get_where();
        return $query->row_array();
}
	public function cariDataKorban()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nik_korban', $keyword);
		$this->db->or_like('nama_korban', $keyword);
		$this->db->or_like('jk', $keyword);
		$this->db->or_like('agama', $keyword);
		$this->db->or_like('usia', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get('korban')->result_array();
	}


	public function ubahDataKorban()
	{
		$data = [
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
		];
		
		$this->db->where('nik_korban', $this->input->post('nik_korban'));
		$this->db->update('korban', $data);
	}
	
	public function hitungJumlahAsset()
{   
    $query = $this->db->get('korban');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
	
	public function dataKorban ($limit, $offset)
    {
    	$this->db->select('*');
		$this->db->from('korban');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
    }
}