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
                <a><button class=\"btn btn-transparent\" type=\"submit\" name=\"add\"><i class=\"fa fa-shopping-cart\"></i></button></a>
                <input type='hidden' name='id_produk' value='$id_produk'>
                    <!--<a type=\"submit\" name=\"add\"><i class=\"fa fa-shopping-cart\"></i></a>-->
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

function cartElement($namaproduk,$hargaproduk,$gambarproduk,$id_produk){
    // $gambar = new $hargaproduk;
    // $harga = new $gambarproduk;
    $element="
    <tr>
    <td class=\"shoping__cart__item\">
        <img src=\"$hargaproduk\" width=\"150px\" height=\"auto\" />
    <h5>$namaproduk</h5>
</td>
<td class=\"shoping__cart__price\">Rp.$gambarproduk,00</td>
<td class=\"shoping__cart__quantity\">
    <div class=\"quantity\">
        <div class=\"pro-qty\">
            <input type=\"text\" value=\"1\" />
        </div>
    </div>
</td>
<td class=\"shoping__cart__total\">Rp.$gambarproduk,00</td>
<td class=\"shoping__cart__item__close\">
    <span><button class=\"btn btn-danger\" name=\"hapus\">Hapus</button></span>
</td>
</tr>

";
echo $element;
}
?>