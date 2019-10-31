<?php 

include("includes/db.php");
include("cartItemsCount.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>page</title>
    <link rel="stylesheet" type="text/css" href="web7.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"> 
    <link rel="stylesheet" href="styles.css" /> 
  
    
</head>
<meta charset="UTF-8"> 
 

<body>
<!---------------------------------HEADER CONTENTS STARTS--------------------------->
<main class="main">
        <div class="navbar">
            <div class="iconbar">
            <img src="logo.jpeg" height="100px">
             <a class="loginhead" href="#"></a>
                  <ul>
                  <li><font size="6"><a href="logout.php">LOGOUT</a></font></li>
                  </ul> 
                <a class="notification" title="Cart" href="cart.php"><span><i class="fa fa-shopping-cart"></i></span>
                  <span class="badge"><?php countCartItems();?></span></a> 
                  <a class="notification" title="Home" href="home.php" ><i class="fa fa-home"></i></a> 
                </div>
           </div>
       
          </main>  
  <!-------------------------------HEADER CONTENTS ENDS----------------------------------->
 
 <!---------------------------------------CART AND BILLING CONTENTS STARTS --------------------------->
 
 <section class="container content-section">
    <h2 class="section-header">CART</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM IMAGE</span>
        <span class="cart-quantity cart-header cart-column">ITEM NAME</span>
        <span class="cart-quantity cart-header cart-column">PRICE</span>
    
                </div>
                <div class="cart-items">

<!------------------------------------CART AND BILLING CONTENTS ENDS -------------------------------->


<!------------------------------------------ PHP STARTS -------------------------------------------->
<?php

$con1 = mysqli_connect("localhost","root","","ecom_store");



//$P_ID =$_GET['pro_id'];
//echo $P_ID;
/*
if($P_ID=='28')
{
    $P_IMAGE="yyy";//$_GET['pro_img1'];
    $P_NAME="fff";//$_GET['pro_title'];
    $P_PRICE="jjj";//$_GET['pro_price'];
}
elseif($P_ID=='29')
{
$P_IMAGE="";
$P_NAME="....";
$P_PRICE="Rs.0";
}

*/

if(isset($_POST['purch']))
{
    
    $em3="SELECT P_IMAGE,P_NAME,P_PRICE FROM cart_product";
    $q3=mysqli_query($con1,$em3);
   
    $total=mysqli_num_rows($q3);
    if ($total > 0) {
      while($n3 = mysqli_fetch_assoc($q3))
        {

    $IMAGE=$n3['P_IMAGE'];
    $NAME=$n3['P_NAME'];
    $PRICE=$n3['P_PRICE'];
    $sql51="INSERT INTO cart_product_final (USER_ID,P_IMAGE,P_NAME,P_PRICE) VALUES ('2','$IMAGE','$NAME','$PRICE')";
    $res1=mysqli_query($con1,$sql51);
    
    
}}  header('location: bill.php');
}
for($id=270;$id<=500;$id++){
if(isset($_POST['remo'.$id]))
{
    $url="cart.php";
    $sql5="DELETE FROM cart_product WHERE P_ID='$id'";
    $res=mysqli_query($con1,$sql5);
    echo "<meta http-equiv='refresh' content='0;url=$url'>";
}}
for($i=1;$i<=40;$i++)
{
//$j='abc'.$i;
//$i='29';
//echo 'abc'.$i;

if(isset($_POST['a'.$i]))
{
    $em="SELECT ardi_price,ardi_title,ardi_img1 FROM arduino WHERE ardi_id='$i' AND cat_id='1'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['ardi_img1'];
    $P_NAME=$n['ardi_title'];
    $P_PRICE=$n['ardi_price'];
    insItem();
}

if(isset($_POST['b'.$i]))
{
    $em="SELECT b_price,b_title,b_img1 FROM breadboard WHERE bread_id='$i' AND cat_id='5'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['b_img1'];
    $P_NAME=$n['b_title'];
    $P_PRICE=$n['b_price'];
    insItem();
}

if(isset($_POST['ca'.$i]))
{
    $em="SELECT cap_price,cap_title,cap_img1 FROM capacitor WHERE cap_id='$i' AND cat_id='3'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['cap_img1'];
    $P_NAME=$n['cap_title'];
    $P_PRICE=$n['cap_price'];
    insItem();
}

if(isset($_POST['i'.$i]))
{
    $em="SELECT i_price,i_title,i_img1 FROM inductors WHERE inductor_id='$i' AND cat_id='7'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['i_img1'];
    $P_NAME=$n['i_title'];
    $P_PRICE=$n['i_price'];
    insItem();
}

if(isset($_POST['t'.$i]))
{
    $em="SELECT t_price,t_title,t_img1 FROM transistors WHERE transistor_id='$i' AND cat_id='8'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['t_img1'];
    $P_NAME=$n['t_title'];
    $P_PRICE=$n['t_price'];
    insItem();
}

if(isset($_POST['l'.$i]))
{
    $em="SELECT l_price,l_title,l_img1 FROM led WHERE led_id='$i' AND cat_id='2'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['l_img1'];
    $P_NAME=$n['l_title'];
    $P_PRICE=$n['l_price'];
    insItem();
}

if(isset($_POST['w'.$i]))
{
    $em="SELECT w_price,w_title,w_img1 FROM wires WHERE wire_id='$i' AND cat_id='6'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['w_img1'];
    $P_NAME=$n['w_title'];
    $P_PRICE=$n['w_price'];
    insItem();
}

if(isset($_POST['r'.$i]))
{
    $em="SELECT r_price,r_title,r_img1 FROM resistor WHERE res_id='$i' AND cat_id='4'";
    $q=mysqli_query($con1,$em);
    $n=mysqli_fetch_assoc($q);
    $P_IMAGE=$n['r_img1'];
    $P_NAME=$n['r_title'];
    $P_PRICE=$n['r_price'];
    insItem();
}
}

/*


else{
    $P_IMAGE="";
$P_NAME="....";
$P_PRICE="0";
}
*/
function insItem()
{
    global $P_IMAGE;
    global $P_NAME;
    global $P_PRICE;
    global $con1;
$sql="INSERT INTO cart_product (P_IMAGE,P_NAME,P_PRICE) VALUES ('$P_IMAGE','$P_NAME','$P_PRICE')";
$resy=mysqli_query($con1,$sql);
}

function totalPrice()
{
    global $con1;
    global $P_PRICE;
    $ttotal=0;
    $sql7="SELECT P_PRICE FROM cart_product";
    $ressy=mysqli_query($con1,$sql7);
    $tot=mysqli_num_rows($ressy);
    if ($tot > 0) 
    {
        while($row1 = mysqli_fetch_assoc($ressy))
        {
            $ttotal=$ttotal+$row1["P_PRICE"];
        }
    }   
    echo $ttotal;
   
}



{
    $sql1="SELECT * FROM cart_product";//QUERY
    $result = mysqli_query($con1, $sql1);//DATA
    $total=mysqli_num_rows($result);
    if ($total > 0) {
        // output data of each row
        ?>
    <!------------------------------------------ PHP ENDS -------------------------------------------->    
    
    <table  align="center" class="cart-row  cart-column" cellspacing="10px" cellpadding="20px">
    
    <!------------------------------------------ PHP CONTINUES -------------------------------------------->
        <?php
       
      while($row = mysqli_fetch_assoc($result))
        {
       
           echo "<form action=cart.php method=POST role=form><tr><td><img src=".$row["P_IMAGE"]." width=60%></td><td><h2>". $row["P_NAME"]. "</h2></td><td><h2>Rs." . $row["P_PRICE"]."</h2></td>  
            <td><a >
            <button class=btn-danger type=submit name=remo".$row["P_ID"].">REMOVE</button>
        </a></td></tr>";
            //<input type=button name=remo".$row["P_ID"]."   class=btn-danger value=REMOVE>
       }
       
    } else {
        echo "";
    }
   
    
        
    
 
    
   // $emm="SELECT SUM(P_PRICE) FROM cart_product";
   // $qm=mysqli_query($con1,$emm);
   // $nm=mysqli_fetch_assoc($qm);echo $nm;
   // $ttotal=$nm['P_PRICE'];
    //echo $ttotal;
    
}
?>
<!----------------------------------------------- PHP ENDS ------------------------------------------------->
<?php
    $merin="Confirm Deletion?";
    function purchase_result()
    {
     $sql55="DELETE FROM cart_product";
    $res=mysqli_query($con1,$sql55);
    echo "For Purchase details check your email account";
    }?>

<!--------------------------------------JAVA SCRIPT STARTS--------------------------------------------------   
        <script src="store.js" async>  -->
        <script type = "text/javascript">
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger') 
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {

    var cartItems = document.getElementsByClassName('cart-items')[0]
    var myph= "<?php purchase_result(); ?>";
    alert(myph);
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
   
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    var myphp= "<?php echo $merin; ?>";
    alert(myphp);
    updateCartTotal()
}
/*
function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-item')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('Rs', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = 'Rs' + total
   
}*/
</script>
<!--------------------------------------JAVA SCRIPT ENDS-------------------------------------------------->


</table>
<!------------------------------------CART AND BILLING CONTENTS CONTINUES -------------------------------->
</div>
    <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">Rs.<?php totalPrice();?></span>
    </div>
    <form action="cart.php" method="POST">  
    <button class="btn btn-primary btn-purchase" name="purch" type="submit">Proceed to payment</button></form>
</section>
<!------------------------------------CART AND BILLING CONTENTS ENDS -------------------------------->

</body>

<!------------------------------------FOOTER STARTS--------------------------------------------------->
<footer>
<div class="footer">
  <p><b><br>Contact Us:<br>electro@gmail.com<br></b></p>
</div>
</footer>
<!-------------------------------------FOOTER ENDS-------------------------------------------------->
</html>
