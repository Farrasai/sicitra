<?php


class KB_model extends CI_Model {
    public function getAllKB ()
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
		$this->db->order_by('id_konkb', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
    }
    
    public function tambahDataKonKB($image,$params=null)
	{
		$data = array(
		"id_admin" => $this->input->post('id_admin', true),
        "nik_pengadu" => $this->input->post('nik_pengadu', true),
        "tgl_konsul" => $this->input->post('tgl_konsul', true),
        "judul_konsul" => $this->input->post('judul_konsul', true),
        "perihal_konkb" => $this->input->post('perihal_konkb', true),
        "lampiran_kb" => $image
);
		$this->db->insert('konsultasi_kb', $data);
		
		$nik_pengadu = $_POST['nik_pengadu'];
		$judul_konsul = $_POST['judul_konsul'];


		$message ='Konsultasi KB Masuk dari : '.$nik_pengadu.' %0A'.$judul_konsul.' %0A'.'Klik Link berikut untuk menjawab pertanyaan'.' %0A'.'http://sicitra.com/admin/Konsul_KB'.'';

		$api = 'https://api.telegram.org/bot694725514:AAGceSzN3H8ahH--E8EPIf0pLocIC74JxhI/sendMessage?chat_id=613161658&text='.$message.'';


		$ch = curl_init($api);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);

	}
	
	public function getKBById($id_konkb)
	{
		$this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$this->db->where('id_konkb', $id_konkb);
		$query = $this->db->get_where();
        return $query->row_array();
}

	public function ubahDataKonKB()
	{
		$data = [
		"nik_pengadu" => $this->input->post('nik_pengadu', true),
        "tgl_konsul" => $this->input->post('tgl_konsul', true),
        "judul_konsul" => $this->input->post('judul_konsul', true),
        "perihal_konkb" => $this->input->post('perihal_konkb', true)
		];
		
		$this->db->where('id_konkb', $this->input->post('id'));
		$this->db->update('konsultasi_kb', $data);
	}
	
	public function hapusDataKB($id_konkb)
	{
		$this->db->where('id_konkb', $id_konkb);
		$this->db->delete('konsultasi_kb');
	}
	
	public function hitungJumlahAsset()
{   
    $this->db->select('*');
		$this->db->from('konsultasi_kb');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_kb.nik_pengadu');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
    $query = $this->db->get();
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