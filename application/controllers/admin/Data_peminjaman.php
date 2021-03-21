<?php


class Data_peminjaman extends CI_Controller
{
	
	public function __construct()
	{	
		parent::__construct();
	}

	public function index() 
	{
		check_not_login();
		$data['dbuku'] = $this->M_data->get('buku');
		$data['dpinjam'] = $this->M_data->get_pinjam();
		$this->load->view("admin/v_peminjaman",$data);
	}
	public function tambah_aksi() {
		$peminjam = $this->input->post('peminjam');
		$alamat = $this->input->post('alamat');
		$pj = $this->input->post('pj');
		$buku = $this->input->post('buku');
		$tglPinjam = $this->input->post('tglPinjam');
		$tglharuskembali = $this->input->post('tglharuskembali');
		$admin = $this->session->userdata('idadmin');
		$data = array(
			'alamat'		=> $alamat,
			'pj'	=> $pj,
			'peminjam'	=> $peminjam,
			'buku_Kode_buku'		=> $buku,
			'tglPinjam'		=> $tglPinjam,
			'tglharuskembali'	=> $tglharuskembali,
			'Admin_id_admin'	=> $admin
		);
		$this->M_data->input_data($data, 'pinjam');
		$this->M_data->pinjam_buku($buku);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Ditambahkan!
			</div>');
		redirect('admin/Data_peminjaman');
	}

	public function update(){
		$idPinjam = $this->input->post('id_Pinjam');
		$bukulama = $this->input->post('bukulama');
		$peminjam = $this->input->post('peminjam');
		$alamat = $this->input->post('alamat');
		$pj = $this->input->post('pj');
		$buku = $this->input->post('buku');
		$tglPinjam = $this->input->post('tglPinjam');
		$tglharuskembali = $this->input->post('tglharuskembali');
		$admin = $this->session->userdata('idadmin');
		
		$data = array(
			'alamat'		=> $alamat,
			'pj'	=> $pj,
			'peminjam'	=> $peminjam,
			'buku_Kode_buku'		=> $buku,
			'tglPinjam'		=> $tglPinjam,
			'tglharuskembali'	=> $tglharuskembali,
			'Admin_id_admin'	=> $admin
		);

			$where = array(
			'idPinjam' => $idPinjam
			);

		$this->M_data->update_data($where,$data,'pinjam');
		if($bukulama!=$buku){
			$this->M_data->kembali_buku($bukulama);
			$this->M_data->pinjam_buku($buku);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Di update!
			</div>');
		redirect('admin/Data_peminjaman');
	}

	public function hapus ($id)
	{
		$where = array('idPinjam'=>$id);
		$this->M_data->hapus_buku($where, 'pinjam');
		redirect('admin/Data_peminjaman');	
	}

	// print peminjaman
	public function printPeminjaman() {
		$this->load->library('dompdf_gen');
		$data['pinjam'] = $this->M_data->get_pinjam('pinjam');
		$this->load->view('admin/v_printPeminjaman', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
	}

}


?>