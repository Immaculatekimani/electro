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
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
.bg-img {
  /* The image used */
  background-image: url("electronic.jpg");
  min-height: 1000px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
}
/* Add styles to the form container */
.fcontainer {
  position: absolute;
  right:25%;
  margin: 10%;
  max-width: 30%;
  padding: 25px; 
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=number], input[type=email] {
  width: 100%;
  padding: 16px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=number]:focus, input[type=email]:focus 
 {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
   background-color: red;
  opacity: 1;
}
.btn1:hover {
   text-decoration-color: red;
  opacity: 0.8;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgb(212, 0, 255);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-color: #555;
}
</style>
 

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

 <div>
 <form action="invoice.php" method="POST"class="fcontainer">
    
    <h1>customers info</h1>
   <label for="user"><b>Name</b></label>
    <input type="text" placeholder="Enter User Name" name="Name" required>
    
    <label for="contact no"><b>contactno</b></label>
    <input type="number" placeholder="Enter contact no"  name="contactno" required>
    
    <label for="address"><b>address</b></label>
    <input type="text" placeholder="Enter address"  name="address" required>
    <button type="Proceed" value="submit"class="btn">Proceed</button>
       
</div>

</body>


    <!-------------------------------------FOOTER ENDS-------------------------------------------------->
    </html>