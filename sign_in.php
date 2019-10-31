<?php 
include("cartItemsCount.php");
?>
<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>page</title>
     <link rel="stylesheet" type="text/css" href="web7.css">  
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
     <script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
    
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* ----------------------STYLES FOR SIGN UP PAGE BODY STARTS---------------------------- */ 

.bg-img {
  /* -------The image used------- */
  background-image: url("electronic.jpg");

  min-height: 1150px; /*########*/
 

  /* -------Center and scale the image nicely------ */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 position: relative;  
}

/* -------Add styles to the form container----- */
.container1 {
  position: absolute;
  right: 30%;
  top : 5%;
  margin: 0%;
  max-width: 40%;
  padding: 16px; min-height:80%;
  background-color: white;
}

/* --------Full-width input fields----------- */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus 
 {
  background-color: #ddd;
  outline: none;
}

/* --------Set a style for the continue button------ */
.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
/* -------------continue button-------- */
.btn:hover {
   background-color: red;
  opacity: 0.9;
}
/* -----------log in button--------- */
.btn1:hover {
   color: red;
  opacity: 1;
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
  background-color: rgb(55, 158, 172);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
/* scroll to top button */
#myBtn:hover {
  background-color: #555;
}
/* ----------------------STYLES FOR SIGN UP PAGE BODY ENDS-----------------------*/


</style>

</head>
 
<body>
<!---------------------------------HEADER CONTENTS STARTS--------------------------->
   <main class="main">
        <div class="navbar">
            <div class="iconbar">
            <img src="logo.jpeg" height="100px">
             <a class="loginhead" href="#"></a>
                  <ul>
                          <li><font size="6"><a href="login.php">LOGIN</a></font></li>
                  </ul> 
                <a class="notification" title="Cart" href="cart.php"><span><i class="fa fa-shopping-cart"></i></span>
                  <span class="badge"><?php countCartItems();?></span></a> 
                  <a class="notification" title="Home" href="index1.php" ><i class="fa fa-home"></i></a> 
                </div>
           </div>
       
          </main>  
  <!-------------------------------HEADER CONTENTS ENDS----------------------------------->
       
<!------------------------------SIGN UP FORM CONTENTS STARTS---------------------------->
<div class="bg-img">
  <form action="action.php" method="POST" class="container1">
    <h1>Sign In</h1>
    <p>Suggestions: <span id="txtHint"></span></p>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" onkeyup="showHint(this.value)" required>
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="phno"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="phno" required>
    
    <label for="user"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="user" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password (having 6 characters)" id="myInput" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
        title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
        <input type="checkbox" onclick="myFunc_show_psw()">Show Password<br><br>
    
    <label for="cpsw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password Again" id="myInput1" name="cpsw" required>
    <input type="checkbox" onclick="myFunc_show_cpsw()">Show Password<br><br>

    <button type="submit" class="btn" value="submit"><b>CONTINUE</b></button>

    <h5 ><center>Account Already Exists?<a href="login.php" class="btn1"><u > Log In</u></a></center></h5>

  </form>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
          } else {
            document.getElementById("myBtn").style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

        //to show password
        function myFunc_show_psw() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
//to show confirm password
function myFunc_show_cpsw() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        </script>


<!--------------------------------------SIGN IN FORM CONTENTS ENDS ---------------------------------->
</body>
<!----------------------------------------FOOTER STARTS--------------------------------------->
<footer>
  <div class="footer">
    <p><b><br>Contact Us:<br>electro@gmail.com<br></b></p>
  </div>
  </footer>
  <!--------------------------------------------FOOTER ENDS------------------------------------->
</html>
