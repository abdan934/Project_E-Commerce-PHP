<?php 
 
include './php/config.php';
$id = $_POST['id_user'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];

mysqli_query($conn,"UPDATE user SET username='$username', nama='$nama', password='$password' WHERE id_user='$id'");

echo" <script>alert('Akun Berhasil Diubah.!');
    window.location='list-akun.php';
    </script>";
// header("location:list-akun.php?pesan=update");
?>