<?php 
include './php/config.php';
// include './php/createDb.php';

$nama = $_POST['nama_toko'];
$pemilik = $_POST['nama_pemilik'];
$alamat = $_POST['alamat'];
$no = $_POST['no_hp'];

//mysqli_query($conn,"INSERT INTO toko SET nama_toko='$nama',nama_pemilik='$pemilik',alamat='$alamat',no_hp='$no'");


// header("location:tambah.php?pesan=input");
if (isset($_POST['nama_toko'])) {
    // $nis = $_POST['nis'];
    $user = $_POST['nama_toko'];
    $query = mysqli_query($conn, "SELECT nama_toko FROM toko WHERE nama_toko = '$user'");
   
    // $query = mysqli_query($conn, "SELECT nis FROM tb_test WHERE nis = '$nis'"); 
   
    if($query->num_rows > 0) {
        echo"  <script>alert('Toko telah terdaftar');
    window.location='tambah-toko.php';
    </script>";
    } else {
    //  mysqli_query($conn, "INSERT INTO tb_test (nis) VALUES ('$nis')");
    // mysqli_query($conn,"INSERT INTO user  SET  nama= '$_POST[nama]',username='$_POST[username]', password='$_POST[password]',level='user'");
    mysqli_query($conn,"INSERT INTO toko SET nama_toko='$nama',nama_pemilik='$pemilik',alamat='$alamat',no_hp='$no'");

    echo"  <script>alert('Toko Berhasil Ditambahkan');
    window.location='list-toko.php';
    </script>";
    }
}else{}
?>