<?php
 include("connect.php"); 
if(isset($_POST['remove'])){
    
    $id=$_POST['id'];
    $delete="DELETE FROM `cart` WHERE id='$id'";
    $deleteq=mysqli_query($conn,$delete)
    or die("Query falied:". mysqli_error($conn));
    header("location:mycart.php");
 
}

?>