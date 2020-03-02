<?php


class Model_pelaku extends CI_Model {
	public function getAllPelaku ()
	{
		$this->db->select('*');
		$this->db->from('pelaku');
		$this->db->join('aduan', 'aduan.id_aduan = pelaku.id_aduan');
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambahDataPelaku()
	{
		$data = array(
		"nik_pelaku" => $this->input->post('nik_pelaku', true),
        "id_aduan" => $this->input->post('id_aduan', true),
        "nama_pelaku" => $this->input->post('nama_pelaku', true),
        "tmpt_lahir_pelaku" => $this->input->post('tmpt_lahir_pelaku', true),
        "tgl_lahir_pelaku" => $this->input->post('tgl_lahir_pelaku', true),
        "jk_pelaku" => $this->input->post('jk_pelaku', true),
        "usia_pelaku" => $this->input->post('usia_pelaku', true),
        "agama_pelaku" => $this->input->post('agama_pelaku', true),
        "alamat_pelaku" => $this->input->post('alamat_pelaku', true),
        "pendidikan_pelaku" => $this->input->post('pendidikan_pelaku', true),
        "pekerjaan_pelaku" => $this->input->post('pekerjaan_pelaku', true),
        "no_tlp_pelaku" => $this->input->post('no_tlp_pelaku', true),
        "status_kawin_pelaku" => $this->input->post('status_kawin_pelaku', true),
        "difabel_pelaku" => $this->input->post('difabel_pelaku', true)
);
		$this->db->insert('pelaku', $data);
	}

	public function getPelakuById($nik_pelaku)
	{
		$this->db->select('*');
		$this->db->from('pelaku');
		$this->db->join('aduan', 'aduan.id_aduan = pelaku.id_aduan');
		$this->db->where('nik_pelaku',  $nik_pelaku);
		$query = $this->db->get_where();
        return $query->row_array();
}
	public function cariDataPelaku()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_pelaku', $keyword);
		$this->db->or_like('jk_pelaku', $keyword);
		$this->db->or_like('agama_pelaku', $keyword);
		$this->db->or_like('nama_pelaku', $keyword);
		$this->db->or_like('usia_pelaku', $keyword);
		$this->db->or_like('nik_pelaku', $keyword);
		return $this->db->get('pelaku')->result_array();
	}

	public function ubahDataPelaku()
	{
		$data = [
		"nik_pelaku" => $this->input->post('nik_pelaku', true),
        "id_aduan" => $this->input->post('id_aduan', true),
        "nama_pelaku" => $this->input->post('nama_pelaku', true),
        "tmpt_lahir_pelaku" => $this->input->post('tmpt_lahir_pelaku', true),
        "tgl_lahir_pelaku" => $this->input->post('tgl_lahir_pelaku', true),
        "jk_pelaku" => $this->input->post('jk_pelaku', true),
        "usia_pelaku" => $this->input->post('usia_pelaku', true),
        "agama_pelaku" => $this->input->post('agama_pelaku', true),
        "alamat_pelaku" => $this->input->post('alamat_pelaku', true),
        "pendidikan_pelaku" => $this->input->post('pendidikan_pelaku', true),
        "pekerjaan_pelaku" => $this->input->post('pekerjaan_pelaku', true),
        "no_tlp_pelaku" => $this->input->post('no_tlp_pelaku', true),
        "status_kawin_pelaku" => $this->input->post('status_kawin_pelaku', true),
        "difabel_pelaku" => $this->input->post('difabel_pelaku', true)
		];
		
		$this->db->where('nik_pelaku', $this->input->post('nik_pelaku'));
		$this->db->update('pelaku', $data);
	}

	public function getAllKorbanByAduan()
	{
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$this->db->group_by('aduan.nik_korban');
		$this->db->order_by('id_aduan', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function hitungJumlahAsset()
{   
    $query = $this->db->get('pelaku');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
	
	public function dataPelaku ($limit, $offset)
    {
    	$this->db->select('*');
		$this->db->from('pelaku');
		$this->db->join('aduan', 'aduan.id_aduan = pelaku.id_aduan');
		$this->db->order_by('nik_pelaku', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
    }
}