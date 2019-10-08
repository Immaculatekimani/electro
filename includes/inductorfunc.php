<?php 

$db = mysqli_connect("localhost","root","","register");

function getPro()
{
    
    global $db;
    
    $get_products = "select * from inductors order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products))
    {
        
        $pro_id = $row_products['inductor_id'];
        
        $pro_title = $row_products['i_title'];
        
        $pro_price = $row_products['i_price'];
        
        $pro_img1 = $row_products['i_img1'];
        
        $pro_desc = $row_products['i_desc'];
        
       { echo 
        "<main class='container'> 
         <div class='left-column'>
           
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='product_image/$pro_img1'>
                </a>
           
         </div>
         <div class='right-column'>
                <div class='text'>
                <h2>$pro_title</h2>
                
                
                
                $pro_desc<br>
                
                  <h3>  Rs $pro_price<br></h3>
                
                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                        <i class='fa fa-shopping-cart'></i> Add to Cart
                    </a><br>
                </div>
        </div>
        </main>";}
        
    }
    
}

?>