<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycart</title>
    <link rel="stylesheet" href="../css/index.css" class="css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<style>
    .background{
        
        z-index: -1;
        position: absolute;
        opacity: 0.6;
        width: 100%;
    }
    .fetch{
        margin-left: 4rem;
       
    }
    .total{
        margin-left: 4rem;
    }
    .data_table{
        
        text-align: center;
        margin-left: 10rem;
    }
    .data2_table{
        text-align: center;
        margin-left: 10rem;
    }
table {
  border-collapse: collapse;
  width: 75%;
  
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
.data2_table{
    margin-top: 4rem;
}
.remove{
    background-color: transparent;
    border-color: tomato;
    color: tomato;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 14px;
}
.remove:hover{
    background-color: tomato;
    color: white;
}
.fetch{
    box-shadow: 0 5px 8px rgb(182, 177, 177);
    padding: 20px;
    width: 80%;
}
.total{
    box-shadow: 0 5px 8px rgb(182, 177, 177);
    padding: 20px;
    width: 80%;
}
.total p{
font-size: 20px;
}
@media(max-width: 684px){
    .fetch{
        box-shadow: none;
    }
    .table{
        box-shadow: none;
    }
}


    </style>
<body>
<!-- <img src="../image/background-cart.jpg" class="background"> -->
<header>
            <div class="nav-container">
                <a href="#" class="logo">
                    <img src="../image/logo_br.png" alt="">
                    <span>SoundBuzZ</span>
                </a>
                <i class='bx bx-menu' id="menu-icon"></i>
                <ul class="navbar">
                    <li><a href="user.php"><?php Session_start(); 
                    echo$_SESSION['name'] ;?><i class='bx bx-user' ></i></a></li>
                    <!-- <li><a href=""></a></li> -->
                    <li><a href="index.php">Home</a></li> 
                   
                    
                    <!-- <li><a href=""></a></li> -->
                    <li><a href="mycart.php">My cart(<?php include("count.php"); echo $_SESSION['count'];?>)</a></li> 
                    <li><form method="post"><button type="submit" name="log_out" class="dropbtn">Logout</button></form></li> 
                </ul>  
            </div>
        </header>
        <section class="cart_data">
            
            <h1 class="specialh" >MY CART</h1>
            <div class="fetch">
                
                <h1>Your Cart list:</h1>
                
                
                <?php
                include("connectall.php");
                $b=$_SESSION['gmail'];
                // if(isset($_POST['submit'])){
                $q="SELECT * FROM cart WHERE user_gmail ='$b'";
                $r= mysqli_query($conn,$q)
                or die("Query falied:". mysqli_error($conn));
                echo "<table>";
                echo "<tr>";
                echo " 
                        <th>User Name</th>
                        <th>User Gmail</th>
                        <th>Product Name</th>
                        <th>PRICE</th>";
                echo"</tr>";
                    while($row = mysqli_fetch_array($r) )
                    {
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row["user_name"]?></td>
                            <td><?php echo $row["user_gmail"]?></td>
                            <td><?php echo $row["product_name"]?></td>
                            <td>₹<?php echo $row["product_price"]?></td>
                            <!--  echo $row["Order_id"]?>
                             echo $row["Order_time"]?> -->
                            <td><form action='delete.php' method='post'>
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <input type='submit' name="remove" value="remove" class="remove">
                                    
                                    </form></td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    echo"</table>";
                    
                ?>
            </div>
        </section>  
        <section class="total-section">
            <?php
                     $gmail=$_SESSION['gmail'];
                     $sum="SELECT SUM(product_price) FROM `cart` WHERE user_gmail='$gmail' ";
                     $results = mysqli_query($conn,$sum) or 
                        die(mysqli_error($conn));
                     while($rows = mysqli_fetch_array($results)){?>
                    
                        <div class="total"><h2> Your Subtotal:</h2><?php echo "₹".  $rows['SUM(product_price)'] ; $_SESSION['total']=$rows['SUM(product_price)'];?>
                        <P class="buy">Buy Now: &nbsp;<form action="placed.php" method="post">
                        <button type="submit" name="Buy" onclick="order_alert()" class="remove">Buy Now</button></form>
                        
                        </div>
                        <?php
                     }?>
        </section>






<script src="main.js"></script>
</body>
<?php
if(isset($_POST['log_out'])){
    session_destroy();
  header("location:index.php");  
}

?>
<script>
   function order_alert(){
    window.alert("Order suceessfully..");
    }
</script>

</html>