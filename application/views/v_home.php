<!DOCTYPE html>
<html lang="en">
<title>Perpus Secang | Home</title>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <!-- data tabel -->
<script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

</head>

<body id="page-top">

<div id="content">
        <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #044c8a; height: 85px">
          <a href="http://localhost/perpus_secang/Home" style="color: white;text-decoration: none;">
          <img style="width: 260px; height: 100px; margin-top: -15px" src="<?=base_url('assets/gambar/Perpustakaan.png');?>">
          </a>
         </nav> 
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          
          <!-- judul -->
          <div class="container" style="margin-top: 20px;margin-bottom: 30px">
            <center><h4>SISTEM INFORMASI PERPUSTAKAAN DESA SECANG</h4></center>
          </div>
          
        </div>
      </div>

<!-- Body page -->
  <div class="container" style="height:">
  <div class="card">
    <div class="card-header text-center"><h5><b>Data Buku</b></h5></div>
    <div class="card-body">
      <div class="table-responsive"></div>
      <table id="tables" class="table table-bordered table-striped table-hover table-datatable">
        <thead align="center">
          <tr>
            <th width="1%">No</th>
            <th>Judul</th>
            <th>Sisa</th>
            <th>Info</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $no=1;
        foreach ($buku as $a) 
        { ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $a->Judul_buku; ?></td>
            <td align="center"><?php echo $a->jumlah; ?></td>
            <td align="center">
              <a style="margin-right: 10px;" href="<?php echo base_url().'Home/detail/'.$a->Kode_buku; ?>" class="btn btn-small btn-primary"><i class="fa fa-info-circle"></i></a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tables').DataTable();
} );
</script>

    </table>

    </div>
  </div>
</div>

<!-- footer -->
<!-- <footer class="sticky-footer" style="background: #044c8a; margin-top: 20px">
<div class="container my-auto">
<div class="copyright my-auto text-white">
 <center><span>Perpustakaan Desa Secang</span></center>
 <br ><center><span>Copyright &copy; Template : SB Admin 2</span></center>
 </div>
</div>
</footer> -->

</body>
</html>