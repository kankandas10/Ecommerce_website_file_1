<html>
    <head>
        <title>User Address Update</title>
        <link rel="stylesheet" href="../css/index.css" class="css">
    </head>
<style>
    .remove{
    background-color: transparent;
    border-color: tomato;
    color: tomato;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 18px;
    border-radius: 5px;
}
.remove:hover{
    background-color: tomato;
    color: white;
}
.container{
    padding: 50px;
    box-shadow: 0 5px 8px rgb(182, 177, 177);
    border-radius: 5px;
    width: 80%;
    display: grid;
    grid-template-columns: repeat(1fr);
    column-gap:5rem;
    justify-content: center;
    align-items:center;
}
.details{
    padding: 20px;
   margin-top: 10px;
   margin-bottom: 10px;
}


form input{
  width: 80%;
  outline: none;
  border: 1px solid #fff;
  padding: 12px 20px;
  margin-bottom: 10px;
  border-radius: 20px;
  background:#e4e4e4;
}
input:focus{
  border: 1px solid  rgb(192, 192, 192);
}
.button{
    margin-top: 1.3rem;
}


    </style>
<body>


<?php
include("connectall.php");
session_start();

    $gmail=$_SESSION['gmail'];
    $query="SELECT * FROM cart WHERE user_gmail='$gmail'";
    $result=mysqli_query($conn,$query);
    $n= mysqli_num_rows($result);
    if($n==1)
    {
    //    echo" <script>
    //                 alert(' To see your Address please click myprofile');
    //                 </script>";
    //                 header("location:user.php");
                    echo"<script>
                             alert('Item already Added');

                            window.location.href='user.php';

                            </script>";
    }
    
    else{
        ?>
         <header>
            <div class="nav-container">
                <a href="#" class="logo">
                    <img src="../image/logo_br.png" alt="">
                    <span>SoundBuzZ</span>
                </a>
                <i class='bx bx-menu' id="menu-icon"></i>
                <ul class="navbar">
                    <!--  <li><a href="login.php"> Session_start();  -->
                    <!-- echo$_SESSION['name'] ;?><i class='bx bx-user' ></i></a></li> --> 
                    <li><a href="login.php">LogIn|RegisTer</a></li> 
                     <li><a href="user.php">My profile<i class='bx bx-user' ></i></a></li> 
                    
                    <!-- <li><a href=""></a></li> -->
                    
                </ul>  
            </div>
        </header>
        <section class="special" >
              <div class="container">
                <form action="" method="POST">
                <div class="details"><h1>INPUT YOUR ADDRESS DETAILS:</h1>
                <h2>Please enter your details in this format;</h2> 
                <h3>First Address: "Flat, House No, Company, Apartment, Area, Street, Sector, Village, Landmark;"<br>
                    Second Address: " Pincode, District, State"; </h3>    
                </div>
            <div class="table">        <table>
                <tr>
                    <th>First Address:</th>
                    <td><input type="gmail" name="add1" placeholder="First Address" required></td>
                </tr>

                <tr>
                    <th>Second Address:</th>
                    <td><input type="gmail" name="add2" placeholder="Second Address" required></td>
                </tr>
            </table>
            <div class="button">
            <button type="submit" class="remove">Submit</button>
            <input type="hidden" name="submit" value="submit" ></div></div>
        </form>
        </div>
        </section>
        <?php
        if(isset($_POST["submit"])){
            $add1=$_POST['add1'];
            $add2=$_POST['add2'];
            $submit_query="UPDATE `user` SET `address1`='$add1',`address2`='$add2' WHERE gmail='$gmail'";
            $query_result=mysqli_query($conn,$submit_query);
            if($query_result){
                $q="SELECT * FROM user WHERE gmail='$gmail'";
                $r= mysqli_query($conn,$q)
                or die("Query falied:". mysqli_error($conn));
                while($data = mysqli_fetch_array($r)) {
                session_start();
                
                $_SESSION['add1']=$data['address1'];
                $_SESSION['add2']=$data['address2'];
                 echo"<script>
                alert('Item already Added');

               window.location.href='user.php';

               </script>";
                }
            }
            else{
                die("Query falied:". mysqli_error($conn));
            }
        }
        ?>
    <?php 
    }
    


?>
    </body>
</html>