  <!-- logout -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout/Keluar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda Yakin Ingin Keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="<?=site_url('login/logout')?>">Keluar</a>
        </div>
      </div>
    </div>
  </div>

<!-- tambah data buku -->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/Data_buku/tambah_aksi'); ?>

           <div class="form-group">
                <input type="hidden" name="id_buku" class="form-control">
           </div>

          <div class="form-group">
            <label class="col-form-label">Judul Buku:</label>
            <input type="text" class="form-control" name="judul" required>
          </div>
            <div class="form-group">
            <label class="col-form-label">Pilih Kategori:</label>
            <select class="form-control" name="kategori" class="form-control" required>
              <!-- name = "id_kategori" -->
              <!-- lebih baik pakai option value -->
                <?php $idkategori = $this->input->post('kategori') ? $this->input->post('kategori') : $kategori->idkategori ?>
                    <?php foreach ($dkategori as $key) {?>
                    <option value="<?= $key->idkategori ?>" <?=$idkategori == $key->idkategori ? "Selected": null?> ><?= $key->nama_kategori ?></option>
                <?php } ?> 
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label">Tahun:</label>
            <input type="text" class="form-control" name="tahun">
          </div>
          <div class="form-group">
            <label class="col-form-label">Jumlah Buku:</label>
            <input type="text" class="form-control" name="jml" required>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!-- edit data buku -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahModalLabel">Edit Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url().'admin/Data_buku/update';?>" method="post">

           <div class="form-group">
                <input type="hidden" name="id_buku" id="id_buku" class="form-control">
           </div>

          <div class="form-group">
            <label class="col-form-label">Judul Buku:</label>
            <input type="text" class="form-control" name="judul" id="judul" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Pilih Kategori:</label>
            <select class="form-control" name="kategori" id="kategori" class="form-control" required>
                    <?php foreach ($dkategori as $key) {?>
                    <option value="<?= $key->idkategori ?>" ><?= $key->nama_kategori ?></option>
                <?php } ?> 
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label">Tahun:</label>
            <input type="text" class="form-control" name="tahun" id="tahun">
          </div>
          <div class="form-group">
            <label class="col-form-label">Jumlah Buku:</label>
            <input type="text" class="form-control" name="jml" id="jml" required>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- tambah peminjaman -->
  <div class="modal fade" id="tambahpeminjamModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Peminjam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/Data_peminjaman/tambah_aksi'); ?>

           <div class="form-group">
                <input type="hidden" name="id_Pinjam" class="form-control">
           </div>

          <div class="form-group">
            <label class="col-form-label">Nama Peminjam:</label>
            <input type="text" class="form-control" name="peminjam" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Alamat:</label>
            <input type="text" class="form-control" name="alamat" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Penanggung Jawab:</label>
            <input type="text" class="form-control" name="pj">
          </div>

          <div class="form-group">
          <label class="col-form-label">Judul Buku:</label>
          <select class="form-control" id="mySelect2" name="buku" style="width: 100%;">
            <option value=""></option>
              <?php
              foreach ($dbuku as $bk) {
              ?> 
                <option value="<?php echo $bk->Kode_buku ?>" data-judulBuku="<?php echo $bk->Judul_buku ?>"> 
                <?php echo $bk->Judul_buku ?>
                </option> 
              <?php
              }
              ?>
          </select>
          </div>
          <div class="form-group">
            <label class="col-form-label">Tanggal Pinjam:</label>
            <input type="date" class="form-control" name="tglPinjam" id="tglPinjam1" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Tanggal Kembali:</label>
            <input type="date" class="form-control" name="tglharuskembali" required>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<!-- edit peminjaman -->
<div class="modal fade" id="ubahpnjmModal" tabindex="-1" role="dialog" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahModalLabel">Edit Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url().'admin/Data_peminjaman/update';?>" method="post">

         <div class="form-group">
                <input type="hidden" id="id_Pinjam" name="id_Pinjam" class="form-control">
                  <input type="hidden" id="bukulama" name="bukulama" class="form-control">
           </div>

          <div class="form-group">
            <label class="col-form-label">Nama Peminjam:</label>
            <input type="text" class="form-control" name="peminjam" id="peminjam" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Alamat:</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Penanggung Jawab:</label>
            <input type="text" class="form-control" name="pj" id="pj">
          </div>
          <div class="form-group">
            <label class="col-form-label">Judul Buku:</label>
           <select class="form-control" id="mySelect3" name="buku" style="width: 100%;">
            <option value=""></option>
                    <?php foreach ($dbuku as $bk) {?>
                    <option value="<?= $bk->Kode_buku ?>" ><?= $bk->Judul_buku ?></option>
                <?php } ?> 
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label">Tanggal Pinjam:</label>
            <input type="date" class="form-control" name="tglPinjam" id="tglPinjam" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Tanggal Kembali:</label>
            <input type="date" class="form-control" name="tglharuskembali" id="tglharuskembali" required>
          </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>