<?php
function header(){
function isi(){
if(isset($_SESSION['keranjang'])){
$count = count($_SESSION['keranjang']);
echo"<span id=\"isi_keranjang\">$count</span></a>";
}else{
echo"<span id=\"isi_keranjang\">0</span></a>";
}
}
$head="
<ul>
    <li>
        <a href=\"#\"><i class=\"fa fa-heart\"></i> <span>1</span></a>
    </li>
    <li>
        <a href=\"./keranjang.php\"><i class=\"fa fa-shopping-bag nav-item active\"></i>
            // <?php 
        isi();
    // ?>
</li>
</ul>
";
echo $head;
}
?>