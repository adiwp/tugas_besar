<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css" rel="stylesheet">
    </head>
    <body>
    
    <!-- Navigasi Atas -->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Berita Online</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Keluar</a>
            </li>
        </ul>
    </nav>

    <!-- Container Admin -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">
                        <span data-feather="file-text"></span>
                        Berita
                        </a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="isi-berita.php">
                                <span data-feather="file-text"></span>    
                                Isi Berita
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Komentar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wartawan.php">
                        <span data-feather="users"></span>
                        Wartawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="isi-wartawan.php">
                        <span data-feather="users"></span>
                        Isi Data Wartawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pelanggan.php">
                        <span data-feather="users"></span>
                        Pelanggan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="isi-pelanggan.php">
                        <span data-feather="users"></span>
                        Isi Data Pelanggan
                        </a>
                    </li>
                </ul>

            </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">