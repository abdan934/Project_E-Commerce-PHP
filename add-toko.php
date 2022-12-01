<?php 
include './php/config.php';
// include './php/createDb.php';

$nama = $_POST['nama_toko'];
$pemilik = $_POST['nama_pemilik'];
$alamat = $_POST['alamat'];
$no = $_POST['no_hp'];

mysqli_query($conn,"INSERT INTO toko SET nama_toko='$nama',nama_pemilik='$pemilik',alamat='$alamat',no_hp='$no'");

echo"  <script>alert('Toko Berhasil Ditambahkan');
window.location='list-toko.php';
</script>";
// header("location:tambah.php?pesan=input");
?>