<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS Bootstrap Stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- JS Library -->
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>Kerja Proyek Satu</title>

    <!-- lib css bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- lib font -->
    <link rel="stylesheet" type="text/css" href="assets/font/css/font-awesome.css">

    <!-- lib jquery js -->
    <script type="text/javascript" src="assets/js/jQuery-2.1.1.js"></script>

    <!-- lib bootstrap js -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body>

    <!-- Navigation Bar Start -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
        <!-- Container Start -->
        <div class="container">
            <a class="navbar-brand" href="index.php">
                KerjaProyekSatu
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto text-center">
                    <!-- <span class="sr-only">(current)</span> -->
<!--                     <li class="nav-item">
                        <a class="nav-link" href="index.php?halaman=produk">Produk</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?halaman=cek_koneksi" title='Cek Koneksi' data-content='Popover body content is set in this attribute.'>Cek Koneksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Master
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?halaman=merk_produk" title='Merek Produk' data-content='Popover body content is set in this attribute.'>Merek Produk</a>
                            <a class="dropdown-item" href="index.php?halaman=kategori_produk" title='Kategori Produk' data-content='Popover body content is set in this attribute.'>Kategori Produk</a>
                            <a class="dropdown-item" href="index.php?halaman=produk" title='Produk' data-content='Popover body content is set in this attribute.'>Produk</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?halaman=pelanggan" title='Transaksi' data-content='Popover body content is set in this attribute.'>Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?halaman=transaksi" title='Transaksi' data-content='Popover body content is set in this attribute.'>Transaksi</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search something..." aria-label="Search" disabled>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" disabled title='Search Feature is Disable' data-content='Popover body content is set in this attribute.'>Search</button>
                </form>
            </div>
        </div>
        <!-- Container End -->
    </nav>
    <!-- Navigation Bar End -->

    <!-- brachedd menu -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">        
                    <?php 
                    if (!isset($_GET['halaman'])) {
                        include 'view/home.php';
                    }
                    else{
                        if ($_GET['halaman']=='merk_produk') {
                            include 'view/merk_produk/index.php';
                        }
                        elseif ($_GET['halaman']=='tambah_merk_produk') {
                            include 'view/merk_produk/add.php';
                        }
                        elseif ($_GET['halaman']=='ubah_merk_produk') {
                            include 'view/merk_produk/edit.php';
                        }
                        elseif($_GET['halaman']=='hapus_merk_produk'){
                            include 'controller/merk_produk/delete.php';
                        }
                        elseif($_GET['halaman']=='cek_koneksi'){
                            include 'controller/connection.php';
                        }
                        elseif($_GET['halaman']=='kategori_produk'){
                            include 'view/kategori_produk/index.php';
                        }
                        elseif($_GET['halaman']=='tambah_kategori_produk'){
                            include 'view/kategori_produk/add.php';
                        }
                        elseif ($_GET['halaman']=='ubah_kategori_produk') {
                            include 'view/kategori_produk/edit.php';
                        }
                        elseif($_GET['halaman']=='hapus_kategori_produk'){
                            include 'controller/kategori_produk/delete.php';
                        }
                        elseif($_GET['halaman']=='produk'){
                            include 'view/produk/tampil.php';
                        }
                        elseif($_GET['halaman']=='tambah_produk'){
                            include 'view/produk/tambah.php';
                        }
                        elseif($_GET['halaman']=='ubah_produk'){
                            include 'view/produk/ubah.php';
                        }
                        elseif($_GET['halaman']=='hapus_produk'){
                            include 'controller/produk/hapus.php';
                        }
                        elseif($_GET['halaman']=='pelanggan'){
                            include 'view/pelanggan/tampil.php';
                        }
                        elseif($_GET['halaman']=='tambah_pelanggan'){
                            include 'view/pelanggan/tambah.php';
                        }
                        elseif($_GET['halaman']=='ubah_pelanggan'){
                            include 'view/pelanggan/ubah.php';
                        }
                        elseif($_GET['halaman']=='transaksi'){
                            include 'view/transaksi/tampil.php';
                        }
                        elseif($_GET['halaman']=='hapus_pelanggan'){
                            include 'controller/pelanggan/hapus.php';
                        }
                        elseif($_GET[halaman]=='beli_produk'){
                            include 'view/produk/beli_produk.php';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>

    </body>
    <script type="text/javascript">
        window.onload = function() 
        { 
            jam(); 
        }

        function jam() 
        {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h +':'+ m +':'+ s;

            setTimeout('jam()', 1000);
        }

        function set(e) 
        {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
    </html>