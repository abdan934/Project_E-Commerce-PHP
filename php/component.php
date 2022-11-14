<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">$$productprice</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

// function component($namaproduk,$hargaproduk,$gambarproduk,$id_produk){
//     $element = "
    
//     <div class=\"col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat\">
//     <div class=\"featured__item\">
//         <div class=\"featured__item__pic set-bg\" data-setbg=\"$gambarproduk\">
//             <ul class=\"featured__item__pic__hover\">
//                 <li>
//                     <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
//                 </li>
//                 <li>
//                     <a href=\"#\"><i class=\"fa fa-retweet\"></i></a>
//                 </li>
//                 <li>
//                 <a><button class=\"btn btn-transparent\" type=\"submit\" name=\"add\"><i class=\"fa fa-shopping-cart\"></i></button></a>
//                 <input type='hidden' name='id_produk' value='$id_produk'>
//                     <!--<a type=\"submit\" name=\"add\"><i class=\"fa fa-shopping-cart\"></i></a>-->
//                 </li>
//             </ul>
//         </div>
//         <div class=\"featured__item__text\">
//             <h6><a href=\"#\">$namaproduk</a></h6>
//             <h5>Rp.$hargaproduk,00</h5>
//         </div>
//     </div>
// </div>
    
//     ";
//     echo $element;
// }

// function cartElement($namaproduk,$hargaproduk,$gambarproduk,$id_produk){
//     // $gambar = new $hargaproduk;
//     // $harga = new $gambarproduk;
//     $element="
//     <tr>
//     <td class=\"shoping__cart__item\">
//         <img src=\"$hargaproduk\" width=\"150px\" height=\"auto\" />
//     <h5>$namaproduk</h5>
// </td>
// <td class=\"shoping__cart__price\">Rp.$gambarproduk,00</td>
// <td class=\"shoping__cart__quantity\">
//     <div class=\"quantity\">
//         <div class=\"pro-qty\">
//             <input type=\"text\" value=\"1\" />
//         </div>
//     </div>
// </td>
// <td class=\"shoping__cart__total\">Rp.$gambarproduk,00</td>
// <td class=\"shoping__cart__item__close\">
//     <span><button class=\"btn btn-danger\" name=\"hapus\">Hapus</button></span>
// </td>
// </tr>

// ";
// echo $element;
// }
?>