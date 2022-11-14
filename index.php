<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}

//start session
// session_start();

// require_once('./php/createDb.php');
// require_once('./php/component.php');

// //instant create
// $database = new createDb(dbname:"Produkdb",tablename:"Produktb");


// if(isset($_POST['add'])){
//     // print_r($_POST['id_produk']);
//     if(isset($_SESSION['keranjang'])){
//         $item_array_id = array_column($_SESSION['keranjang'],column_key:"id_produk");
//         // print_r($item_array_id);
//         // print_r($_SESSION['keranjang']);

//         if(in_array($_POST['id_produk'],$item_array_id)){
//             echo"<script>alert('Produk masuk Keranjang...!')</script>";
//             echo"<script>window.location = 'index.php'</script>";
            
//         }else{
//             $count=count($_SESSION['keranjang']);
//             $item_array=array(
//                 'id_produk'=>$_POST['id_produk']
//             );
//             $_SESSION['keranjang'][$count] = $item_array;
//         }
        
//     }else{
//         $item_array=array(
//             'id_produk'=>$_POST['id_produk']
//         );
//         // $_SESSION['keranjang'][$count] = $item_array;
//     // create session baru
//     $_SESSION['keranjang'][0]= $item_array;
//     print_r($_SESSION['keranjang']);
//     }
// }

