<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Ogani Template" />
        <meta name="keywords" content="Ogani, unica, creative, html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>E-Commerce Fresh</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
            rel="stylesheet" />

        <!-- favicon -->
        <link rel="shortcut icon" href="img/logo.png">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

    <body>
        <?php 
        include 'header.php';
        ?>

        <!-- <a href="#" class="ml-1">Lihat Semua Data</a> -->

        <br />
        <h2 class="ml-2">Tambah Produk Baru</h2>
        <form class="shoping__cart__price mt-5 mb-5 ml-3" action="add-produk.php" method="POST">
            <table class="mt-5 mb-5">
                <tr>
                    <td class="shoping__cart__price mt-2 mb-2 ml-3">Nama produk</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="nama_produk" name="nama_produk" required></td>
                </tr>
                <tr>
                    <td class="mt-2 mb-2 ml-3">Harga</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="harga_produk" name="harga_produk"></td>
                </tr>
                <tr>
                    <td>Url Gambar</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="gambar_produk" name="gambar_produk" required></td>
                </tr>
                <tr>
                    <td>Satuan</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="satuan" name="satuan" required></td>
                </tr>
                <tr>
                    <td>Expired</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="expired" name="expired" required></td>
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <!-- <td class="inputBox">
                        <a href="index.php"><input class="btn btn-danger mt-2 mb-2 ml-1" type="batal" value="Batal"><a> -->
                    <td class="inputBox">
                        <input class="btn btn-success mt-2 mb-2 ml-1" type="submit" name="submit" value="Simpan">
                    </td>
                    <!-- <td></td> -->
                    </td>
                </tr>
            </table>
        </form>
    </body>

    <?php 
        include 'footer.php';
        ?>

</html>

<?php 
include './php/config.php';
// include './php/createDb.php';

 if(isset($_POST['submit'])){

    mysqli_query($conn,"INSERT INTO produk SET nama_produk='$_POST[nama_produk]',harga_produk='$_POST[harga_produk]',gambar_produk='$_POST[gambar_produk]',expired='$_POST[expired]'");
    echo" <script>alert('produk Berhasil Ditambahkan');
    window.location='tambah-produk.php';
    </script>";
}else{
        //  echo "<script>alert('Gagal Ditambahkan');
        // window.location='register.php';
        // </script>";
}
// header("location:tambah.php?pesan=input");
?>