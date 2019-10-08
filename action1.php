<?php 

session_start();
    $host = 'localhost';  
    $user = 'root';  
    $password = '';  
    $db_name = 'register';  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    
    
    $u = $_POST['user'];  
    $ps = $_POST['psw'];  
      
        //to prevent from mysqli injection  
       // $username = stripcslashes($username);  
       // $password = stripcslashes($password);  
        //$username = mysqli_real_escape_string($con, $username);  
       // $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from usr_reg where user = '$u' and psw= '$ps'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        
            if($count == 1){  
            $_SESSION['username'] = $u;   
            header ('location: home.php');
           }  
            else if($count == 0 && $u!="admin"){ 
            header ('location: login.html');
                } 
                else{
                    header('location: insert2.php');
                }
           
             
            
?>  