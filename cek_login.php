<?php

session_start();

include 'php/config.php';

$username = mysqli_escape_string($conn,$_POST['username']);
$password = mysqli_escape_string($conn,$_POST['password']);

$data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

			echo "<script>document.location = 'index.php'</script>";

}else{
	echo "<script>alert('Username atau Password Salah..!'); 
	document.location ='login.php'</script>";
};
?>