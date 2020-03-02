<?php


class Berita_model extends CI_Model {
    public function getAllKB ($limit, $offset)
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$this->db->order_by('id_konkb', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
    }
    
    public function getAllPuspaga ($limit, $offset)
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$this->db->order_by('id_konpus', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
    }
    
    public function JumlahDataKB()
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

    public function JumlahDataPuspaga()
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

}