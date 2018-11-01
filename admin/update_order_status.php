<?php 
session_start();
require('includes/config.php');
$id=$_GET['sid'];
$q="select * from orders where order_id='$id'";
$res=mysqli_query($conn,$q) or die("Can't Execute Query...");
$res1=mysqli_fetch_array($res);

if(isset($_REQUEST['update']))
{
$s=$_REQUEST['status'];
mysqli_query($conn,"update orders set status='$s' where order_id='$id'");
echo "<script>window.location='all_orders.php'</script>";
}

	?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
</head>
<body>
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="page">
	<div id="content" style="background:#fff">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				<table border="2">
				<tr>
				<td>Select Status</td>
				<td>
				<form method="post">
<select name="status">
<option <?php if($res1['status']=="Booked"){echo "selected";}  ?>>Booked</option>
<option <?php if($res1['status']=="Cancel"){echo "selected";}  ?>>Cancel</option>

<option <?php if($res1['status']=="Processing"){echo "selected";}  ?>>Processing</option>

<option <?php if($res1['status']=="Delivered"){echo "selected";}  ?>>Delivered</option>

<option <?php if($res1['status']=="Returned"){echo "selected";}  ?>>Returned</option>
</select>
				</td>
				</tr>
				<tr>
				<td colspan="2">
				<input type="submit" value="update satesu" name="update"/></td>
				</form>
				</tr>
				</table>
				
			</div>
			
		</div>
		
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
</body>
</html>
