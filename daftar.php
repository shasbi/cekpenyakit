<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Diagdong</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Diagdong</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="daftar.php">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="masuk.php">Masuk</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-tittle"><center>Daftar Pengguna</center></h3>
          </div>
          <div class="panel-body">
            <form method="post" class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-md-3">Nama</label>
                <div class="col-md-7">
                  <input type="text" class="form-control" name="nama" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Email</label>
                <div class="col-md-7">
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Password</label>
                <div class="col-md-7">
                  <input type="password" class="form-control" name="password" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Telp/HP</label>
                <div class="col-md-7">
                  <input type="text" class="form-control" name="telepon" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-7 col-md-offset-5">
                  <button class="btn btn-primary" name="daftar">Daftar</button>
                </div>
              </div>
            </form>
            </div>
        </div>
      </div>
    </div>
  </div>

<br><br><br><br><br>
    <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>