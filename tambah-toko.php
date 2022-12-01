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
        <h2 class="ml-2">Tambah Toko Baru</h2>
        <form class="shoping__cart__price mt-5 mb-5 ml-3" action="add-toko.php" method="POST">
            <table class="mt-5 mb-5">
                <tr>
                    <td class="shoping__cart__price mt-2 mb-2 ml-3">Nama TOKO</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="nama_toko" name="nama_toko" required></td>
                </tr>
                <tr>
                    <td class="mt-2 mb-2 ml-3">Nama Pemilik</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="nama_pemilik" name="nama_pemilik"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="alamat" name="alamat" required></td>
                </tr>
                <tr>
                    <td>No. Handphone</td>
                    <td><input class="mt-2 mb-2 ml-3" type="text" id="no_hp" name="no_hp" required></td>
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

    mysqli_query($conn,"INSERT INTO toko SET nama_toko='$_POST[nama_toko]',nama_pemilik='$_POST[nama_pemilik]',alamat='$_POST[alamat]',no_hp='$_POST[no_hp]'");
    echo" <script>alert('Toko Berhasil Ditambahkan');
    window.location='tambah-toko.php';
    </script>";
}else{
        //  echo "<script>alert('Gagal Ditambahkan');
        // window.location='register.php';
        // </script>";
}
// header("location:tambah.php?pesan=input");
?>