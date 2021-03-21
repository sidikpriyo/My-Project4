<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/_partials/head.php") ?>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->

      <div id="content">
        <img style="width: 260px; height: 100px; margin-top: -15px" src="<?=base_url('assets/gambar/Perpustakaan.png');?>">
        <!-- Topbar -->
      <?php $this->load->view("admin/_partials/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Halaman Data Buku</h1>
          </div>
          <?php echo $this->session->flashdata('message'); ?>

  <div class="container">
  <div class="card">
    <div class="card-body">
      <!-- tambah buku button -->
      <a href="" data-toggle="modal" data-target="#tambahModal" class="btn btn-success" style="margin-bottom: 10px;"><span class="fa fa-plus"></span>&nbsp;Tambah Buku</a>
      <!-- print buku button -->
      <a href="<?= base_url('admin/Data_buku/printBuku'); ?>" class="btn btn-warning"style="margin-bottom: 10px;"><span class="fa fa-download"></span>&nbsp;Cetak Buku PDF</a>

      <div class="table-responsive"></div>
      <table id="tables" class="table table-bordered table-striped table-hover table-datatable">

        <thead align="center">
          <tr>
            <th width="1%">No</th>
            <th>Judul Buku</th>
            <th>Kategori Buku</th>
            <th>Tahun</th>
            <th>Tersedia</th>
            <th>Hapus</th>
            <th>Edit</th>
            <th>Lihat</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $no=1;
        foreach ($dbuku as $a) 
        { ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $a->Judul_buku; ?></td>
            <td><?php echo $a->nama_kategori; ?></td>
            <td><?php echo $a->tahun; ?></td>
            <td><?php echo $a->jumlah; ?></td>
            <td onclick="javascript: return confirm('Anda Yakin HAPUS?')" align="center">
              <a style="margin-right: 10px" href="<?php echo base_url().'admin/Data_buku/hapus/'.$a->Kode_buku ; ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
            </td>
            <td>
              <a id="tombolUbah" data-toggle="modal" data-target="#ubahModal" style="margin-left: 10px;color: white" class="btn btn-warning" data-idbuku="<?php echo $a->Kode_buku; ?>" data-judul="<?php echo $a->Judul_buku; ?>" data-kategori="<?php echo $a->kategori_idkategori ; ?>" data-tahun="<?php echo $a->tahun; ?>" data-jml="<?php echo $a->jumlah; ?>"><i class="fa fa-edit"></i>Edit</a>
            </td>
            <td>
              <a id="tombolUbah" data-toggle="modal" data-target="#ubahModal" style="margin-left: 10px;color: white" class="btn btn-success" data-idbuku="<?php echo $a->Kode_buku; ?>" data-judul="<?php echo $a->Judul_buku; ?>" data-kategori="<?php echo $a->kategori_idkategori ; ?>" data-tahun="<?php echo $a->tahun; ?>" data-jml="<?php echo $a->jumlah; ?>"><i class="fa fa-book"></i>Lihat</a>
            </td>

  
          </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
  </div>

</div>
</div>
</div>
 

      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>



  <!-- Bootstrap core JavaScript-->
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>


<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> -->
<script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tables').DataTable();
});

  $(document).on("click","#tombolUbah",function() {
    let id = $(this).data('idbuku');
    let judul = $(this).data('judul');
    let kategori = $(this).data('kategori');
    let tahun = $(this).data('tahun');
    let jml = $(this).data('jml');

    $(".modal-body #id_buku").val(id);
    $(".modal-body #judul").val(judul);
    $(".modal-body #kategori").val(kategori);
    $(".modal-body #tahun").val(tahun);
    $(".modal-body #jml").val(jml);
  });  
</script>





</body>

</html>
