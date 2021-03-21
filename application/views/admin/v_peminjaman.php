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

        <!-- Topbar -->
      <?php $this->load->view("admin/_partials/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Halaman Peminjaman</h1>
          </div>
           <?php echo $this->session->flashdata('message'); ?>

  <div class="container">
  <div class="card">
    <div class="card-body">
      <a href="#" data-toggle="modal" data-target="#tambahpeminjamModal" class="btn btn-success" style="margin-bottom: 10px;"><span class="fa fa-plus"></span>&nbsp;Tambah Peminjaman</a>
      <!-- print peminjaman -->
      <a href="<?= base_url('admin/Data_peminjaman/printPeminjaman'); ?>" class="btn btn-warning"style="margin-bottom: 10px;"><span class="fa fa-download"></span>&nbsp;Cetak Peminjaman PDF</a>

      <div class="table-responsive"></div>
      <table id="tables" class="table table-bordered table-striped table-hover table-datatable">

        <thead align="center">
          <tr>
            <th width="1%">No</th>
            <th>Nama Peminjam</th>
            <th>Alamat</th>
            <th>Penanggung Jawab</th>
            <th>Judul Buku</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>Status</th>
            <!-- <th>Hapus</th> -->
            <th>Edit</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $no=1;
        foreach ($dpinjam as $a) 
        { ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $a->peminjam; ?></td>
            <td><?php echo $a->alamat; ?></td>
            <td><?php echo $a->pj; ?></td>
            <td><?php echo $a->Judul_buku; ?></td>
            <td><?php echo $a->tglPinjam; ?></td>
            <td><?= ($a->tglKembali == null) ? $a->tglharuskembali: $a->tglKembali ?></td>
            <td><?= ($a->tglKembali == null) ? "Belum Kembali" : "Sudah kembali" ; ?></td>
           <!--  <td onclick="javascript: return confirm('Anda Yakin HAPUS?')" align="center">
              <a style="margin-right: 10px" href="<?php echo base_url().'admin/Data_peminjaman/hapus/'.$a->idPinjam; ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
            </td> -->
            <td>
              <a id="tombolpnjmUbah" data-toggle="modal" data-target="#ubahpnjmModal" style="margin-left: 10px;color: white" class="btn btn-warning" data-id="<?php echo $a->idPinjam; ?>" data-nmbk="<?php echo $a->Judul_buku; ?>" data-peminjam="<?php echo $a->peminjam; ?>" data-alamat="<?php echo $a->alamat; ?>" data-pj="<?php echo $a->pj; ?>" data-buku="<?php echo $a->buku_Kode_buku; ?>" data-tglpnjm="<?php echo $a->tglPinjam; ?>" data-tglkmbl="<?php echo $a->tglharuskembali; ?>"><i class="fa fa-edit"></i>Edit</a>
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

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js') ?>"></script> -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/select2/select2.min.js') ?>"></script>
<!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<!-- <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> -->
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#tables').DataTable();
        $('#mySelect2').select2({
        dropdownParent: $('#tambahpeminjamModal'),
        placeholder: "Pilih buku"
    });
        
});

  $(document).on("click","#tombolpnjmUbah",function() {
    let id = $(this).data('id');
    let peminjam = $(this).data('peminjam');
    let alamat = $(this).data('alamat');
    let pj = $(this).data('pj');
    let buku = $(this).data('buku');
    let tglpnjm = $(this).data('tglpnjm');
    let tglkmbl = $(this).data('tglkmbl');
    let nmbuku = $(this).data('nmbk');
    $("#id_Pinjam").val(id);
    $("#bukulama").val(buku);
    $(".modal-body #peminjam").val(peminjam);
    $(".modal-body #alamat").val(alamat);
        $('#mySelect3').select2({
        dropdownParent: $('#ubahpnjmModal'),
        placeholder: nmbuku
    });    
    $("#mySelect3").val(buku);
    $(".modal-body #pj").val(pj);
    $(".modal-body #tglPinjam").val(tglpnjm);
    $(".modal-body #tglharuskembali").val(tglkmbl);
  });  
</script>

</body>

</html>