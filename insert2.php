<?php 

include("includes/db.php");
include("cartItemsCount.php");

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    
    <link rel="stylesheet" type="text/css" href="web7.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
   
    <link rel="stylesheet" href="font-awesome.min.css">
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
  background-image: url("blue2.jpg");

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
  right: 25%;
  margin: 6%;
  max-width: 35%;
  padding: 16px; 
  background-color:white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 9px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus 
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


<style>
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
select {

  
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
  
}

</style>
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
<div class="bg-img">
<form  method="POST" class="fcontainer" enctype="multipart/form-data" action="">
    <h1>Admin Page</h1>
    <label for="title"><b>Product Title</b></label>
    <input type="text" placeholder="Title" name="product_title" required>
    <label for="category"><b>Product Category</b></label><br>
    
    <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              <option> Select a Category Product </option>
                              <?php 
                              $get_p_cats = "select * from product_category";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  $p_cat_id = $row_p_cats['p_cat_id'];
                                  $p_cat_title = $row_p_cats['p_cat_title'];
                                  echo "
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  ";
                                  }
                              ?>
    </select>
   <br> <label for="cat"><b> Category</b></label><br>
    
    <select name="cat" class="form-control"><!-- form-control Begin -->
                              <option> Select a Category </option>
                              <?php 
                              $get_cat = "select * from category";
                              $run_cat = mysqli_query($con,$get_cat);
                              while ($row_cat=mysqli_fetch_array($run_cat))
                              {
                                  $cat_id = $row_cat['cat_id'];
                                  $cat_title = $row_cat['cat_title'];
                                  echo "
                                  <option value='$cat_id'> $cat_title </option>
                                  ";
                                  
                              }
                              ?>
    </select><!-- form-control Finish --> 
   <br><label for="image"><b>Product Image</b></label><br>
    <input type="file"  name="product_img1"   required><br>
    <label for="price"><b>Product Price</b></label>
    <input type="text" placeholder="Enter Price" name="product_price" required>  
    <label for="keyword"><b>Product Keywords</b></label>
    <input type="text" placeholder="Enter Keyword" name="product_keyword" required>   
    <label for="description"><b>Product Description</b></label><br>
     
    <textarea name="product_desc" cols="49" rows="6" class="form-control" required></textarea> <br>
    <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">  
</form>

    

     
<script>tinymce.init({ selector:'textarea'});</script>
</div>
</body>
<style>
    .footer {
      
      left: 0;
      bottom: 0;
      width: 100%;
      background-color:#007a99;
      color: white;
      text-align: center;
    }
    </style>
    <!------------------------------------FOOTER STARTS--------------------------------------------------->
<footer>
<div class="footer">
  <p><b><br>Contact Us:<br>electro@gmail.com<br></b></p>
</div>
</footer>
<!-------------------------------------FOOTER ENDS-------------------------------------------------->
</html>


<?php 

if(isset($_POST['submit']))
    
{
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keyword = $_POST['product_keyword'];
    $product_desc = $_POST['product_desc'];
    $product_img1 = $_FILES['product_img1']['name'];
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_image/$product_img1");
    if($cat=="1")
    {
    $insert_ardi = "insert into arduino (a_cat_id,cat_id,date,ardi_title,ardi_img1,ardi_price,ardi_keyword,ardi_desc) 
    values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
    $run_product = mysqli_query($con,$insert_ardi);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
    else if($cat=="2")
    {
        $insert_led = "insert into led (l_cat_id,cat_id,date,l_title,l_img1,l_price,l_keyword,l_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
        $run_product = mysqli_query($con,$insert_led);
        
    if($run_product){
            
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
    else if($cat=="3")
    {
        $insert_cap = "insert into capacitor(c_cat_id,cat_id,date,cap_title,cap_img1,cap_price,cap_keyword,cap_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
        $run_product = mysqli_query($con,$insert_cap);
        
    if($run_product){
            
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
    else if($cat=="4")
    {
        $insert_res = "insert into resistor(r_cat_id,cat_id,date,r_title,r_img1,r_price,r_keyword,r_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
        $run_product = mysqli_query($con,$insert_res);
        
    if($run_product){
            
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
    else if($cat=="5")
    {
        $insert_res = "insert into breadboard(b_cat_id,cat_id,date,b_title,b_img1,b_price,b_keyword,b_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
        $run_product = mysqli_query($con,$insert_res);
        
    if($run_product){
            
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
    else if($cat=="6")
    {
        $insert_res = "insert into wires(w_cat_id,cat_id,date,w_title,w_img1,w_price,w_keyword,w_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
        $run_product = mysqli_query($con,$insert_res);
        
    if($run_product){
            
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
    else if($cat=="7")
    {
        $insert_res = "insert into inductors(i_cat_id,cat_id,date,i_title,i_img1,i_price,i_keyword,i_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
        $run_product = mysqli_query($con,$insert_res);
        
    if($run_product){
            
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
    else if($cat=="8")
    {
        $insert_res = "insert into transistors(t_cat_id,cat_id,date,t_title,t_img1,t_price,t_keyword,t_desc) 
        values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_price','$product_keyword','$product_desc')";
        $run_product = mysqli_query($con,$insert_res);
        
    if($run_product){
            
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('insert2.php','_self')</script>";
                    }
    }
}
?>