<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up || DreamDrobe</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
   <!-- link--boxicon -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <!-- <div id="bg_cover"> -->
    <div class="reglog_holder">
      <div class="log_form_back">
        
      </div>
      <!-- <div class="left-sign-up">
        <h1>Already Registered?</h1><br>
        <p>Log in and discover a great<br>amount of new opportunities!</p><br><br>
        <center><button><a href="/html/login.HTML">Log In</a></button></center>
      </div> -->
    </div>
    <!-- </div> -->
    <footer class="footer">
    <i class='bx bx-copyright'></i> SOUNDBUZZ PVT. LTD.
    </footer>
  </body>
  <?php
  require("connect.php");
      if(isset($_POST["submit"]))

    {
        $name=$_POST["name"];
        $p=$_POST["password"];
        $cp=$_POST["confirm_password"];
        $e=$_POST["email"];
        $f=$_POST["mobile"];
        if($p == $cp){
            $slquery = "SELECT * FROM user WHERE gmail = '$e'";
            $selectresult = mysqli_query($conn,$slquery);
            if(mysqli_num_rows($selectresult)>0)
            {
                echo"<script>alert('G-mail already exist')</script>";
            }
            else{
                  $sql="INSERT INTO `user`(`name`, `gmail`, `password`,`phno`) VALUES ('$name','$e','$p','$f')";
                  $result=mysqli_query($conn,$sql);
                  if($result){
                    // echo"<script>alert('Registered Succesfully')</script>";
                    header("location:login.php");}
                  else{
                    echo"<script>alert('Error')</script>";}
                }
          }
        else{
            echo"<script>alert('check your password')</script>";
        
              }
    }
    else{
      echo"<script>alert('your response is not working')</script>";
    }


    ?>

</html>