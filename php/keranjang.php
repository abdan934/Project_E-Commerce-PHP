<?php
function head(){
    if (isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
        echo "<span id=\"cart_count\">$count</span>";
    }else{
        echo "<span id=\"cart_count\">0</span>";
    }
}

?>