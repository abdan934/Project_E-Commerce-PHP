<?php 
include './php/config.php';

$id_toko = $_GET['id'];
mysqli_query($conn,"DELETE FROM toko WHERE id_toko='$id_toko'");
 
echo" <script>alert('Toko berhasil dihapus.!');
    window.location='list-toko.php';
    </script>";
// header("location:list-akun.php?pesan=hapus");
?>