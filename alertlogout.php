<?php 
                                echo"
                                <script>
                                        let text;
                                        if (confirm(\"Anda yakin ingin logout..?!\") == true) {
                                         text = \"Berhasil logout!\"; window.location='logout.php';
                                         } else {
                                        text = \" Kembali!\"; window.location='index.php' ; } 
                                        </script>
                                        "?>