<?php
session_start();
include("connect.php");
$a=$_SESSION['name'];
$b= $_SESSION['gmail'];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add-to-cart']))
    {  
      $q= "select * from user where gmail='$b' limit 1";
      $r= mysqli_query($conn,$q);
      $n= mysqli_num_rows($r);
      if($n==1)
      {
        $pn=$_POST['Item_name'];
        $pp=$_POST['Item_price'];
        $oi=date('dmYhis');
        $ot=date('d.m.Y');

        $upload="INSERT INTO cart(`user_name`, `user_gmail`, `product_name`, `product_price`,`Order_id`,`Order_time`) VALUES ('$a','$b','$pn','$pp','$oi','$ot')";
          $result= mysqli_query($conn,$upload);
          if($result){
            echo"<script>
                    alert('Item Added');
                    </script>";
                    header("location:mycart.php");
                  }
            else{
              echo"<script>alert('Error')</script>";}
          
      }
      else{
        echo"<script>alert('Unknown Idendity')</script>";
          }
       
                  
                  }}


                  echo"<a href='index.php'>Back</a>";
                  ?>

        // if(isset($_SESSION['cart']))
        // {
        //    $myitems=array_column($_SESSION['cart'],'Item_name');
        //     if(in_array($_POST['Item_name'] || $_POST['Item_price'],$myitems))//specific array search
        //     {
        //         echo"<script>
        //         alert('Item already Added');
        //         window.location.herf='index.php';
        //         </script>";
                
        //     }
        //     // else{
        //     // $count=count($_SESSION['cart']);
        //     // $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'Item_price'=>$_POST['Item_price'],'Quantity'=>1);
        //     // print_r($_SESSION['cart']);
        //     //         echo"<script>
        //     //         alert('Item Added');
        //     //         window.location.herf='index.php';
        //     //         </script>";
        //     // }
        // }
        // else{
        //     $count=count($_SESSION['cart']);
        //     $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'Item_price'=>$_POST['Item_price'],'Quantity'=>1);
        //     //print_r($_SESSION['cart']);
        //             echo"<script>
        //             alert('Item Added');
        //             window.location.herf='index.php';
        //             </script>";
        //     }
        //     // $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Item_price'=>$_POST['Item_price'],'Quantity'=>1);
        //     // print_r($_SESSION['cart']);
        //     // echo"<script>
        //     //     alert('Item Added');
        //     //     window.location.herf='index.php';
        //     //     </script>";
        // }
    
  


