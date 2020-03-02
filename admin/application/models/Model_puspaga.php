<?php


class Model_puspaga extends CI_Model {
    public function getAllPuspaga ()
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$this->db->order_by('id_konpus', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function getPuspagaById($id_konpus)
	{
		$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$this->db->where('id_konpus',  $id_konpus);
		$query = $this->db->get_where();
        return $query->row_array();
}
	
	public function getDownloadById($id_konpus)
	{
		$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$this->db->where('id_konpus',  $id_konpus);
		$query = $this->db->get();
        return $query->result_array();
}

	public function jawabDataKonsul()
	{
		$data = [
        "jawaban" => $this->input->post('jawaban', true)
		];
		
		$this->db->where('id_konpus', $this->input->post('id'));
		$this->db->update('konsultasi_puspaga', $data);
	}

	public function cariDataPuspaga()
	{
		$keyword = $this->input->post('keyword');
		$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$this->db->like('pengadu.nik_pengadu', $keyword);
		$this->db->or_like('username', $keyword);
		$this->db->or_like('tgl_konsul', $keyword);
		return $this->db->get()->result_array();
	}

	public function hitungJumlahAsset()
{   
    $query = $this->db->get('konsultasi_puspaga');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

    public function dataPuspaga ($limit, $offset)
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$this->db->order_by('id_konpus', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function cetak()
    {
        $tgl1 = $this->input->post('tgl1', true);
        $tgl2 = $this->input->post('tgl2', true);
        $this->db->select('*');
        $this->db->from('konsultasi_puspaga');
        $this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
        $this->db->where("tgl_konsul between ('$tgl1') AND ('$tgl2')");
        $this->db->order_by('id_konpus', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
}

}