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
            <h1 class="h3 mb-0 text-gray-800">Halaman Pengembalian</h1>
          </div>

  <div class="container">
  <div class="card">
    <div class="card-body">
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
            <th>Kembali</th>
            <th>Hilang</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $no=1;
        foreach ($dkembali as $a) 
        { ?>
          <tr>
           <td><?php echo $no++; ?></td>
            <td><?php echo $a->peminjam; ?></td>
            <td><?php echo $a->alamat; ?></td>
            <td><?php echo $a->pj; ?></td>
            <td><?php echo $a->Judul_buku; ?></td>
            <td><?php echo $a->tglPinjam; ?></td>
            <td><?php echo $a->tglharuskembali; ?></td>
          <td align="center"> <form action="<?php echo base_url().'admin/Data_pengembalian/kembali';?>" method="post">  
            <input type="hidden" name="id_Pinjam" value="<?php echo $a->idPinjam; ?>">
            <input type="hidden" name="idbuku" value="<?php echo $a->buku_Kode_buku; ?>">
            <button type="submit" class="btn btn-success" id="setuju"><i class="fa fa-check"></i></button>
        </form> </td>
          <td align="center"><form action="<?php echo base_url().'admin/Data_pengembalian/hilang';?>" method="post">  
            <input type="hidden" name="id_Pinjam" value="<?php echo $a->idPinjam; ?>">
            <input type="hidden" name="idbuku" value="<?php echo $a->buku_Kode_buku; ?>">
            <button type="submit" class="btn btn-danger" id="hilang"><i class="fa fa-times-circle"></i></button>
        </form>
            </td>
        <?php } ?>
      </tr>
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

<!-- 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js') ?>"></script>
<!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> -->
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tables').DataTable();

      document.querySelector("#setuju").addEventListener("click", function(e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
      title: 'Apakah Benar Buku Sudah Dikembalikan?',
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: 'IYA',
      denyButtonText: 'BATAL',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('OK, Buku Berhasil Dikembalikan!', '', 'success');
        setTimeout(function() {
        form.submit();
    }, 3000);
      } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
      }
    })
    });
            document.querySelector("#hilang").addEventListener("click", function(e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
      title: 'Apakah Benar Buku Hilang?',
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: 'IYA',
      denyButtonText: 'BATAL',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('OK, Buku tidak dikembalikan!', '', 'success');
        setTimeout(function() {
        form.submit();
    }, 3000);
      } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
      }
    })
    });
});


  $(document).on("click","#tombolUbah",function() {
    let id = $(this).data('id_buku');
    let judul = $(this).data('judul');
    let kategori = $(this).data('kategori');
    let pengarang = $(this).data('pengarang');
    let penerbit = $(this).data('penerbit');
    let jml = $(this).data('jml');

    $("#id_buku").val(id_buku);
    $(".modal-body #judul").val(judul);
    $(".modal-body #kategori").val(kategori);
    $(".modal-body #pengarang").val(pengarang);
    $(".modal-body #penerbit").val(penerbit);
    $(".modal-body #jml").val(jml);
  });  
</script>




</body>

</html>