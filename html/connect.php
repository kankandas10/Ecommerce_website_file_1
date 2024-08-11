<?php
$host="localhost";
$username="root";
$pw="";
$db="headphonebuzz";
$conn=mysqli_connect($host,$username,$pw,$db);
if($conn){
 echo"<script>alert('Welcome')</script>";

}
else
{
	
	mysqli_connect_error($conn);
  echo"<script>alert('Not-connected')</script>";
}