<!-- Template Halaman Frontend -->
<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
      
      <!-- Custom Style CSS -->
      <?php
      // cek path lokasi style.css
      if (isset($pth)) {
        // ketika halaman dibuka di bawah folder root
        echo "<link rel=\"stylesheet\" href=\"" . $pth . "library/style.css\">";
      } else {
        // ketika halaman berada di folder root
        echo "<link rel=\"stylesheet\" href=\"library/style.css\">";
      }
      ?>
      
      <title>Harian Online IT 2020</title>
    </head>
    <body>
    <!-- HEADER HALAMAN -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                <a class="navbar-brand" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>">Harian Online IT 2020</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">News <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Archives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    </ul>
                    <!-- pakai absolute PATH -->
                    <a href="http://tugas_besar.test/admin/login.php" class="btn btn-primary mr-2 ml-3">Login</a> 
                    <a href="#" class="btn btn-warning">Daftar</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- CONTENT -->
    <section id="content" class="container">