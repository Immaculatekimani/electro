
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.html');
}
?>






<!DOCTYPE html>
<html>
<head>
    <title>page</title>
    <link rel="stylesheet" type="text/css" href="web6.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<meta charset="UTF-8"> 
<body>
 <main class="main">
 <img src="logo.jpeg"> 
    <div class="navbar">
        
        <div class="container">
        
        
                        <ul>
                        
                               
                                <li><font size="5"><a href="logout.php">LOGOUT</a></font></li>

                        </ul>
              
                        <div class="shopping">
                               <i class="fas fa-shopping-cart"></i>
                            </div>
                        
        </div>
     </div>
     <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="a.png" style="width:100%">
          <div class="text">Caption Text</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="b.png" style="width:100%">
          <div class="text">Caption Two</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="e.png" style="width:100%">
          <div class="text">Caption Three</div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
 <script>
 var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
     
       
        <div class="cardbox">
            
         <div class="card1">
            <a href="resistor.php"> <img src="d.jpg"></a>
                <h6 class="maintitle">RESISTORS</h6>
                <p class="title">All kinds of resistors with different resistance values and diffeent sizes available.</p>
            </div>
            <div class="card2">
                <a href="led1.php"> <img src="led.jpg"></a>
                <h6 class="maintitle">LED</h6>
                <p class="title">led's of all coloursand shapes at cheaper rate.</p>
            </div>
            <div class="card3">
                <a href="cap1.php"> <img src="cap.jpg"></a>
                <h6 class="maintitle">CAPACITORS</h6>
                <p class="title">different sizes of capacitors available in variety.</p>
            </div>
            <div class="card4">
                       <a href="transistor.php"> <img src="trans.jpg"></a>
                                <h6 class="maintitle">TRANSISTORS </h6>
                               <p class="title">Transistors with all values available.</p>
                    
                </div>
                
                <div class="card5">
                        <a href="breadboard.php"> <img src="br.png"></a>
                            <h6 class="maintitle">BREADBOARD</h6>
                            <p class="title">All kinds of breadboards with different sizes and differnt sizes available.</p>
                        </div>
                        <div class="card6">
                                <a href="wires.php"> <img src="w.jpg"></a>
                                    <h6 class="maintitle">WIRES</h6>
                                    <p class="title">All kinds of wires for connectivity available.</p>
                                </div>
                                <div class="card7">
                                        <a href="inductor.php"> <img src="inductor.jpg"></a>
                                            <h6 class="maintitle">INDUCTORS</h6>
                                            <p class="title">All kinds of inductors available.</p>
                                        </div>
                                        <div class="card8">
                              <a href="ardi1.php"> <img src="aurdino.jpg"></a>
                                         <h6 class="maintitle">AURDINO</h6>
                                         <p class="title">best deal for IOT enthusiasists.</p>
                                                
                                                </div>

        </div>
       
       
            
</body>
<div class="footer">
    <p>Connect Us at:<br>electro@gmail.com<br></p>

  </div>
  
   </html>
