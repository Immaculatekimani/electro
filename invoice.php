<?php 

include("includes/db.php");
include("cartItemsCount.php");
$a=$_POST['Name'];
$b=$_POST['contactno'];
$c=$_POST['address'];

$con1 = mysqli_connect("localhost","root","","ecom_store");



?>
<!DOCTYPE html>
<meta charset="UTF-8"> 
<style>
    h1{
        font-size:40px;
        text-align: center;
    }
    
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
padding:20%;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
button{
  background-color: green;
  color: white;
  padding: 20%
  border: none;
  cursor: pointer;
  top:80%;
  height: 50%;
  width: 10%;
  opacity: 0.9;
  float: center;
}


    
    </style>


<body>
     <h1>INVOICE</h1>
     <h2>Name: <?php echo $a ?> <h2>
     <h2>contact_no: <?php echo $b ?> <h2>
     <h2>address: <?php echo $c ?> <h2>

     <div>
     <table>
     <tr>
     <th>Sr No</th>
     <th>P_NAME</th>
     <th>P_PRICE</th>
     </tr>
     <?php
     $conn = mysqli_connect("localhost","root","","ecom_store");
      if($conn-> connect_error ) {
          die("connection failed" . $connt-> connect_error);
      }
      $sql = "select P_ID,P_NAME,P_PRICE from cart_product";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["P_ID"]. "</td><td>" . $row["P_NAME"] . "</td><td>"
      . $row["P_PRICE"]. "</td></tr>";
      }
      echo "</table>";
      } else { echo "0 results"; }
      $sql1 = "SELECT SUM(P_PRICE) AS value_sum FROM cart_product";
       $result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo "Total: " . $row["value_sum"];
    }
} else {
    echo "0 results";
}
     

      
        $sq="DELETE FROM cart_product";
        $res=mysqli_query($conn,$sq);

      
      $conn->close();
      
     ?>
     
     </table>
     </div>
     <div>
     <button onClick="window.print()" name="Print">Print</button>
     </div>
         
</body>
</html>

