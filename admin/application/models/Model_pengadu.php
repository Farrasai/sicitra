<?php


class Model_pengadu extends CI_Model {
	public function getAllPengadu ($limit, $offset)
	{
	    $this->db->select('*');
		$this->db->from('pengadu');
		$this->db->order_by('tgl_daftar', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getPengaduById($nik_pengadu)
	{
		$this->db->select('*');
		$this->db->from('pengadu');
		$this->db->where('nik_pengadu',  $nik_pengadu);
		$query = $this->db->get_where();
        return $query->row_array();
}

	public function cariDataPengadu()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->select('*');
		$this->db->from('pengadu');
		$this->db->like('username', $keyword);
		$this->db->or_like('jk', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('nik_pengadu', $keyword);
		return $this->db->get()->result_array();
	}
	
	public function hitungJumlahAsset()
{   
    $query = $this->db->get('pengadu');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}


	public function cetakPengadu()
    {
        $this->db->select('*');
		$this->db->from('pengadu');
		$this->db->order_by('nik_pengadu', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
}
}