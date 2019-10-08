<?php 

include("includes/db.php");
include("includes/resfunc.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resistor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="style/css/web7.css">
    
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

.main {
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
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}
@media (max-width: 535px) {
  .left-column img {
    width: 220px;
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
  width: 65%;
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
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}



</style>
</head>
<body>
   <!-- MAIN (Center website) -->
<div class="main" >
    <div class="navbar">
               
         
             
        <ul>
                <li><font size="5"><a href="#">LOGIN</a></font></li>

        </ul>

       <!-- <div class="shopping">
               <i class="fas fa-shopping-cart"></i>
               
            </div> -->
    </div>   

<hr>
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
 
   
    
    
</body>
<style>
    .footer {
      
      left: 0;
      bottom: 0;
      width: 100%;
      background-color:#007a99;
      color: white;
      text-align: center;
      position:fixed
    }
    </style>
    
    <div class="footer">
      <p>Contact Us:<br>electro@gmail.com<br></p>
    </div>
</html>