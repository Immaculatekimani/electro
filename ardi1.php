<?php 

include("includes/db.php");
include("includes/ardi1func.php");
include("cartItemsCount.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Arduino</title>
    <link rel="stylesheet" type="text/css" href="web7.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="styles.css" /> 
    </head>
<style>

html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
  
}
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}

.main1 {  /* CHANGED */
  max-width: 1200px;
  margin: auto;
  
}
.content {
  background-color: white;
  padding: 10px;
}

@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column,
  .right-column {
    width: 100%;
  }

  .left-column img {
    width: 200px;
    right: 0;
    top: -65px;
    left: initial;
  }
}

@media (max-width: 535px) {
  .left-column img {
    width: 150px;
    top: -85px;
  }
}



.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width : 30%;
  opacity: 0.9;
}
.left-column img {
  width: 100%;
  position: absolute;
  right:200px;
  top:50px;
 
 
}
.left-column {
  margin-left:200px; /* i changed */
  width: 35%;   /* i changed */
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}
.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .2s;
}
.cart-btn:hover {
  background-color: #2BC2FA;
}
.row{
  padding:0px;
  margin-bottom:100px;
  bottom:10px;
}



</style>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
   <!-- MAIN (Center website) -->

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
 <form action="cart.php" method="POST">   
<br>
<hr>
<main class="main1">
<h2>
    Electronic Products
</h2>
                   
           
<div id="content" class="container"><!-- container Begin -->
  <div class="row"><!-- row Begin -->
   
          <?php 
           getPro();
          ?>
      </div><!-- row Finish -->
  </div><!-- container Finish -->
  
<pre>
   








  
    </pre>
</main>
    </form>
</body>
<!------------------------------------FOOTER STARTS--------------------------------------------------->
<footer>
<div class="footer">
  <p><b><br>Contact Us:<br>electro@gmail.com<br></b></p>
</div>
</footer>
<!-------------------------------------FOOTER ENDS-------------------------------------------------->
    
    
</html>