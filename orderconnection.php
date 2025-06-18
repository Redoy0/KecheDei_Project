<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orderdetails";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn)
    {
       // echo "Connection Okey";
    }
    else
    {
        echo "Connection Failed".mysqli_connect_error();
    }
?>
 <!-- <?php 
    //include("orderconnection.php");
   
    
    $itemType //= $_POST[//'itemType'];
    $serviceType //= $_POST[//'serviceType'];
    $specialInstructions// = $_POST[//'specialInstructions'];
    $pickupDate//= $_POST[//'pickupDate'];
    
   
      
      $query// = "INSERT INTO order_now values('$itemType','$serviceType','$specialInstructions')";
      $data //= mysqli_query($conn,$query);
     // if ($data) {
      //echo "<script>alert('Data Inserted');</script>";
      }
     // else
      {
      
       // echo "Data Insertion failed";
      }
    
?>  -->