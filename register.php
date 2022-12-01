<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Ogani</title>
        <link rel="stylesheet" type="text/css" href="./css/style-login.css">
    </head>

    <body>
        <section>
            <div class="box">
                <div class="boxContainer">
                    <div class="form">
                        <h2>Register Form</h2>
                        <form action="" method="POST">
                            <div class="inputBox">
                                <input type="text" placeholder="Nama Lengkap" id="nama" name="nama" value="" required>
                            </div>
                            <div class=" inputBox">
                                <input type="text" placeholder="Username" id="username" name="username" value=""
                                    required>
                            </div>
                            <div class="inputBox">
                                <input type="password" placeholder="Password" id="password" name="password" value=""
                                    required>
                            </div>
                            <!-- <div class="inputBox">
                                <input type="password" placeholder="Confirm Password" name="cpassword" value=""
                                    required>
                            </div> -->
                            <!-- <div class=" form-check">
                                <input type="checkbox">
                                <label>Remember Me</label>
                            </div> -->
                            <div class="inputBox">
                                <input type="submit" name="submit" class="" value="Register">
                            </div>
                            <!-- <p class="forget">Forgot Password? <a href="#">Click Here</a></p> -->
                            <p class="forget">You have an account? <a href="login.php">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
<?php 

include './php/config.php';
// include './php/createDb.php'

if(isset($_POST['submit'])){
    
    if (isset($_POST['username'])) {
        // $nis = $_POST['nis'];
        $user = $_POST['username'];
        $query = mysqli_query($conn, "SELECT username FROM user WHERE username = '$user'");
       
        // $query = mysqli_query($conn, "SELECT nis FROM tb_test WHERE nis = '$nis'"); 
       
        if($query->num_rows > 0) {
         echo "<script>alert('Username sudah terdaftar');</script>";
        } else {
        //  mysqli_query($conn, "INSERT INTO tb_test (nis) VALUES ('$nis')");
        mysqli_query($conn,"INSERT INTO user  SET  nama= '$_POST[nama]',username='$_POST[username]', password='$_POST[password]',level='user'");
        echo "<script>alert('Akun Berhasil Ditambahkan');
        window.location='login.php';
        </script>";
        }
       }

            // mysqli_query($conn,"INSERT INTO user  SET  nama= '$_POST[nama]',username='$_POST[username]', password='$_POST[password]',level='user'");
            // echo "<script>alert('Akun Berhasil Ditambahkan');
            // window.location='login.php';
            // </script>";

    }else{
        // echo "<script>alert('Gagal Ditambahkan');
        // window.location='register.php';
        // </script>";
    }

?>