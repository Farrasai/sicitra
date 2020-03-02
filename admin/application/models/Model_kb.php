<?php


class Model_kb extends CI_Model {
    public function getAllKB ()
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$this->db->order_by('id_konkb', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function getKBById($id_konkb)
	{
		$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$this->db->where('id_konkb',  $id_konkb);
		$query = $this->db->get_where();
        return $query->row_array();
}

	public function getDownloadById($id_konkb)
	{
		$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$this->db->where('id_konkb',  $id_konkb);
		$query = $this->db->get();
        return $query->result_array();
}

	public function jawabDataKonsul()
	{
		$data = [
        "jawaban" => $this->input->post('jawaban', true)
		];
		
		$this->db->where('id_konkb', $this->input->post('id'));
		$this->db->update('konsultasi_kb', $data);
	}
	public function cariDataKB()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$this->db->like('pengadu.nik_pengadu', $keyword);
		$this->db->or_like('tgl_konsul', $keyword);
		$this->db->or_like('username', $keyword);
		return $this->db->get()->result_array();
	}

	public function hitungJumlahAsset()
{   
    $query = $this->db->get('konsultasi_kb');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

    public function dataKB ($limit, $offset)
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$this->db->order_by('id_konkb', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function cetak()
    {
        $tgl1 = $this->input->post('tgl1', true);
        $tgl2 = $this->input->post('tgl2', true);
        $this->db->select('*');
        $this->db->from('konsultasi_kb');
        $this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
        $this->db->where("tgl_konsul between ('$tgl1') AND ('$tgl2')");
        $this->db->order_by('id_konkb', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
}
    
}