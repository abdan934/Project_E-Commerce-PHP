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

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <!-- header -->
        <?php
include 'header.php';
?>

        <!-- end header -->

        <!-- tambah produk -->
        <a href="tambah-produk.php">
            <button class="site-btn ml-2">
                <div class="hero__categories">
                    <i class="bi bi-minecart-loaded"></i>
                    Tambah Produk
                </div>
            </button>
        </a>
        <!-- end tambah produk -->

        <!-- isi -->
        <div class="row ml-2">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <form action="" method="post" class="cart-items">
                                    <?php
                                    // session_start();
        include './php/config.php';
        // include './php/createDb.php';
        // include './php/component.php';


        //  $nomor = 1;
        // $data = mysqli_query($conn,"SELECT * FROM produk");
        // $mysqli = new mysqli("localhost","root","","productdb");
        // $sql = "SELECT * FROM produk";
        // $result = $mysqli->query($sql);
        // while($row = $result->fetch_assoc()){
            $data = mysqli_query($conn,"select * from produk");
			while($d=mysqli_fetch_array($data)){
                                    // component($row['nama_produk'],$row['harga_produk'],$row['gambar_produk'],$row['id_produk'],$row['satuan'],$row['expired'])
                                    ?>
                            <tr>
                                <td class="shoping__cart__total"><?php $d['id_produk'] ?></td>
                                <td class="shoping__cart__item">
                                    <img src="<?php $d['gambar_produk'] ?>" alt="" />
                                    <h5><?php $d['nama_produk'] ?></h5>
                                </td>
                                <td class="shoping__cart__price"><?php $d['harga_produk'] ?></td>
                                <td class="shoping__cart__quantity">
                                    <?php $d['satuan'] ?>
                                </td>
                                <td class="shoping__cart__total"><?php $d['expired'] ?></td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a type="button" class="btn btn-success"
                                        href="edit-produk.php?id=<?php echo $d['id_produk']; ?>">Ubah</a>
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a type="button" class="btn btn-danger"
                                        href="hapus-produk.php?id=<?php echo $d['id_produk']; ?>">Hapus</a>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td class="shoping__cart__total"><?php // $nomor++ ?></td>
                                img/cart/cart-3.jpg -->
                            <!-- <td class="shoping__cart__item"> -->
                            <!-- <img src="img/cart/cart-3.jpg<?php //$tampil['gambar_produk'] ?>" alt="" />
                                        <h5>GEDANG <?php //$tampil['nama_produk']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price"><?php  //$tampil['harga_produk'] ?></td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                                                    <input type="text" value="1" />
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">$69.99</td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td> -->
                            <!-- </tr> -->

                            <?php
        }
        ?>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- end isi -->


        <!-- Footer Section Begin -->
        <p></p>
        <?php
     include 'footer.php';
     ?>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>