<?php 

class Login extends CI_Controller{

	public function index(){
	    $data['judul'] = 'Selamat Datang di SICITRA';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer.php');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'pass' => md5($password) );
		$cek = $this->Login_model->cek_login('pengadu',$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("menu"));

		}else{
			redirect(base_url("login_gagal"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}