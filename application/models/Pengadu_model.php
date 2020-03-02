<?php

class Pengadu_model extends CI_model {
    public function getNIkPengadu ()
	{
		$this->db->select('*');
		$this->db->from('pengadu');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
		$query = $this->db->get_where();
        return $query->row_array();
	}

	
	
	public function ubahDataPengadu($image)
	{
		$data = [
		"nik_pengadu" => $this->input->post('nik_pengadu', true),
        "username" => $this->input->post('username', true),
        "pass" => md5($this->input->post('pass', true)),
        "nama" => $this->input->post('nama', true),
        "jk" => $this->input->post('jk', true),
        "alamat" => $this->input->post('alamat', true),
        "no_tlp" => $this->input->post('no_tlp', true),
        "gambar" => $image

		];
		
		$this->db->where('nik_pengadu', $this->input->post('nik'));
		$this->db->update('pengadu', $data);

		$data = [
        "tmpt_lahir" => $this->input->post('tmpt_lahir', true),
        "tgl_lahir" => $this->input->post('tgl_lahir', true),
        "usia" => $this->input->post('usia', true),
        "agama" => $this->input->post('agama', true),
        "pendidikan" => $this->input->post('pendidikan', true),
        "pekerjaan" => $this->input->post('pekerjaan', true),
        "status_kawin" => $this->input->post('status_kawin', true),
        "difabel" => $this->input->post('difabel', true)
];
		$this->db->where('nik_korban', $this->input->post('nik'));
		$this->db->update('korban', $data);
	}

	public function getAllKorbanByAduan()
	{
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
		$this->db->group_by('aduan.nik_korban');
		$query = $this->db->get();
		return $query->result_array();
	}

public function getNIKKorban()
	{
		$this->db->select('*');
		$this->db->from('aduan');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = aduan.nik_pengadu');
		$this->db->join('korban', 'korban.nik_korban = aduan.nik_korban');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
		$query = $this->db->get_where();
		return $query->row_array();
	}
}