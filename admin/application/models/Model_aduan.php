<?php


class Model_aduan extends CI_Model {
    public function getAllAduan ()
    {
        $this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->join('jenis_kasus', 'jenis_kasus.id_jenis = aduan.id_jenis');
		$this->db->order_by('id_aduan', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
    }


    public function tambahDataProses()
	{
		$data = array(
        "id_aduan" => $this->input->post('id_aduan', true),
        "tgl_proses" => $this->input->post('tgl_proses', true),
        "detail_proses" => $this->input->post('proses', true)
);
		$this->db->insert('proses', $data);
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

	public function getProsesById($id_aduan)
	{
		$this->db->select('*');
		$this->db->from('proses');
		$this->db->join('aduan', 'aduan.id_aduan = proses.id_aduan');
		$this->db->where('proses.id_aduan',  $id_aduan);
		$query = $this->db->get();
        return $query->result_array();
}



	public function getDownloadById($id_aduan)
	{
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->join('jenis_kasus', 'jenis_kasus.id_jenis = aduan.id_jenis');
		$this->db->where('id_aduan',  $id_aduan);
		$query = $this->db->get();
        return $query->result_array();
}

	public function cariDataAduan()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->join('jenis_kasus', 'jenis_kasus.id_jenis = aduan.id_jenis');
		$this->db->like('nama_kasus', $keyword);
		$this->db->or_like('aduan.nik_pengadu', $keyword);
		$this->db->or_like('username', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('tgl_aduan', $keyword);
		$this->db->or_like('usia', $keyword);
		$this->db->or_like('status_aduan', $keyword);
		return $this->db->get()->result_array();
	}

	public function getAllKasus()
	{
		return $query = $this->db->get('jenis_kasus')->result_array();
	}

	public function ubahStatus()
	{
		$data = [
        "status_aduan" => $this->input->post('status', true)
		];
		
		$this->db->where('id_aduan', $this->input->post('id'));
		$this->db->update('aduan', $data);
	}

	public function hitungJumlahAsset()
{   
    $query = $this->db->get('aduan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function dataAduan ($limit, $offset)
    {
    	$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->join('jenis_kasus', 'jenis_kasus.id_jenis = aduan.id_jenis');
		$this->db->order_by('id_aduan', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function cetakAduan()
    {
    	$tgl1 = $this->input->post('tgl1', true);	
        $tgl2 = $this->input->post('tgl2', true);
        $jenis = $this->input->post('id_kasus', true);
        $status = 'Selesai';
        $this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->join('jenis_kasus', 'jenis_kasus.id_jenis = aduan.id_jenis');
		$this->db->where('jenis_kasus.id_jenis',$jenis);
		$this->db->where('aduan.status_aduan',$status);
		$this->db->where("tgl_aduan between ('$tgl1') AND ('$tgl2')");
		$this->db->order_by('id_aduan', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
}
}