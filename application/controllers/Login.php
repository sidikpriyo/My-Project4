<?php 
defined('BASEPATH') OR exit('No script access allowed');

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya bisa disini
	}

	public function index() {
		check_already_login();	
		$this->load->view('v_login');
	}

	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			$userpass = $post['password'];
			$query = $this->M_data->login($post);
			if ($query->num_rows()>0) {
				$row = $query->row();
				$pas = $row->password;
				if (password_verify($userpass, $pas)){
				$params = array(
					'idadmin' => $row->id_admin,
					'username' => $row->username,
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat Login Berhasil');
					window.location='".site_url('admin/data_buku')."'
				</script>";
			}else{
				echo "<script>
					alert('Username/Password Salah');
					window.location='".site_url('login')."'
				</script>";
			}
			}else{
				echo "<script>
					alert('Username/Password Salah');
					window.location='".site_url('login')."'
				</script>";
			}
		}
	}
		public function logout()
	{
		$params = array('idadmin','username');
		$this->session->unset_userdata($params);
		redirect('login');
	}
}
