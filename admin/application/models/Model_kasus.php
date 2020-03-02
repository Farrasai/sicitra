<?php


class Model_kasus extends CI_Model {
	public function getAllKasus ()
	{
		return $query = $this->db->get('jenis_kasus')->result_array();
	}

	public function tambahDataKasus()
	{
		$data = array(
        "nama_kasus" => $this->input->post('nama_kasus', true)
);
		$this->db->insert('jenis_kasus', $data);
	}

	public function hapusDataKasus($id_jenis)
	{
		$this->db->where('id_jenis', $id_admin);
		$this->db->delete('jenis_kasus');
	}

	public function getJenisByKode($id_jenis)
	{
		return $this->db->get_where('jenis_kasus', ['id_jenis' => $id_jenis])->row_array();
	}

	public function ubahDataKasus()
	{
		$data = [
        "nama_kasus" => $this->input->post('nama_kasus', true)
		];
		
		$this->db->where('id_jenis', $this->input->post('id'));
		$this->db->update('jenis_kasus', $data);
	}

	public function cariDataKasus()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_kasus', $keyword);
		return $this->db->get('jenis_kasus')->result_array();
	}
}
