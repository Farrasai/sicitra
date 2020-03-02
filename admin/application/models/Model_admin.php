<?php


class Model_admin extends CI_Model {
	public function getAllAdmin ()
	{
		return $query = $this->db->get('admin')->result_array();
	}

	public function tambahDataAdmin()
	{
		$data = array(
        "username" => $this->input->post('username', true),
        "pass" => $this->input->post('password', true)
);
		$this->db->insert('admin', $data);
	}

	public function hapusDataAdmin($id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		$this->db->delete('admin');
	}

	public function getAdminByKode($id_admin)
	{
		return $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
	}

	public function ubahDataAdmin()
	{
		$data = [
		"id_admin" => $this->input->post('id_admin', true),
        "username" => $this->input->post('username', true),
        "pass" => $this->input->post('password', true)
		];
		
		$this->db->where('id_admin', $this->input->post('id_admin'));
		$this->db->update('admin', $data);
	}

	public function cariDataAdmin()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('username', $keyword);
		return $this->db->get('admin')->result_array();
	}
}
