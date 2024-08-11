<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inv_style.css">
    <title>Invoice Generator</title>
</head>
<style>
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
</style>
<body>

    <?php
        // include 'phpqrcode/qrlib.php';
        session_start();

        $inv_no   = date('dmYhis');//order_id
        
        $order_date = date('d.m.Y');//order_date
        $name     = $_SESSION['name'];
        $address1 = $_SESSION['add1'];
        $address2 = $_SESSION['add2'];
        $mobile   = "+91 ". $_SESSION['phno'];
        $subtotal = floatval($_SESSION['total']);
        $gst = floatval(($subtotal*18)/100);
        $total = floatval($subtotal+$gst);

        $text = "Invoice number: ".$inv_no."\n"."Total Amount: $".$total."\n"."✔️ Bill Verified by SoundBuzz";
        //QRcode::png($text, 'qr.png'); 
    ?>

    <div class="main-frame">

        <div class="header">
            <img src="logo.png" class="inv_logo">
        </div>

        <div class="in-dt">
            <div><b>Invoice Number: </b> <?php echo $inv_no; ?></div>
            <div><b>Date: </b><?php echo $order_date; ?></div>
        </div>
        
        <div class="addqr">
            <div class="address">
                <h4>Shipping To:</h4>
                <?php echo $name; ?><br>
                <?php echo $address1; ?><br>
                <?php echo $address2; ?><br>
                <?php echo $mobile; ?>
            </div>
            <div class="qr">
                <img src="qr.png">
            </div>
        </div>

        <div class="inv-txt">
            INVOICE
        </div><br>

        <div class="items-table">
            <table>
                <tr>
                    <th class="t_h_1">Sl No.</th>
                    <th class="t_h_3">Order Id</th>
                    <th class="t_h_2">Particulars</th>
                    <th class="t_h_3">Amount</th>
                    
                </tr>
                <?php
                include("..//connectall.php");
                $b=$_SESSION['gmail'];
                // if(isset($_POST['submit'])){
                $q="SELECT * FROM placed_orders WHERE user_gmail ='$b'";
                $r= mysqli_query($conn,$q)
                or die("Query falied:". mysqli_error($conn));
                
                    $n=0;
                    while($row = mysqli_fetch_array($r) )
                    {
                        $n=$n+1;
                        ?>
                        <tbody>
                        <tr>
                            
                            <td class="t_no"><?php echo "$n"."."; ?></td>
                            <td class="t_no"><?php echo $row["Order_id"]?></td>
                            <td class="t_txt"><?php echo $row["product_name"]?></td>
                            <td class="t_no">₹<?php echo $row["product_price"]?></td>
                            
                        
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                  
                
                
               
            </table>
        </div>
        
        <br>

        <div class="subtotal">
            <div class="subtotal_text">Subtotal Amount : &nbsp&nbsp</div>
            <div class="subtotal_amt"><?php echo "₹".$subtotal; ?></div>
        </div>

        <div class="subtotal">
            <div class="subtotal_text">GST (18%) : &nbsp&nbsp</div>
            <div class="subtotal_amt"><?php echo "₹".$gst; ?></div>
        </div>

        <div class="total">
            <div class="total_text"><b>Total Amount : &nbsp&nbsp</b></div>
            <div class="total_amt"><b><?php echo "₹".$total; ?></b></div>
        </div>

        <br>

        <div class="line"></div>

        <!-- signature -->
        <div class="total">
            <div class="blank_sign">
                <b>SoundBuzz Pvt. Ltd.</b> <br>
                D19, Sector-IX, Bidhannagar, Kolkata-15, West Bengal, India. <br>
                Email: <a href="mailto: ecomweb1234@gmail.com">ecomweb1234@gmail.com</a><br>
                Whatsapp or Call: <a href="https://wa.me/918670689886">+91 8670689886</a>
            </div>
            <div class="sign_space">
                <div class="sign">
                    <img src="signature.png">
                </div>
                <div class="sign_text">
                    <b>Director Signature</b> <br>
                    &nbsp SOUNDBUZZ PVT. LTD. &nbsp
                </div>
            </div>
        </div>

        <div class="line"></div>

        <div class="thanks">
            Thank You ❤️
        </div>

    <!-- Print Button -->
    </div>
    <div class="prnt_btn">
        <form method="POST">
        <input type="submit" name="delete" id="print" onClick=Print(); value="Print Invoice"></form>
        
    </div>
 
    <script>
        function Print() {
            document.getElementById('print').style.visibility = 'hidden';
            window.print();
            document.getElementById('print').style.visibility = 'visible';
            window.location.href="index.php";
        }
    </script>


</body>

</html>