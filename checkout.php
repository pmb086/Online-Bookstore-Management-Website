<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 error_reporting(1);
 
require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{

	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";

	
$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	
	
	
$unm=$_SESSION['unm'];
	
foreach($_SESSION['cart'] as $id=>$x)
{	
echo $x['cat']." ".$x['nm']." ".$x['qty']." ".$id." ".$x['rate'];
$tot = $tot + ($x['qty']*$x['rate']);
echo $tot;

$query="insert into orders values('','$unm','".$x['cat']."','".$x['nm']."','".$x['qty']."','".$x['rate']."','".$tot."','Booked',now())";

mysqli_query($conn,$query);

}
	
	unset($_SESSION['cart']);
	header("location:payment_details.php");
	
	}


?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div>   
		
      <div  class="form">
    		<form id="contactform" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
                
                <p class="contact"><label for="username">Postal Code</label></p> 
    			<input id="pc" name="pc" placeholder="201001" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="delhi"> 
                <p class="contact"><label for="state">State</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder="delhi"> 
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>