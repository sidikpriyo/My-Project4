
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <title>Perpustakaan Secang | Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: #e3e6f0;">
  <!-- navbar -->
  <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #044c8a">
    <h5 style="margin-top: 10px; color: white"><a href="http://localhost/perpus_secang/Login" style="color: white; text-decoration: none"><span class="fa fa-user-cog fa-lg"></span>&nbsp;<b>ADMIN PERPUSTAKAAN DESA SECANG</b></a></h5>
  </nav>

  <div class="container" style="margin-top: 1%; margin-bottom: 40px">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- gambar -->
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>Login Admin</b></h1>
                  </div>
                  <form class="user" role="form" action="<?=site_url('Login/process')?>" method="post" style="margin-top: 50px">
                    <div class="form-group" style="margin-top: 30px">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="username" placeholder="Username">
                    </div>
                    <div class="form-group" style="margin-top: 30">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block" name='login' style="margin-top: 30px">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

<!-- footer -->
<footer class="sticky-footer" style="background: #044c8a; margin-top: 20px">
<div class="container my-auto">
<div class="copyright my-auto text-white">
 <center><span>Perpustakaan Desa Secang</span></center>
 <br ><center><span>Copyright &copy; Template : SB Admin 2</span></center>
 </div>
</div>
</footer>
</body>

</html>
