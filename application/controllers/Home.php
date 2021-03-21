<?php 
defined('BASEPATH') OR exit('No script access allowed');

class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya bisa disini
	}

	public function index() {
		$data['buku'] = $this->M_data->get_data();
		$this->load->view('v_home',$data);
	}

	public function detail($id_buku) {
		$detail = $this->M_data->detail_data($id_buku);
		$data['detail'] = $detail;
		$this->load->view('detail',$data);
	}

}
