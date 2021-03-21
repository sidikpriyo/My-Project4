<?php

class Data_pengembalian extends CI_Controller
{
	
	public function __construct()
	{	
		parent::__construct();
		check_not_login();
	}

	public function index() 
	{
		$data['dkembali'] = $this->M_data->get_kembali();		
		$this->load->view("admin/v_pengembalian",$data);
	}
	public function kembali() 
	{
		$id = $this->input->post('id_Pinjam');
		$buku = $this->input->post('idbuku');
		$sekarang = date('Y-m-d');	
		$data = array(
			'Pinjam_idPinjam'		=> $id,
			'tglKembali'	=> $sekarang,
		);
		$this->M_data->input_data($data, 'kembali');
		$this->M_data->kembali_buku($buku);
		redirect('admin/Data_pengembalian');
	}
	public function hilang() 
	{
		$id = $this->input->post('id_Pinjam');
		$buku = $this->input->post('idbuku');
		$sekarang = date('Y-m-d');	
		$data = array(
			'Pinjam_idPinjam'		=> $id,
			'tglKembali'	=> $sekarang,
		);
		$this->M_data->input_data($data, 'kembali');
		redirect('admin/Data_pengembalian');
	}
}


?>