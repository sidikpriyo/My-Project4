<?php

defined('BASEPATH') OR exit('No script access allowed');

class M_data extends CI_Model
{
	public function login($post){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$post['username']);
		$query = $this->db->get();
		return $query;
	}
	//menampiklan data buku
	function get_data() {
		$data = $this->db->query("SELECT * FROM buku join kategori on kategori_idkategori = idkategori ORDER BY Judul_buku");
		return $data->result();
	}
	//menampilkan data pinjam
	function get_pinjam() {
		$data = $this->db->query("SELECT pinjam.*,Judul_buku,tglKembali FROM pinjam join buku on pinjam.buku_Kode_buku = buku.Kode_buku left join kembali on kembali.Pinjam_idPinjam = pinjam.idPinjam ORDER BY tglPinjam ASC");
		return $data->result();
	}
		//menampilkan data pinjam
	function get_kembali() {
		$data = $this->db->query("SELECT pinjam.*,Judul_buku,tglKembali FROM pinjam join buku on pinjam.buku_Kode_buku = buku.Kode_buku left join kembali on kembali.Pinjam_idPinjam = pinjam.idPinjam where tglKembali is null ORDER BY tglPinjam DESC");
		return $data->result();
	}
	//get berdasarkan tabel
	function get($table) {
		$data = $this->db->from($table)->get();
		return $data->result();
	}
	//hapus data buku
	public function hapus_buku($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	//tambah data buku
	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}
	//update stok jumlah saat pinjam
	public function pinjam_buku($id){
		$data = $this->db->query("UPDATE buku 
   SET jumlah = jumlah-1 where Kode_buku = ".$id );
	}
	//update stok jumlah saat kembali
	public function kembali_buku($id){
		$data = $this->db->query("UPDATE buku 
   SET jumlah = jumlah+1 where Kode_buku = ".$id );
	}
	//edit data buku
	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	//detail data buku pada home
	public function detail_data($id_buku){
		$this->db->from('buku');
		$this->db->join('kategori','kategori_idkategori = idkategori');
		$this->db->where('Kode_buku',$id_buku);
		$query = $this->db->get()->row();
		return $query;
	}
}