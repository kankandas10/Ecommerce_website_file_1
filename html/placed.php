<?php
include("connectall.php");
session_start();
$gmail=$_SESSION['gmail'];
                     $entry="INSERT INTO `placed_orders`(`user_gmail`, `Order_id`, `product_name`, `product_price`, `order_time`) SELECT user_gmail,  Order_id, product_name, product_price, Order_time FROM cart WHERE user_gmail='$gmail' ";
                     $result1=mysqli_query($conn, $entry) or 
                     die(mysqli_error($conn));
                     if($result1){
                     
                        $query="DELETE FROM cart WHERE user_gmail='$gmail'";   
                        $result= mysqli_query($conn,$query)
                        or die("Query falied:". mysqli_error($conn));
                        if($result){
                        header("location:../html/Invoice_Generator_html/invoice.php");
                     }

    
                  }
                     ?>
                     <?php
                     $gmail=$_SESSION['gmail'];
                     $sum="SELECT SUM(product_price) FROM `placed_orders` WHERE user_gmail='$gmail' ";
                     $results = mysqli_query($conn,$sum) or 
                        die(mysqli_error($conn));
                     while($rows = mysqli_fetch_array($results)){
                    
                         $_SESSION['total']=$rows['SUM(product_price)'];
                        
                        
                        
                     }?>
                    