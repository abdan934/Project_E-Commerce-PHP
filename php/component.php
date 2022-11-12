<?php

function component($namaproduk,$hargaproduk,$gambarproduk,$id_produk){
    $element = "
    
    <div class=\"col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat\">
    <div class=\"featured__item\">
        <div class=\"featured__item__pic set-bg\" data-setbg=\"$gambarproduk\">
            <ul class=\"featured__item__pic__hover\">
                <li>
                    <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-retweet\"></i></a>
                </li>
                <li>
                    <a type=\"submit\" href=\"#\"><i class=\"fa fa-shopping-cart\" name=\"add\"></i></a>
                    <input type=\"hidden\" name=\"id_produk\" value=\"$id_produk\">
                </li>
            </ul>
        </div>
        <div class=\"featured__item__text\">
            <h6><a href=\"#\">$namaproduk</a></h6>
            <h5>Rp.$hargaproduk,00</h5>
        </div>
    </div>
</div>
    
    ";
    echo $element;
}
?>