<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Fresh E-Commerce</title>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <meta charset="UTF-8" />
        <meta name="description" content="Ogani Template" />
        <meta name="keywords" content="Ogani, unica, creative, html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>E-Commerce Fresh</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
            rel="stylesheet" />

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

    <body>
        <!-- header -->
        <?php
        include 'header.php';
        ?>
        <!-- end header -->
        <style type="text/css">
        body {
            font-family: roboto;
        }

        table {
            margin: 0px auto;
        }
        </style>


        <center>
            <h2>Chart</h2>
        </center>


        <?php 
	include './php/config.php';
	?>

        <div style="width: 800px;margin: 0px auto;">
            <canvas id="Chart"></canvas>
        </div>

        <br />
        <br />


        <table border="1">
            <!-- <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Fakultas</th>
                </tr>
            </thead> -->
            <!-- <tbody>
                <?php 
			// $no = 1;
			// $data = mysqli_query($conn,"select * from produk");
			// while($d=mysqli_fetch_array($data)){
			// 	?>
            //     <tr>
            //         <td><?php //echo $no++; ?></td>
            //         <td><?php //echo $d['nama_produk']; ?></td>
            //         <td><?php //echo $d['harga_produk']; ?></td>
            //         <td><?php //echo $d['expired']; ?></td>
            //     </tr>
            //     <?php 
			// }
			?>
            </tbody> -->
        </table>




        <script>
        const ctx = document.getElementById('Chart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2023', '2024', '2025', '2026', '2027'],
                datasets: [{
                    label: 'Lama Expired',
                    data: [<?php 
					$exp_1 = mysqli_query($conn,"select * from produk where expired='2023'");
					echo mysqli_num_rows($exp_1);
					?>, <?php 
					$exp_2 = mysqli_query($conn,"select * from produk where expired='2024'");
					echo mysqli_num_rows($exp_2);
					?>, <?php 
					$exp_3 = mysqli_query($conn,"select * from produk where expired='2025'");
					echo mysqli_num_rows($exp_3);
					?>, <?php 
					$exp_4 = mysqli_query($conn,"select * from produk where expired='2026'");
					echo mysqli_num_rows($exp_4);
					?>, <?php 
					$exp_5 = mysqli_query($conn,"select * from produk where expired='2027'");
					echo mysqli_num_rows($exp_5);
					?>],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        })
        </script>


        <br />
        <br />

        <table border="1">
            <!-- <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Fakultas</th>
                </tr>
            </thead> -->
            <!-- <tbody>
                <?php 
			// $no = 1;
			// $data = mysqli_query($conn,"select * from produk");
			// while($d=mysqli_fetch_array($data)){
			// 	?>
            //     <tr>
            //         <td><?php //echo $no++; ?></td>
            //         <td><?php //echo $d['nama_produk']; ?></td>
            //         <td><?php //echo $d['harga_produk']; ?></td>
            //         <td><?php //echo $d['expired']; ?></td>
            //     </tr>
            //     <?php 
			// }
			?>
            </tbody> -->
        </table>


        <!-- footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- end footer -->
    </body>

</html>