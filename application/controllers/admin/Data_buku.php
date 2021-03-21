<?php


class Data_buku extends CI_Controller
{
	
	public function __construct()
	{	
		parent::__construct();
		check_not_login();
	}

	//tampilkan data buku
	public function index() 
	{
		$data['dbuku'] = $this->M_data->get_data();
		$data['dkategori'] = $this->M_data->get('kategori');
		$this->load->view("admin/v_buku",$data);
	}

	//hapus data buku
	public function hapus ($id_buku)
	{
		$where = array('kode_buku'=>$id_buku);
		$this->M_data->hapus_buku($where, 'buku');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Di Hapus!
			</div>');
		redirect('admin/Data_buku');	
	}

	//tambah data buku
	public function tambah_aksi() {
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$tahun = $this->input->post('tahun');
		$jml = $this->input->post('jml');
		
		$data = array(
			'Judul_buku'		=> $judul,
			'kategori_idkategori'	=> $kategori,
			'tahun'	=> $tahun,
			'jumlah'		=> $jml
		);


		$this->M_data->input_data($data, 'buku');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Ditambahkan!
			</div>');
		redirect('admin/Data_buku');
	}

	//update data buku
	public function update(){
		$id_buku = $this->input->post('id_buku');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$tahun = $this->input->post('tahun');
		$jml = $this->input->post('jml');
		
		$data = array(
			'Judul_buku'		=> $judul,
			'kategori_idkategori'	=> $kategori,
			'tahun'	=> $tahun,
			'jumlah'		=> $jml
		);

			$where = array(
			'Kode_buku' => $id_buku
			);

		$this->M_data->update_data($where,$data,'buku');
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Di Update!
			</div>');
		redirect('admin/Data_buku');
	}

	// print buku
	public function printBuku() {
		$this->load->library('dompdf_gen');
		$data['buku'] = $this->M_data->get_data('buku');
		$this->load->view('admin/v_printBuku', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
	}

	
}
?>