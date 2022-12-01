<?php 
 
include './php/config.php';

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga_produk'];
$gambar = $_POST['gambar_produk'];
$satuan = $_POST['satuan'];
$expired = $_POST['expired'];

mysqli_query($conn,"UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga', gambar_produk='$gambar', satuan ='$satuan', expired ='$expired' WHERE id_produk='$id_produk'");

echo" <script>alert('produk Berhasil Diubah.!');
    window.location='list-produk.php';
    </script>";
// header("location:list-produk.php?pesan=update");
?>