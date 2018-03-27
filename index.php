
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Simple Crud</title>
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.twbsPagination.min.js"></script>
      <script type="text/javascript" src="assets/js/validator.min.js"></script>
      <script type="text/javascript" src="assets/js/toastr.min.js"></script>

      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/footer-navbar.css">
      <link rel="stylesheet" href="assets/css/toastr.min.css">
      <link rel="stylesheet" href="assets/css/navbar-top-fixed.css">
      <script type="text/javascript" src="assets/js/item-ajx.js"></script>
      <script type="text/javascript">
        var url = "http://localhost/simplecrud/";
      </script>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <b><a class="navbar-brand" href="?f=beranda">RealmApps</a></b>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="?f=beranda">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?f=jurusan">Jurusan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Mahasiswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Dosen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">⋮</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pegawai</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </header>
       <main role="main" class="container">
          <?php
          error_reporting(0);
          $mod = $_GET['f'];
          if(file_exists('view/'.$mod.'.php')){
            include'view/'.$mod.'.php';
          } else {
            include 'view/beranda.php';
          }
          ?>
      </main>
      <footer class="footer">
        <div class="container">
          <span class="text-muted">Copyright © 2018 Roy Andri | 5150411172. All rights reserved. </span>
        </div>
      </footer>
    </body>
</html>
