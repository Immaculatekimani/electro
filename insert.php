<?php


if(isset($_POST['submit']))
{
    $con=mysqli_connect('localhost','root','');
    if(!$con)
    {
        echo 'NOT CONNECTED TO SERVER';
    }

    if(!mysqli_select_db($con,'tutorial'))
    {
        echo 'DATABASE NOT SELECTED';
    }


   $Name= $_POST["username"];
   $Email= $_POST["email"];

    $sql="INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";

    if (!mysqli_query($con,$sql))
    {
        echo 'NOT INSERTED';
    }

    else
    {
        echo 'INSERTED';
    }
   
}
    
    ?>