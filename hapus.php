<?php 
include './php/config.php';
$id = $_GET['id_user'];
mysqli_query($conn,"DELETE FROM user WHERE id='$id'");
 
header("location:list-akun.php?pesan=hapus");
?>