?>


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
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

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
                    <a href="#"><i class="fa fa-user"></i> Login</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="./index.php">Beranda</a></li>
                    <li><a href="./shop-grid.html">Shop</a></li>
                    <li>
                        <a href="#">Halaman</a>
                        <ul class="header__menu__dropdown">
                            <li><a href="./shop-details.html">Shop Details</a></li>
                            <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                            <li><a href="./checkout.html">Check Out</a></li>
                            <li><a href="./blog-details.html">Blog Details</a></li>
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
                                    <img src="img/language.png" alt="" />
                                    <div>English</div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="#">Spanis</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="#"><i class="fa fa-user"></i> Login</a>
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
                                        <li><a href="./shop-details.html">Shop Details</a></li>
                                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                        <li><a href="./checkout.html">Check Out</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Blog</a></li>
                                <li><a href="./contact.html">Contact</a></li>
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
                                        <span id="cart-count">
                                            <?php
                                        require_once("php/keranjang.php");
                                        heade();
                                        ?>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- <ul>
                            <li>
                                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                            </li>
                        </ul> -->
                            <div class="header__cart__price">Jumlah: <span>RP.300.000,00</span></div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Hero Section Begin -->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Kategori</span>
                            </div>
                            <ul>
                                <li><a href="#">SEMBAKO</a></li>
                                <li><a href="#">Sayuran</a></li>
                                <li><a href="#">Buah-Buahan</a></li>
                                <!-- <li><a href="#">Fresh Berries</a></li>
                <li><a href="#">Ocean Foods</a></li>
                <li><a href="#">Butter & Eggs</a></li>
                <li><a href="#">Fastfood</a></li>
                <li><a href="#">Fresh Onion</a></li>
                <li><a href="#">Papayaya & Crisps</a></li>
                <li><a href="#">Oatmeal</a></li>
                <li><a href="#">Fresh Bananas</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        Semua Kategori
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="Apa yang kamu butuhkan untuk bulan ini?" />
                                    <button type="submit" class="site-btn">Cari</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+62 11.188.888</h5>
                                    <span>Siap dalam 24/7 waktu</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="filter_hero"> -->
                        <div class="hero__item set-bg" data-setbg="img/hero/mix.jpg">
                            <div class="hero__text">
                                <!-- <span>Bahan Pokok, Sayur dan Buah-buhaan</span> -->
                                <h2>
                                    Segala Macam Bahan <br />100% Langsung dari Petani dan Pekebun Lokal
                                </h2>
                                <p>
                                <h4>Biaya Pengiriman yang sangat Terjangkau</h4>
                                </p>
                                <a href="#" class="primary-btn">PESAN SEKARANG</a>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Categories Section Begin -->
        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/sembako.png">
                                <h5><a href="#">SEMBAKO</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/sayuran.jpg">
                                <h5><a href="#">Sayuran</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/buahan.jpg">
                                <h5><a href="#">Buah-Buahan</a></h5>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/categories/cat-4.jpg"
              >
                <h5><a href="#">drink fruits</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/categories/cat-5.jpg"
              >
                <h5><a href="#">drink fruits</a></h5>
              </div>
            </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->

        <!-- Featured Section Begin -->
        <form action="index.php" method="post">

            <section class="featured spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2>Featured Product</h2>
                            </div>
                            <div class="featured__controls">
                                <ul>
                                    <li class="active" data-filter="*">Semua</li>
                                    <li data-filter=".oranges">Oranges</li>
                                    <li data-filter=".fresh-meat">Fresh Meat</li>
                                    <li data-filter=".vegetables">Vegetables</li>
                                    <li data-filter=".fastfood">Fastfood</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row featured__filter">

                        <?php
                     $result = $database->getData();
                     while ($row = mysqli_fetch_assoc($result)){
                         component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                     }
                // $result= $database->getData();
                // while($row=mysqli_fetch_assoc($result)){
                //     component($row['nama_produk'],$row['harga_produk'],$row['gambar_produk'],$row['id']);
                // }
                
            //   component(namaproduk:"Beras Rakyat",hargaproduk:150000,gambarproduk:"img/featured/beras-3.jpg");
            //   component(namaproduk:"Telur Puyuh",hargaproduk:100000,gambarproduk:"img/featured/telur-puyuh-2.jpg");
            //   component(namaproduk:"Mangga",hargaproduk:50000,gambarproduk:"img/featured/pelem.jpg");
            //   component(namaproduk:"Pisang Raja Nangka",hargaproduk:55000,gambarproduk:"img/featured/gedang-2.jpg");
            //   component(namaproduk:"Strawberry",hargaproduk:120000,gambarproduk:"img/featured/strawbery-2.jpg");
            //   component(namaproduk:"Jeruk Mandarin",hargaproduk:90000,gambarproduk:"img/featured/jeruk.jpg");
            //   component(namaproduk:"Nangka",hargaproduk:45000,gambarproduk:"img/featured/nangka-3.jpg");
            //   component(namaproduk:"Telur Ayam",hargaproduk:30000,gambarproduk:"img/featured/telur-2.jpg");

            ?>

                        <!-- <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/beras-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Beras Rakyat</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/telur-puyuh-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Telur Puyuh</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/pelem.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Mangga</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/gedang-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Pisang Raja Nangka</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/strawbery-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Strawberry</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/jeruk.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Jeruk Mandarin</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/nangka-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Nangka</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/telur-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Telur Ayam</a></h6>
                            <h5>Rp.300.000,00</h5>
                        </div>
                    </div>
                </div>
            </div>-->

                    </div>
            </section>
        </form>
        <!-- Featured Section End -->


        <!-- Banner Begin -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="img/banner/banner-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="img/banner/banner-2.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Latest Product Section Begin -->
        <section class="latest-product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Latest Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/kubis.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Kubis fresh</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/pelem-1.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Mangga Arum Manis</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/dagingayam.png" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Daging Ayam Fresh</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/cabai.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Cabai Domba</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/terong.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Terong Ungu</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/terong-1.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Terong Hijau</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Top Rated Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/kangkung.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Kangkung Fresh</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/tomat.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Tomat Merah</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/slebor.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Sawi Putih</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/sledri.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Seledri</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/daun bawang.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Daun Bawang</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/sawi hijau.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Sawi Hijau</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Review Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/kayu-manis.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Kayu Manis</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/kapulaga.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>kapulaga</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/Cengkeh.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Cengkeh</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/bunga-lawang.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Bunga Lawang</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/serai.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Daun Serai</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/latest-product/kelapa.jpg" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Kelapa Tua</h6>
                                            <span>Rp.300.000,00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Product Section End -->

        <!-- Blog Section Begin -->
        <section class="from-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title from-blog__title">
                            <h2>Informasi Terbaru</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-1.jpg" alt="" />
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> November 05, 2022</li>
                                    <li><i class="fa fa-comment-o"></i> 6</li>
                                </ul>
                                <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                <p>
                                    Sed quia non numquam modi tempora indunt ut labore et dolore
                                    magnam aliquam quaerat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-2.jpg" alt="" />
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                <p>
                                    Sed quia non numquam modi tempora indunt ut labore et dolore
                                    magnam aliquam quaerat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-3.jpg" alt="" />
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Visit the clean farm in the US</a></h5>
                                <p>
                                    Sed quia non numquam modi tempora indunt ut labore et dolore
                                    magnam aliquam quaerat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

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

</html>