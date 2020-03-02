<?php 

class Register_model extends CI_Model{
    
    public function tambahDataPengadu($image)
	{
		$data = array(
        "nik_pengadu" => $this->input->post('nik_pengadu', true),
        "username" => $this->input->post('username', true),
        "pass" => md5($this->input->post('pass', true)),
        "nama" => $this->input->post('nama', true),
        "jk" => $this->input->post('jk', true),
        "alamat" => $this->input->post('alamat', true),
        "no_tlp" => $this->input->post('no_tlp', true),
        "tgl_daftar" => $this->input->post('tgl_daftar', true),
        "gambar" => $image
);
		$this->db->insert('pengadu', $data);

        $data = array(
        "nik_korban" => $this->input->post('nik_pengadu', true),
        "nama_korban" => $this->input->post('nama', true),
        "jk" => $this->input->post('jk', true),
        "alamat" => $this->input->post('alamat', true),
        "no_tlp" => $this->input->post('no_tlp', true)
);
        $this->db->insert('korban', $data);
	}
}