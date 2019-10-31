<?php
$con1 = mysqli_connect("localhost","root","","ecom_store");


$url="cart.php";

echo "hello";

if(isset($_GET['p_id']))
{
    
    $id=$_GET['p_id']; echo $id;
    $sql5="DELETE FROM cart_product WHERE P_ID='$id'";
    $res=mysqli_query($con1,$sql5);
    echo "<meta http-equiv='refresh' content='0;url=$url'>";
}
?>