
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeadphonebuZZ</title>
    <!-- link--css -->
    <link rel="stylesheet" href="../css/index.css" class="css">
    <!-- link--boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>

    <!-- main conten container -->
    <div class="main">
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
                    <li><div class="dropdown">
                      <button class="dropbtn">Bluetooth<i class='bx bx-chevron-down'></i></button>
                      <div class="dropdown-content">
                      <a href="#1Overhead">Overhead</a>
                      <a href="#2buds">Buds</a>
                      <!-- <a href="#">Link 3</a> -->
                      </div>
                    </div>
                  </li>
                    <li><div class="dropdown">
                      <button class="dropbtn">Wired<i class='bx bx-chevron-down'></i></button>
                      <div class="dropdown-content">
                      <a href="#3Over-ear">Over-Ear</a>
                      <a href="#4In-ear">In-Ear</a>
                      <!-- <a href="#">Link 3</a> -->
                      </div>
                    </div></li>
                    
                    <!-- <li><a href=""></a></li> -->
                    <li><a href="mycart.php">My cart<i class='bx bx-shopping-bag'></i></a></li> 
                </ul>  
            </div>
        </header>
        
        
       <!-- ..........OVERHEAD........... -->
              <!-- specail -->
        <section class="special" id="1Overhead">

          <h1 class="specialh" >Over-HeaD</h1>
          <div class="special-container container">

            <div class="specail-img">
              <p><i>NEW ARRIVAL!</i></p>
              <img src="../image/special-overhead.png" alt="newly launched">
            </div>
            <div class="special-details">
              
              <div class="box">
                
                <h2>Bose Noise Cancelling 700 Bluetooth Wireless Over Ear Headphone, (Black)</h2>
              </div>
              <div class="box">
                <i class='bx bxs-battery-charging' ></i>
                <h3>up to 28 hours of battery life</h3>
                <p>Get up to 28 hours of wireless battery life and time-based power information</p>
              </div>
              <div class="box">
              <i class='bx bx-headphone'></i>
              <h3>Active noice cancellation</h3>
              <p>Personalize your environment with 11 levels of noise cancelling - control distractions or let ambient sound in</p>
              </div>
              <form action="manage.php" method="POST">
              <button type="submit" name="Add-to-cart" class="oh-bag">Add to cart</button>
              <!-- <input type="submit" value="Add to cart" name="" class="oh-bag"> -->
              <input type="hidden" name="Item_name" value="Bose Noise Cancelling 700 Bluetooth Wireless Over Ear Headphone, (Black)">
              <input type="hidden" name="Item_price" value="9580">
              <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')">
              </form>
            </div>
            
          </div>
          </section> 
          <section class="home" >
              <div class="home-content container">
                  <div class="home-img">
                      <img src="../image/over 2.jpg" alt="Sennheiser HD 458 ANC Foldable">
                  </div>
                  <!-- home-text -->
                  <div class="home-text">
                      <h1>Sennheiser HD 458 ANC Foldable (Black & Red)</h1>
                      <p><b>PRICE:</b>&nbsp;₹8,500</p>
                      <p>
                          <table width="70%">
                          <tr>
                            <td><b>Brand</b></td>
                            <td>Sennheiser</td>
                          </tr>
                          <tr>
                            <td><b>Model Name</b></td>
                            <td>HD 458 ANC Foldable</td>
                          </tr>
                            <tr>
                            <td><b>Colour</b></td>
                            <td>Black & Red</td>
                          </tr>
                            <tr>
                            <td><b>Headphones form factor</b></td>
                            <td>Over Ear</td>
                          </tr>
                            </tr>
                            <tr>
                            <td><b>Connector Type</b></td>
                            <td>Wireless</td>
                          </tr>
                        </table>
                      </p>
                      <p><b>About this item:</b></p>
                      <p> <b>1.</b> Active noise cancellation for uninterrupted listening pleasure<br>
                          <b>2.</b> Great wireless sound with deep dynamic bass and high-quality codec support including AAC and AptX Low Latency<br>
                          <b>3.</b> 30-hour battery life, Charging Current - 500 mA max, Charging time - Approx. 2 hours<br>
                          </p>
                          <br>
                          <form action="manage.php" method="POST">
                          <button type="submit" name="Add-to-cart" class="oh1-bag">Add to cart</button>
                          <!-- <input type="submit" value="Add To Bag"  class="oh1-bag"> -->
                          <input type="hidden" name="Item_name" value="Sennheiser HD 458 ANC Foldable (Black & Red)">
                          <input type="hidden" name="Item_price" value="7900">
                          <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')">
                          </form>
                          <!-- <input type="submit" value="Buy Now" id="s1" class="oh2-bag"> -->
                  </div>
              </div>
          </section>
          <section class="home2" >
              <div class="home2-content container">
                  <div class="home2-img">
                      <img src="../image/over3.jpg" alt="Sony WH-CH720N">
                  </div>
                  <!-- home-text -->
                  <div class="home2-text">
                      <h1>Sony WH-CH720N Wireless Over-Ear (Black)</h1>
                      <p><b>PRICE:</b>&nbsp;₹8,500</p>
                      <p>
                          <table width="70%">
                          <tr>
                            <td><b>Brand</b></td>
                            <td>Sony</td>
                          </tr>
                          <tr>
                            <td><b>Model Name</b></td>
                            <td>Sony WH-CH720N</td>
                          </tr>
                            <tr>
                            <td><b>Colour</b></td>
                            <td>Black</td>
                          </tr>
                            <tr>
                            <td><b>Headphones form factor</b></td>
                            <td>Noise Cancellation</td>
                          </tr>
                            </tr>
                            <tr>
                            <td><b>Connector Type</b></td>
                            <td>Wireless</td>
                          </tr>
                        </table>
                      </p>
                      <p><b>About this item:</b></p>
                      <p> <b>1.</b> Sony’s lightest Wireless Noise-cancelling headband ever<br>
                          <b>2.</b> Up to 50-hour battery life with quick charging (3 min charge for up to 1 hour of playback)<br>
                          <b>3.</b> Take noise cancelling to the next level with Sony’s Integrated Processor V1,so you can fully immerse yourself in the music<br>
                          </p>
                          <br>
                          <form action="manage.php" method="POST">
                          <button type="submit" name="Add-to-cart" class="oh1-bag">Add to cart</button>
                          
                          <input type="hidden" name="Item_name" value="Sony WH-CH720N Wireless Over-Ear (Black)">
                          <input type="hidden" name="Item_price" value="8500">
                          <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')">
                          </form>
                          <!-- <input type="submit" value="Buy Now" id="s1" class="oh2-bag"> -->
                  </div>
              </div>
          </section>
          <section class="home3" >
            <div class="home3-content container">
                <div class="home3-img">
                    <img src="../image/over 5.jpg" class="img3" alt="Sony WH-CH720N">

                </div>
                <!-- home-text -->
                <div class="home3-text">
                    <h1>boAt Rockerz 400 Bluetooth On Ear Headphones (Grey/Green)</h1>
                    <p><b>PRICE:</b>&nbsp;₹8,500</p>
                     <p>
                        <table width="70%">
                        <tr>
                          <td><b>Brand</b></td>
                          <td>boAt</td>
                        </tr>
                        <tr>
                          <td><b>Model Name</b></td>
                          <td>Rockerz 400</td>
                        </tr>
                          <tr>
                          <td><b>Colour</b></td>
                          <td>Grey/Green</td>
                        </tr>
                          <tr>
                          <td><b>Headphones form factor</b></td>
                          <td>On Ear</td>
                        </tr>
                          </tr>
                          <tr>
                          <td><b>Connector Type</b></td>
                          <td>Wireless</td>
                        </tr>
                      </table>
                    </p>
                    <p><b>About this item:</b></p>
                    <p> <b>1.</b>With 40mm Drivers get ready to immerse in HD auditory experience with super extra bass to get the day going<br>
                        <b>2.</b> Stay immersed into Nirvana for extended durations with a playtime of up to 8 hours<br>
                        <b>3.</b> Stay connected to your sound via not one but two modes: Bluetooth as well as AUX
                        <br></p>
                        <form action="manage.php" method="POST">
                        <button type="submit" name="Add-to-cart" class="oh1-bag">Add to cart</button>
                        
                        <input type="hidden" name="Item_name" value="boAt Rockerz 400 Bluetooth On Ear Headphones (Grey/Green)">
                        <input type="hidden" name="Item_price" value="3800">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')">
                        </form>
                        <!-- <input type="submit" value="Buy Now" id="s1" class="oh2-bag"> -->
                </div>
            </div>
        </section>
         <!-- ................WIRED............... -->
        <!-- .............OVER-EAR............ -->
        <section class="overear" id="3Over-ear">

          <h1 class="specialh" >Wired</h1>
          
          <!-- <div class="poster">
            
            <img src="../image/Brown Modern New Arrival Poster.png" alt="">
          </div> -->
        <section class="specail-overear container">
          <div class="Special-container container">
            <div class="specail-img">
                <p><i>NEW ARRIVAL!</i> </p>
              <img src="../image/over-ear special3.png" alt="newly launched">
            </div>
            <div class="special-details">
              
              <div class="box">
                
                <h2>ZEBRONICS Zeb-Blitz (Black)</h2><span>₹11,500</span>
              <div class="box">
                <i class='bx bxs-battery-charging' ></i>
                <h3>up to 28 hours of battery life</h3>
                <p>Get up to 28 hours of wireless battery life and time-based power information</p>
              </div>
              <div class="box">
              <i class='bx bx-headphone'></i>
              <h3>Simulated 7.1 Surround Sound</h3>
              <p>USB Gaming Wired On Ear Headphones with Mic with Dolby Atmos</p>
              </div>
              <form action="manage.php" method="POST">
              <button type="submit" name="Add-to-cart" class="oh-bag">Add to cart</button>
              
              <input type="hidden" name="Item_name" value="ZEBRONICS Zeb-Blitz (Black)">
                        <input type="hidden" name="Item_price" value="11500">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')">
              </form>
            </div>
            
          </div>
          </section> 
          <section class="over-ear">
            <div class="overear-contaiiner container">
              <!-- box 1 -->
            <div class="boxx2">
              <img src="../image/over-ear2.png" alt="buds1">
              <div class="overlay2">
                <div class="text">
                  <p>DETAILS:</p>
                  <ul>
                    <li>60 hours of playtime</li>
                    <li>IPX5 water resistance</li>
                    <li>Zen ENC mic</li>
                    <li>low latency gaming</li>
                    <li>Type-C fast charging</li>
                  </ul>
                </div>
              </div>
              <h3>Boult Audio Z40</h3>
              <span>₹1890</span>
              <form action="manage.php" method="POST">
              <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
              
              <input type="hidden" name="Item_name" value="Sennheiser HD 458 ANC Foldable (Black & Red)">
                        <input type="hidden" name="Item_price" value="6900">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')">
                </p>
              </form>
              <!-- <input type="submit" value="Buy Now" id="s1" class="bud2-bag"></p> -->
              
            </div>
            <!-- box 2 -->
            <div class="boxx2">
              <img src="../image/over-ear3.png" alt="buds1">
              <div class="overlay2">
                <div class="text">
                  <p>DETAILS:</p>
                  <ul>
                    <li>60 hours of playtime</li>
                    <li>IPX5 water resistance</li>
                    <li>Zen ENC mic</li>
                    <li>low latency gaming</li>
                    <li>Type-C fast charging</li>
                  </ul>
                </div>
              </div>
              <h3>Sennheiser HD 400s Wired Over The Ear Headphone with Mic (Black)</h3>
              <span>₹1890</span>
              <form action="manage.php" method="POST">
              <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
              
              <input type="hidden" name="Item_name" value="Sennheiser HD 458 ANC Foldable (Black & Red)">
                        <input type="hidden" name="Item_price" value="5890">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p>
              </form>
            </div>
            <!-- box 3 -->
            <div class="boxx2">
              <img src="../image/over-ear4.png" alt="buds1">
              <div class="overlay2">
                <div class="text">
                  <p>DETAILS:</p>
                  <ul>
                    <li>60 hours of playtime</li>
                    <li>IPX5 water resistance</li>
                    <li>Zen ENC mic</li>
                    <li>low latency gaming</li>
                    <li>Type-C fast charging</li>
                  </ul>
                </div>
              </div>
              <h3>Boult Audio Z40</h3>
              <span>₹1890</span>
              <form action="manage.php" method="POST">
              <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
              <input type="hidden" name="Item_name" value="Sennheiser HD 458 ANC Foldable (Black & Red)">
                        <input type="hidden" name="Item_price" value="9000">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p>
              </form>
            </div>
          </div>
        </section>
        </section>
        <!-- -----------BUDS-------------- -->
        <section class="buds" id="2buds">
          <!-- heading -->
          <h2 class="budsh">BuDs</h2>
        <section class="specail-buds"> 
          <div class="buds-container container">
            <div class="buds-text">
              <h2>Sennheiser Momentum True Wireless 3 in Ear Earbuds</h2>
              <span>₹19,998</span>
              <p>Adaptive Noise Cancell  ation - ANC, IPX4, Qi Wireless Charging and 28-Hour Battery Life!</p>
              <form action="manage.php" method="POST">
              <button type="submit" name="Add-to-cart" class="bud-bag">Add to cart</button>
              
              <input type="hidden" name="Item_name" value="Sennheiser Momentum True Wireless 3 in Ear Earbuds">
                        <input type="hidden" name="Item_price" value="19998">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')">
              </form>
            </div>
            <!-- Special-IMAGE -->
            <div class="budspe">
              <img src="../image/special-buds1.1.png" alt="" class="budspe-img">
            </div>
          </div>
        </section>
        <section class="buds">
          <div class="buds-contaiiner container">
            <!-- box 1 -->
          <div class="boxx">
            <img src="../image/buds1.jpg" alt="buds1">
            <div class="overlay">
              <div class="text">
                <p>DETAILS:</p>
                <ul>
                  <li>60 hours of playtime</li>
                  <li>IPX5 water resistance</li>
                  <li>Zen ENC mic</li>
                  <li>low latency gaming</li>
                  <li>Type-C fast charging</li>
                </ul>
              </div>
            </div>
            <h3>Boult Audio Z40</h3>
            <span>₹1890</span>
            <form action="manage.php" method="POST">
            <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
            
            <input type="hidden" name="Item_name" value="Boult Audio Z40">
                        <input type="hidden" name="Item_price" value="1890">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p>
            </form>
          </div>
                      <!-- box 2  -->
          <div class="boxx">
            <img src="../image/buds2.jpg" alt="buds1">
            <div class="overlay">
              <div class="text">
                <p>DETAILS:</p>
                <ul>
                  <li>32 hours of total playtime</li>
                  <li>45ms low latency</li>
                  <li>Type-C fast charging</li>
                  <li>3mm bass drivers</li>
                </ul>
              </div>
            </div>
            <h3>Boult Audio Z25</h3>
            <span>₹1,299.00</span>
            <form action="manage.php" method="POST">
            <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
            <input type="hidden" name="Item_name" value="Boult Audio Z25">
                        <input type="hidden" name="Item_price" value="1299">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p>
            </form>
          </div>
                      <!-- box 3  -->
          <div class="boxx">
            <img src="../image/buds3.jpg" alt="buds1">
            <div class="overlay">
              <div class="text">
                <p>DETAILS:</p>
                <ul>
                  <li>32 hours of battery life.</li>
                  <li>Delivers deep bass!</li>
                  <li>IP65-rated water and sweat proof protection</li>
                  <li>Comfortable stick-closed design.</li>
                </ul>
              </div>
            </div>
            <h3>JBL Wave Beam</h3>
            <span>₹4,999.00</span>
            <form action="manage.php" method="POST">
            <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
            <input type="hidden" name="Item_name" value="JBL Wave Beam">
                        <input type="hidden" name="Item_price" value="4999">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p>
            </form>
          </div>
                      <!-- box 4  -->
          <div class="boxx">
            <img src="../image/buds4.jpg" alt="buds1">
            <div class="overlay">
              <div class="text">
                <p>DETAILS:</p>
                <uL>
                  <li>Secure active fit.</li>
                  <li>IP57-rated water and sweat proof protection!</li>
                  <li>4-microphone technology for clear calls</li>
                  <li>Active Noise Cancellation (ANC)</li>
                </uL>
              </div>
            </div>
            <h3>Jabra Elite 4 Active</h3>
            <span>₹17,228.00</span> 
            <form action="manage.php" method="POST">
            <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
            <input type="hidden" name="Item_name" value="Jabra Elite 4 Active">
                        <input type="hidden" name="Item_price" value="17228">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p>
            </form>
          </div>
                      <!-- box 5  -->
          <div class="boxx">
            <img src="../image/buds5.jpg" alt="buds1">
            <div class="overlay">
              <div class="text">
                <p>DETAILS:</p>
                <ul>
                  <li>Wireless earbuds with 6mm drivers;</li>
                  <li>IPX7 water & sweat resistance</li>
                  <li>up to 20 hours of playback</li>
                  <li>Active noice cancellation (ANC)</li>
                </ul>
              </div>
            </div>
            <h3>Boat Airdopes 441</h3>
            <span>₹5,999.00</span>
            <form action="manage.php" method="POST">
            <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
            <input type="hidden" name="Item_name" value="Boat Airdopes 441">
                        <input type="hidden" name="Item_price" value="5999">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p>
            </form>
          </div>
                      <!-- box 6  -->
          <div class="boxx">
            <img src="../image/buds6.jpg" alt="buds1">
            <div class="overlay">
              <div class="text">
                <p>DETAILS:</p>
                <ul>
                  <li>40 hours of playback time!</li>
                  <li>It has 45 ms ultra-low latency for immersive gaming!</li>
                  <li>ZEN TM Tech Quad mic ENC for audio and calling,</li>
                  <li>IPX5 water resistance.</li>
                </ul>
              </div>
            </div>
            <h3>Boult Audio X30</h3>
            <span>₹1,699.00</span>
            <form action="manage.php" method="POST">
            <p><button type="submit" name="Add-to-cart" class="bud1-bag">Add to cart</button>
            <input type="hidden" name="Item_name" value="Boult Audio X30">
                        <input type="hidden" name="Item_price" value="1699">
                        <input type="hidden" name="order_id" value="date('dmYhis')">
                          <input type="hidden" name="order_time" value="date('d.m.Y')"></p> 
            </form>
          </div>
          </div>
        </section>
        </section>

       
            
          










        <section class="division">
          
        </section>
        <!-- ........fotter....... -->
        <section class="footer container">
          <div class="footer-box">
          <a href="#" class="f-logo"><img src="../image/logo_br.png" alt=""></a>
          </div>
          <div class="footer-box">
            <h2>Back-end Developers</h2>
            <a href="#">Kankan Das</a><br>
            <h3>Contact us <i class='bx bx-phone'></i></h3>
                <a href="mailto: ecomweb1234@gmail.com">ecomweb1234@gmail.com</a>
                Whatsapp or Call: <a href="https://wa.me/918670689886">+91 8670689886</a>
            
          </div>
            <div class="footer-box">
            <h2>Front-end Developers</h2>
            <a href="#">Sudipta Biswas</a>
            <a href="#">Kankan Das</a>
            <a href="#">Krishnendu dey</a>
            <a href="#">Neha Mondal</a>
          </div>
          <div class="footer-box">
            <h2><u>payment</u></h2>
            <a href="#">Return policy</a>
            <a href="#">Refund policy</a>
            <a href="#">Support</a>
            <a href="#">Term of use</a>
          </div>
          <div class="footer-box">
            <h2>Social</h2>
            <div class="social">
              <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
              <a href="#"><i class='bx bxl-twitter' ></i></a>
              <a href="#"><i class='bx bxl-instagram' ></i></a>
              
            </div>
          </div>
        </section>
      </div>
</form>





      
  <!-- scroll-reveal-animation -->
  <script src="https://unpkg.com/scrollreveal"></script>
         <!-- link to JS -->
 <script src="main.js"></script>

</body>

</html>
