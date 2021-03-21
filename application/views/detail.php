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
</head>

<body id="page-top">

<div id="content">
        <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #044c8a">
          <a href="http://localhost/perpus_secang/Home" style="color: white;text-decoration: none;">
           <!--  <img style="width: 60px; height: 60px" src="<?=base_url('assets/gambar/logo-ummgl.png');?>"> -->
            &nbsp;Perpustakaan CONDRO UTOMO
          </a>

          <!-- <a href="http://localhost/perpus_secang/Home">Home</a> -->
         </nav> 
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
        
        </div>
      </div>

<!-- Body page -->
<div class="container" style="background: none;padding-right: 5%; padding-left: 5%">
  <section class="content" style="border: 1px solid silver">
    <table class="table table-striped" style="margin-top: 5%">
      <h3 align="center" style="padding-top: 0px; margin-bottom: 0px; text-decoration: underline;"><b>Detail Buku</b></h3>
    <tr>
      <th>Judul Buku</th>
      <td>:&nbsp;<?php echo $detail->Judul_buku ?></td>
    </tr>
    <tr>
      <th>Tahun Terbit</th>
      <td>:&nbsp;<?php echo $detail->tahun ?></td>
    </tr>
    <tr>
      <th>Jumlah Bisa Dipinjam</th>
      <td>:&nbsp;<?php echo $detail->jumlah ?>&nbsp;Buku</td>
    </tr>
    <tr>
      <th>Kategori Buku</th>
      <td>:&nbsp;<?php echo $detail->nama_kategori ?></td>
    </tr>    
  </table>
  </section>
  <a style="margin-top: 10px" href="<?php echo base_url().'Home';?>" class="btn btn-primary">Kembali</a>
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