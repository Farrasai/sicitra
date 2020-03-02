<?php


class Puspaga_model extends CI_Model {
    public function getAllPuspaga ()
    {
    	$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
		$this->db->order_by('id_konpus', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
    }
    
    public function tambahDataKonPuspaga($image,$params=null)
	{
		$data = array(
		"id_admin" => $this->input->post('id_admin', true),
        "nik_pengadu" => $this->input->post('nik_pengadu', true),
        "tgl_konsul" => $this->input->post('tgl_konsul', true),
        "judul_konsul" => $this->input->post('judul_konsul', true),
        "perihal_konpus" => $this->input->post('perihal_konpus', true),
        "lampiran" => $image
);
		$this->db->insert('konsultasi_puspaga', $data);
		
		$nik_pengadu = $_POST['nik_pengadu'];
		$judul_konsul = $_POST['judul_konsul'];


		$message ='Konsultasi Puspaga Masuk dari : '.$nik_pengadu.' %0A'.$judul_konsul.' %0A'.'Klik Link berikut untuk menjawab pertanyaan'.' %0A'.'http://sicitra.com/admin/Konsul_puspaga'.'';

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
	
	public function getPuspagaById($id_konpus)
	{
		$this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
		$this->db->where('id_konpus', $id_konpus);
		$query = $this->db->get_where();
        return $query->row_array();
}
	
	public function ubahDataKonPuspaga()
	{
		$data = [
		"nik_pengadu" => $this->input->post('nik_pengadu', true),
        "tgl_konsul" => $this->input->post('tgl_konsul', true),
        "judul_konsul" => $this->input->post('judul_konsul', true),
        "perihal_konpus" => $this->input->post('perihal_konpus', true)
		];
		
		$this->db->where('id_konpus', $this->input->post('id'));
		$this->db->update('konsultasi_puspaga', $data);
	}
	
	public function hapusDataPuspaga($id_konpus)
	{
		$this->db->where('id_konpus', $id_konpus);
		$this->db->delete('konsultasi_puspaga');
	}
	
	public function hitungJumlahAsset()
{   
    $this->db->select('*');
		$this->db->from('konsultasi_puspaga');
		$this->db->join('pengadu', 'pengadu.nik_pengadu = konsultasi_puspaga.nik_pengadu');
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