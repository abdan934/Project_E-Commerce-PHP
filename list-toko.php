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

        <?php
include 'header.php';
?>
        <!-- Shoping Cart Section Begin -->

        <!-- button tambah -->
        <a href="tambah-toko.php">
            <button class="site-btn ml-2">
                <div class="hero__categories">
                    <i class="bi bi-person-plus-fill"></i>
                    Tambah Toko
                </div>
            </button>
        </a>
        <!-- end button tambah -->

        <form action="" method="post">
            <section class="shoping-cart spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shoping__cart__table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="">No</th>
                                            <th class="shoping__product">Nama Toko</th>
                                            <th>Pemilik</th>
                                            <th>Password</th>
                                            <th class="">No. Handphone</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <form action="" method="post" class="cart-items">
                                                <?php 
   
                                include './php/config.php';
		                        $no = 1;
		             $data = mysqli_query($conn,"SELECT * FROM toko");
		while($tampil = mysqli_fetch_array($data)){
                          ?>
                                        <tr>
                                            <td class="shoping__cart__price">
                                                <span name="id">
                                                    <h5> <?php echo $no++; ?></h5>
                                                </span>
                                            </td>
                                            <td class="shoping__cart__item">
                                                <span name="nama">
                                                    <h5><?php echo $tampil['nama_toko']; ?></h5>
                                                </span>
                                            </td>
                                            <td class="shoping__cart__price">
                                                <?php echo $tampil['nama_pemilik']; ?>
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <?php echo $tampil['alamat']; ?>
                                            </td>
                                            <td class="shoping__cart__quantity"><?php echo $tampil['no_hp'];?></td>
                                            <td class="shoping__cart__item__close">
                                                <a type="button" class="btn btn-success"
                                                    href="edit-toko.php?id=<?php echo $tampil['id_toko']; ?>">Ubah</a>
                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <a type="button" class="btn btn-danger"
                                                    href="hapus-toko.php?id=<?php echo $tampil['id_toko']; ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>

        </form>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </section>
        </form>
        <!-- Shoping Cart Section End -->


        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="./index.php"><img src="img/logo.png" alt="" /></a>
                            </div>
                            <ul>
                                <li>Address: Kelas TI-2D</li>
                                <li>Phone: +62 11.188.888</li>
                                <li>Email: E-Commerce Fresh@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Useful Links</h6>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">About Our Shop</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">Delivery infomation</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Who We Are</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Innovation</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Ayo Join!</h6>
                            <p>
                                Dapatkan apa yang terbaru pada shop ini lewat email
                            </p>
                            <form action="#">
                                <input type="text" placeholder="Masukkan Email Anda" />
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                    document.write(new Date().getFullYear());
                                    </script>
                                    yang mengedit konten ini
                                    <i class="fa fa-heart" aria-hidden="true"></i> by
                                    <a href="https://abdan934.github.io/abdan934/" target="_blank">Isnaeni Abdan
                                        Syakuro</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                            <div class="footer__copyright__payment">
                                <img src="img/payment-item.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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