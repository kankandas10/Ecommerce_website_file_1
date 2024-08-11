<!DOCTYPE html>
<html>
  <?php
  include("connect.php");
  ?>

  <head>
    <title>Login || DreamDrobe</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

  </head>

  <body>
    <!-- <div id="bg_cover"> -->
    <div class="reglog_holder">
      <div class="log_form_back_left">
        <form action class="reglog_form" method="POST">
          <img src="../image/logo_br.png" alt="logo" class="logo" >
          <!-- <h1>Welcome Back!</h1><br> -->
          <p>LogIn to Continue</p>
          
          <input type="email" required name="email" class="form_input_field" placeholder="Email"><br>
          <input type="password" required name="password" class="form_input_field" placeholder="Password"><br><br>
          <input type="submit" value="Login" name="submit" class="form_button">
      
          <div>
           <p> New Here? <a href="register.php" class="link_text">Sign up</a></p>
           <span>Forgot password? <a href="forgot.php" class="forgot">Click Here..</a></span>
          </div>
        </form>
      </div>
      <!-- <div class="left-sign-up">
        <h1>New Here?</h1><br>
        <p>sign up and discover a great<br>amount of new opportunities!</p><br><br>
        <center><button></button></center>
      </div> -->
    </div>
    <!-- </div> -->
    <footer class="footer">
      @ SOUNDBUZZ PVT. LTD.
    </footer>
  </body>
  <?php
  
  if(isset($_POST["submit"])){
    $a=$_POST["email"];
    $b=$_POST["password"];
    $q= "select * from user where gmail='$a' and password='$b' limit 1";
    $r= mysqli_query($conn,$q);
    $n= mysqli_num_rows($r);
    if($n==1)
    {   
        $q="SELECT * FROM user WHERE gmail='$a'";
          $r= mysqli_query($conn,$q)
          or die("Query falied:". mysqli_error($conn));
          while($data = mysqli_fetch_array($r)) {
        session_start();
        $_SESSION['name']=$data['name'];
        $_SESSION['gmail']=$data['gmail'];
        $_SESSION['phno']=$data['phno'];
        $_SESSION['add1']=$data['address1'];
        $_SESSION['add2']=$data['address2'];

        header("location:index.php");}
        
    }
    else{
        echo "CEHECK YOU NAME AND PASSWORD";
    }

}
?>




</html>