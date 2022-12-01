<?php 
include './php/config.php';

$id_produk = $_GET['id'];
mysqli_query($conn,"DELETE FROM produk WHERE id_produk='$id_produk'");
 
echo" <script>alert('produk Berhasil DiHapus.!');
    window.location='list-produk.php';
    </script>";
// header("location:list-akun.php?pesan=hapus");
?>