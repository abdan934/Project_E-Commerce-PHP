<?php
//  require_once ("cek_login.php");
//  $user = new CreateUser(dbname:"productdb",tablename:"user");


include './php/config.php';


// require_once ("./php/createDb.php");
// $database = new CreateDb(dbname:"productdb",tablename:"producttb");
// $datauser = new CreateUser(dbname:"productdb",tablename:"user");
// $datatoko = new CreateToko(dbname:"productdb",tablename:"toko");

error_reporting(0);

session_start();

// if(isset($_GET['pesan'])){
//     if($_GET['pesan'] == "gagal"){
//         echo "Login gagal! username dan password salah!";
//     }else if($_GET['pesan'] == "logout"){
//         echo "Anda telah berhasil logout";
//     }else if($_GET['pesan'] == "belum_login"){
//         echo "Anda harus login untuk mengakses halaman admin";
//     }
// }

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

// if (isset($_POST['submit'])) {
// 	$username = $_POST['username'];
// 	$password = md5($_POST['password']);
// 	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
// 	$result = mysqli_query($conn, $sql);
// 	if ($result->num_rows > 0) {
// 		$row = mysqli_fetch_assoc($result);
// 		$_SESSION['username'] = $row['username'];
// 		header("Location:index.php");
// 	} else {
// 		echo "<script>alert('User atau password Anda salah. Silahkan coba lagi!')</script>";
// 	}
// }

?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Ogani</title>
        <link rel="stylesheet" type="text/css" href="./css/style-login.css">
    </head>

    <body>
        <?php
        if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
        echo "<script>alert('Login Gagal.!')</script>";
        }else if($_GET['pesan'] == "logout"){
         echo "<script>alert('Berhasil LogOut.!')</script>";
       
        }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin";
        }
        }
        ?>
        <section>
            <div class="box">
                <div class="boxContainer">
                    <div class="form">
                        <h2>Login Form</h2>
                        <form action="cek_login.php" method="post">
                            <div class="inputBox">
                                <input type="text" placeholder="Username" name="username" required>
                            </div>
                            <div class="inputBox">
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox">
                                <label>Remember Me</label>
                            </div>
                            <div class="inputBox">
                                <input type="submit" class="" value="Login">
                            </div>
                            <p class="forget">Forgot Password? <a href="#">Click Here</a></p>
                            <p class="forget">Don't have an account? <a href="register.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>