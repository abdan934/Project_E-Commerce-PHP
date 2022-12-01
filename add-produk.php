<?php 
include './php/config.php';
// include './php/createDb.php';

$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$gambar_produk = $_POST['gambar_produk'];
$satuan = $_POST['satuan'];
$expired = $_POST['expired'];

mysqli_query($conn,"INSERT INTO produk SET nama_produk='$nama_produk',harga_produk='$harga_produk',gambar_produk='$gambar_produk',satuan='$satuan',expired='$expired'");

echo"  <script>alert('Produk Berhasil Ditambahkan');
window.location='list-produk.php';
</script>";
// header("location:tambah.php?pesan=input");
?>