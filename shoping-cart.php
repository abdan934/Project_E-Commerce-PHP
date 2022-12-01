<?php

session_start();

require_once ("php/createDb.php");
require_once ("php/component.php");

//hapus keranjang
$db = new createDb("productdb", "producttb");

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


// $db = new CreateDb("produkdb", "produktb");

// if (isset($_POST['hapus'])){
//   if ($_GET['action'] == 'hapus'){
//       foreach ($_SESSION['keranjang'] as $key => $value){
//           if($value["id_produk"] == $_GET['id']){
//               unset($_SESSION['keranjang'][$key]);
//               echo "<script>alert('Produk Telah Dihapus...!')</script>";
//               echo "<script>window.location = 'shoping-cart.php'</script>";
//           }
//       }
//   }
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
        <?php 
include 'header.php';
?>

        <!-- Hero Section Begin -->
        <section class="hero hero-normal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>All departments</span>
                            </div>
                            <ul>
                                <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                <li><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Ocean Foods</a></li>
                                <li><a href="#">Butter & Eggs</a></li>
                                <li><a href="#">Fastfood</a></li>
                                <li><a href="#">Fresh Onion</a></li>
                                <li><a href="#">Papayaya & Crisps</a></li>
                                <li><a href="#">Oatmeal</a></li>
                                <li><a href="#">Fresh Bananas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        All Categories
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="What do yo u need?" />
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+65 11.188.888</h5>
                                    <span>support 24/7 time</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Shopping Cart</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.php">Home</a>
                                <span>Shopping Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Shoping Cart Section Begin -->
        <form action="shoping-cart.php?action=remove&id=$id_produk\" method="post">
            <section class="shoping-cart spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shoping__cart__table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="shoping__product">Products</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <form action="cart.php?action=remove&id=$productid" method="post"
                                                class="cart-items">
                                                <?php 
                                    require_once("./php/component.php");

                                    //isi keranjang

                                    $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'],column_key:'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Kosong</h5>";
                    }


                                //     $total=0;
                                //     if (isset($_SESSION['keranjang'])){
                                //       $id_produk = array_column($_SESSION['keranjang'],column_key:'id_produk');
                                      
                                //       $result = $db->getData();
                                //       while ($row = mysqli_fetch_assoc($result)){
                                //           foreach ($id_produk as $id){
                                //               if ($row['id'] == $id){
                                //                   cartElement($row['nama_produk'], $row['gambar_produk'],$row['harga_produk'], $row['id']);
                                //                   $total = $total + (int)$row['harga_produk'];
                                //               }
                                //           }
                                //       }
                                //   }else{
                                //       echo "<h5>Kosong</h5>";
                                //   }
                                    ?>
                                                <!-- <tr>
                                        <td class="shoping__cart__item">
                                            <img width="150px" height="auto" src="img/featured/telur-2.jpg" alt="" />
                                            <h5>Nama Produk</h5>
                                        </td>
                                        <td class="shoping__cart__price">$55.00</td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1" />
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">$110.00</td>
                                        <td class="shoping__cart__item__close">
                                            <span><button class="btn btn-danger" name="hapus">Hapus</button></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="img/cart/cart-2.jpg" alt="" />
                                            <h5>Fresh Garden Vegetable</h5>
                                        </td>
                                        <td class="shoping__cart__price">$39.00</td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1" />
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">$39.99</td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="img/cart/cart-3.jpg" alt="" />
                                            <h5>Organic Bananas</h5>
                                        </td>
                                        <td class="shoping__cart__price">$69.00</td>
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
                                        </td>
                                    </tr> -->
                                            </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shoping__cart__btns">
                                <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                                <a href="#" class="primary-btn cart-btn cart-btn-right"><span
                                        class="icon_loading"></span>
                                    Upadate Cart</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shoping__continue">
                                <div class="shoping__discount">
                                    <h5>Discount Codes</h5>
                                    <form action="#">
                                        <input type="text" placeholder="Enter your coupon code" />
                                        <button type="submit" class="site-btn">APPLY COUPON</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shoping__checkout">
                                <h5>Cart Total</h5>
                                <ul>
                                    <li>Subtotal <span>$454.98</span></li>
                                    <li>Total <span>$454.98</span></li>
                                </ul>
                                <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        <!-- Shoping Cart Section End -->

        <!-- Footer Section Begin -->
        <?php
        include 'footer.php';
        ?>
        <!-- Footer Section End -->

    </body>

</html>