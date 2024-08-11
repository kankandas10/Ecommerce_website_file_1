<?php
include("connectall.php");

$g=$_SESSION['gmail'];
// $query="SELECT count(product_name) FROM cart WHERE user_gmail='$g'";
// $count=mysqli_query($conn,$query);

// $rowcount=mysqli_num_rows($count);
//     $_SESSION['count']=$rowcount;
//     echo"$rowcount";
$sql = "SELECT * from cart where user_gmail='$g'";

$result = mysqli_query($conn, $sql) ;

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    $_SESSION['count']=$rowcount;
    // echo $rowcount;
?>