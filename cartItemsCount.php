<?php
function countCartItems()
{
$con1 = mysqli_connect("localhost","root","","ecom_store");


//$url="cart.php";

    $sql9="SELECT COUNT(P_ID) FROM cart_product";
    $resu=mysqli_query($con1,$sql9);
    $count=mysqli_fetch_assoc($resu);
    echo $count["COUNT(P_ID)"];
    //echo $url;
  //  echo "<meta http-equiv='refresh' content='0;url=$url'>";
}
