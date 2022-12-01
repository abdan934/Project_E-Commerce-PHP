<?php
// session_start();
//  include'./php/config.php';
//  require_once ("./php/createDb.php");
//  require_once ("./php/component.php");
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

        
                                        include './php/config.php';
                                        // $no = 1;
                                        $id=$_GET['id'];
                                        $data = mysqli_query($conn,"SELECT * FROM produk where id_produk='$id'");
                                        while($tampil = mysqli_fetch_array($data)){
                                            ?>
        <form class="mt-5 mb-5" action="update-produk.php" method="post">

            <table>
                <tr>
                    <td class="shoping__cart__item mt-3">
                        Nama Produk
                    </td>
                    <td class="shoping__cart__item">
                        <input type="hidden" name="id_produk" value="<?php echo $tampil['id_produk']; ?>"
                            class="form-control ml-3" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <input type="text" name="nama_produk" value="<?php echo $tampil['nama_produk']; ?>"
                            class="form-control ml-5 mt-2" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </td>
                </tr>
                <tr>
                    <td class="shoping__cart__price mt-3">
                        Harga
                    </td>
                    <td class="shoping__cart__quantity">
                        <input type="text" name="harga_produk" value="<?php echo $tampil['harga_produk']; ?>"
                            class="form-control ml-5 mt-2" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </td>
                </tr>
                <tr>
                    <td class="shoping__cart__total">
                        Url Gambar
                    </td>
                    <td class="shoping__cart__total">
                        <input type="text" name="gambar_produk" value="<?php echo $tampil['gambar_produk']; ?>"
                            class="form-control ml-5 mt-2" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </td>
                </tr>
                <tr>
                    <td class="shoping__cart__price mt-3">
                        Satuan
                    </td>
                    <td class="shoping__cart__quantity">
                        <input type="text" name="satuan" value="<?php echo $tampil['satuan']; ?>"
                            class="form-control ml-5 mt-2" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </td>
                </tr>
                <tr>
                    <td class="shoping__cart__price mt-3">
                        Expired
                    </td>
                    <td class="shoping__cart__quantity">
                        <input type="text" name="expired" value="<?php echo $tampil['expired']; ?>"
                            class="form-control ml-5 mt-2" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </td>
                </tr>
                <!-- <td class="shoping__cart__item__close"> -->
                <!-- <span> -->
                <!-- <button type="" class="btn btn-danger ml-5 mt-2" name="">Batal</button></span> -->
                <!-- </td> -->
                <td class="shoping__cart__item__close">
                    <span><button type="submit" class="btn btn-primary ml-5 mt-2" name="edit">Ubah</button></span>
                </td>
                </tr>
                </tbody>
            </table>
            <?php 
                }
                ?>

            <!-- footer -->
            <?php 
include 'footer.php';
?>
            <!-- end footer -->
    </body>

</html>