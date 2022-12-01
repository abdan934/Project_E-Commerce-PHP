<?php 
include './php/config.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM user WHERE id_user='$id'");
 
echo" <script>alert('Akun Berhasil Dihapus.!');
    window.location='list-akun.php';
    </script>";
// header("location:list-akun.php?pesan=hapus");
?>