<!DOCTYPE html>
<?php
include("connectall.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
     <!-- link--css -->
     <link rel="stylesheet" href="../css/index.css" class="css">
    <!-- link--boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
.specail-img img{
    width: 60%;
}
.specail-img {
    text-align: center;
}
.edit{
  padding-left:  30px;
  padding-right: 30px;
  font-size: 20px;
  color: tomato;
  border-color: tomato;
}
.edit:hover{
  color:white;
  background-color: tomato;
}
.special-container{
  display: grid;
    grid-template-columns: repeat(2,1fr);
    column-gap:2rem;
    justify-content: center;
    align-items:center;
  box-shadow: 0 5px 10px var(--hover-color);
  padding: 20px;
  /* border-radius: 5rem; */
  /* width: 1200px; */
  /* column-gap:2rem; */
}
@media(max-width: 684px){
  .special-container{
    grid-template-columns: 1fr;
    padding-left:50px;
    box-shadow: none;

    
  }
}
</style>
<body>
<div class="main">
    <header>
            <div class="nav-container">
                <a href="#" class="logo">
                    <img src="../image/logo_br.png" alt="">
                    <span>SoundBuzZ</span>
                </a>
                <i class='bx bx-menu' id="menu-icon"></i>
                <ul class="navbar">
                    <li><a href="login.php"><?php Session_start(); 
                    echo$_SESSION['name'] ;?><i class='bx bx-user' ></i></a></li>
                    <li><a href="index.php">Home</a></li>
                   
                    
                    <!-- <li><a href=""></a></li> -->
                    <li><a href="mycart.php">My cart(<?php echo $_SESSION['count'];?>)</a></li> 
                </ul>  
            </div>
        </header>
        
        <section class="special">
        <h1 class="specialh" >My Profile</h1>
          <div class="special-container container">
            <div class="specail-img">
                <!-- <p><i>NEW ARRIVAL!</i></p> -->
                <img src="../image/33777574_6700_5_05-PhotoRoom.png-PhotoRoom.png" alt="newly launched">
                </div>
            <div class="special-details"> 
              
              <div class="box">
              <i class='bx bx-user-circle'></i>
                <h3>Name:&nbsp; <?php echo $_SESSION['name']?></h3>
                <h3>Gmail:&nbsp; <?php echo $_SESSION['gmail']?></h3>
                <h3>phone no:&nbsp; <?php echo $_SESSION['phno']?></h3>
                
              </div>
              <div class="box">
              <i class='bx bx-home-alt'></i>
                <h2>Address:</h2>
                <h3> <?php echo $_SESSION['add1'],"<br>". $_SESSION['add2']?></h3>
   
              </div>
              <form action="user_back.php" method="POST">
              <button type="submit"  class="edit">UpDate</button>
              <input type="hidden" name="update">
              <!-- <input type="submit" value="Add to cart" name="" class="oh-bag"> -->
              
              
              </form>
            </div>
            
          </div>
        </section>



    </div>
    <script src="main.js"></script>
</body>
</html>