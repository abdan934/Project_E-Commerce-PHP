<?php 
 
include './php/config.php';

$id_toko = $_POST['id_toko'];
$toko = $_POST['nama_toko'];
$pemilik = $_POST['nama_pemilik'];
$alamat = $_POST['alamat'];
$no = $_POST['no_hp'];

mysqli_query($conn,"UPDATE toko SET nama_toko='$toko', nama_pemilik='$pemilik', alamat='$alamat', no_hp='$no' WHERE id_toko='$id_toko'");

echo" <script>alert('Toko Berhasil Diubah.!');
    window.location='list-toko.php';
    </script>";
// header("location:list-toko.php?pesan=update");
?>