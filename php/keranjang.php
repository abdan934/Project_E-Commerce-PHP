<?php
function heade(){
    
    if(isset($_SESSION['keranjang'])){
    $count = count($_SESSION['keranjang']);
    echo $count;
    }else{
    echo"0";
    };
}

?>