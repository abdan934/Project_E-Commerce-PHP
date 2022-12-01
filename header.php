<?php
session_start();
 include'./php/config.php';
 require_once ("./php/createDb.php");
 require_once ("./php/component.php");
?>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="img/logo.png" alt="" /></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li>
                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
            </li>
        </ul>
        <div class="header__cart__price">Jumlah : <span>Rp. 0</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="img/language.png" alt="" />
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i>
                <?php 
                        // require_once ("cek_login.php"); 
                        // isinama();  
                        ?>
            </a>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Logout</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.php">Beranda</a></li>
            <li><a href="./shop-grid.html">Shop</a></li>
            <li>
                <a href="#">Halaman</a>
                <ul class="header__menu__dropdown">
                    <li><a href="list-toko.php">Toko</a></li>
                    <li><a href="list-akun.php">User</a></li>
                    <!-- <li><a href="./checkout.html">#</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li> -->
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i>shopfresh@gmail.com</li>
            <li>Gratis Ongkir Setiap Pembelian diatas RP.300.000,00</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> shopfresh@gmail.com</li>
                            <li>Gratis Ongkir Setiap Pembelian diatas RP.300.000,00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="" alt="" />
                            <div>
                                <!-- <div class="header__top__right__auth"> -->
                                <a><i class="fa fa-user"></i>Hi,
                                    <?php
                                        
            include './php/config.php';  
            if ($username = mysqli_escape_string($conn,$_SESSION['username'])) 
            {
            // $username = $_SESSION['username'];
            $data = mysqli_query($conn,"SELECT * FROM user where username='$username'");
            $tampil = mysqli_fetch_array($data);
                                             echo $tampil['nama'];
            }else{
                echo "<script>alert('Request Timed Out');
                window.location='login.php';
                </script>";
            }
                                        ?>
                                </a>
                                <!-- </a> -->
                            </div>
                            <span class="arrow_carrot"></span>
                            <ul>
                                <a href="alertlogout.php">
                                    <i class=" ml-3"></i>
                                    Logout
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.php"><img src="img/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="./index.php">Beranda</a></li>
                        <li><a href="./shop-grid.html">Shop</a></li>
                        <li>
                            <a href="#">Halaman</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="list-toko.php">Toko</a></li>
                                <li><a href="list-produk.php">Produk</a></li>
                                <li><a href="list-akun.php">User</a></li>
                                <li><a href="chart.php">Chart</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                        </li>
                        <li>
                            <a href="./shoping-cart.php"><i class="fa fa-shopping-bag nav-item active">
                                </i>
                                <?php
                                        require_once("php/keranjang.php");
                                        head();
                                        ?>
                            </a>
                        </li>
                    </ul>

                    <div class=" header__cart__price">Jumlah: <span>RP.300.000,00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->