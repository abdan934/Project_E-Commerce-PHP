<?php

function component($nama_produk, $harga_produk, $gambar_produk, $id_produk,$satuan,$expired){
    $element = "
    <tr>
    <td class=\"shoping__cart__total\">$id_produk</td>
<td class=\"shoping__cart__item\">
    <img src=\"$gambar_produk?>\" alt=\"\" />
<h5>GEDANG $nama_produk</h5>
</td>
<td class=\"shoping__cart__price\">$harga_produk</td>
<td class=\"shoping__cart__quantity\">
    $satuan
</td>
<td class=\"shoping__cart__total\">$expired</td>
<td class=\"shoping__cart__item__close\">
    <span class=\"icon_close\"></span>
</td>
</tr>
";
echo $element;
}


function cartElement($productimg, $productname, $productprice, $productid){
$element = "
form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
<tr>
    <td class=\"shoping__cart__item\">
        <img src=\"$productimg\" width=\"150px\" height=\"auto\" />
        <h5>$productname</h5>
    </td>
    <td class=\"shoping__cart__price\">Rp.$productprice,00</td>
    <td class=\"shoping__cart__quantity\">
        <div class=\"quantity\">
            <div class=\"pro-qty\">
                <input type=\"text\" value=\"1\" />
            </div>
        </div>
    </td>
    <td class=\"shoping__cart__total\">Rp.$productprice,00</td>
    <td class=\"shoping__cart__item__close\">
        <span><button class=\"btn btn-danger\" name=\"remove\">Hapus</button></span>
    </td>
</tr>
</form>



<!-- <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
    //                 <div class=\"border rounded\">
    //                     <div class=\"row bg-white\">
    //                         <div class=\"col-md-3 pl-0\">
    //                             <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
    //                         </div>
    //                         <div class=\"col-md-6\">
    //                             <h5 class=\"pt-2\">$productname</h5>
    //                             <small class=\"text-secondary\">Seller: dailytuition</small>
    //                             <h5 class=\"pt-2\">$$productprice</h5>
    //                             <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
    //                             <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
    //                         </div>
    //                         <div class=\"col-md-3 py-5\">
    //                             <div>
    //                                 <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
    //                                 <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
    //                                 <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //             </form>
    -->
";
echo $element;
}
?>

<!-- // function akun(){
// // include "config.php";
// // // $nama,$username,$password
// // $ambildata = mysqli_query($conn,"SELECT * from user");

// // while ($tampil = mysqli_fetch_array($ambildata)) {
// // echo "
// // // <tr>
//     // // <td class=\"shoping__cart__item\">
//         // // <h5>$tampil[nama]</h5>
//         // // </td>
//     // // <td class=\"shoping__cart__price\">$tampil[username]</td>
//     // // <td class=\"shoping__cart__quantity\">
//         // // $tampil[password]
//         // // </td>
//     // // <td class=\"shoping__cart__total\">$tampil[level]</td>
//     // // <td class=\"shoping__cart__item__close\">
//         // // <span><button class=\"btn btn-success\" name=\"edit\">Edit</button></span>
//         // // </td>
//     // // <td class=\"shoping__cart__item__close\">
//         < // // <span><button class=\"btn btn-danger\" href=\"hapus.php?id= //echo $tampil['username'];\" -->

<!-- value='hapus' // // name=\"hapus\">Hapus</button></span> -->

<!-- </td> -->

<!-- </tr>  -->

<!-- // ";

// // }}

// // if(isset($_GET['hapus'])){
// // mysqli_query($conn,"DELETE FROM user WHERE username='$_GET[username]'");
// // echo"<script> -->

<!-- // alert('Akun berhasil dihapus..!!');
// // document.location = 'list-akun.php'/
// // // }
// // }



// // function component($namaproduk,$hargaproduk,$gambarproduk,$id_produk){
// // $element = "

// // <div class=\"col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat\">
//     // <div class=\"featured__item\">
//         // <div class=\"featured__item__pic set-bg\" data-setbg=\"$gambarproduk\">
//             // <ul class=\"featured__item__pic__hover\">
//                 // <li>
//                     // <a href=\"#\"><i class=\"fa fa-heart\"></i></a>
//                     // </li>
//                 // <li>
//                     // <a href=\"#\"><i class=\"fa fa-retweet\"></i></a>
//                     // </li>
//                 // <li>
//                     // <a><button class=\"btn btn-transparent\" type=\"submit\" name=\"add\"><i class=\"fa // echo
//                                 $element; // } // function cartElement($namaproduk, $hargaproduk, $gambarproduk,
//                                 $id_produk) { // // $gambar=new $hargaproduk; // // $harga=new $gambarproduk; //
//                                 $element="
//         // <tr>
//         // <td class=\" shoping__cart__item\">
//                                 // <img src=\"$hargaproduk\" width=\"150px\" height=\"auto\" />
//                                 // <h5>$namaproduk</h5>
//                                 // </td>
//                                 // <td class=\"shoping__cart__price\">Rp.$gambarproduk,00</td>
//                                 // <td class=\"shoping__cart__quantity\">
//                                     // <div class=\"quantity\">
//                                         // <div class=\"pro-qty\">
//                                             // <input type=\"text\" value=\"1\" />
//                                             // </div>
//                                         // </div>
//                                     // </td>
//                                 // <td class=\"shoping__cart__total\">Rp.$gambarproduk,00</td>
//                                 // <td class=\"shoping__cart__item__close\">
//                                     // <span><button class=\"btn btn-danger\" name=\"hapus\">Hapus</button></span>
//                                     // </td>
//                                 // </tr>

//                                 // ";
//                                 // echo $element;
//                                 // }
//  -->