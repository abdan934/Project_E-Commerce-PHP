<?php

// session_start();

// require_once ("./php/createDb.php");
// require_once ("./php/component.php");

// $database = new CreateDb(dbname:"productdb",tablename:"producttb");
// $datauser = new CreateUser(dbname:"productdb",tablename:"user")

?>


<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8" />
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <?php include 'header.php'; ?>

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
        <!-- <form action="index.php" method="post"> -->
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
require_once ("./php/component.php");

                    $data = mysqli_query($conn,"SELECT * FROM produk");
                    while($d= mysqli_fetch_assoc($data)){
?>

                        <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="<?php echo $d['gambar_produk'] ?>">
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
                                    <h6><a href="#"><?php echo $d['nama_produk'] ?></a></h6>
                                    <h5>Rp.<?php echo $d['harga_produk'] ?>,00</h5>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                        ?>


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
                            <h4>Produk Kg</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">

                                    <?php
require_once ("./php/component.php");

                    $data = mysqli_query($conn,"SELECT * FROM produk WHERE satuan ='Kg'");
                    while($d= mysqli_fetch_assoc($data)){
?>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?php echo $d['gambar_produk'] ?>" alt="" />
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>
                                                <?php echo $d['nama_produk'] ?>
                                            </h6>
                                            <span>Rp.
                                                <?php echo $d['harga_produk'] ?>,00
                                            </span>
                                        </div>
                                    </a>
                                    <?php
                    }
                        ?>
                                    <!-- <a href="#" class="latest-product__item">
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
                                    </a> -->
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

                <style type="text/css">
                body {
                    font-family: roboto;
                }

                table {
                    margin: 0px auto;
                }
                </style>

                <div style="width: 800px;margin: 0px auto;">
                    <canvas id="batang"></canvas>
                </div>
                <br />
                <br />

                <script>
                const ctx = document.getElementById('batang');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Kg', 'Karung', 'Epek', 'Peti', 'Bungkus'],
                        datasets: [{
                            label: 'Satuan',
                            data: [<?php 
					$exp_1 = mysqli_query($conn,"select * from produk where satuan='Kg'");
					echo mysqli_num_rows($exp_1);
					?>, <?php 
					$exp_2 = mysqli_query($conn,"select * from produk where satuan='Karung'");
					echo mysqli_num_rows($exp_2);
					?>, <?php 
					$exp_3 = mysqli_query($conn,"select * from produk where satuan='Epek'");
					echo mysqli_num_rows($exp_3);
					?>, <?php 
					$exp_4 = mysqli_query($conn,"select * from produk where satuan='Peti'");
					echo mysqli_num_rows($exp_4);
					?>, <?php 
					$exp_5 = mysqli_query($conn,"select * from produk where satuan='Bungkus'");
					echo mysqli_num_rows($exp_5);
					?>],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                })
                </script>
                <!-- <div class="row">
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
                    </div> -->
            </div>
            </div>
        </section>
        <!-- Blog Section End -->

        <!-- footer -->
        <?php
                    include 'footer.php';
                    ?>
        <!-- end footer -->

    </body>

</html>

</html>