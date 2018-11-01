<?php 
session_start();
require('includes/config.php');

	$q="select * from orders";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:5px;border:2px solid gray}
			td{padding:2px}
		</style>
</head>
<body>
<div id="header">
	<div id="menu">
		<?php
		error_reporting(1);
			include("includes/menu.inc.php");
		?>
	</div>
</div>

<div id="page">
	<div id="content" style="background:#fff;">
		<div class="post" style="margin-left:0px">
			<div class="entry" style="margin-left:0px">
				
					<table border='1' WIDTH='100%'>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>CUST NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>BOOK NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>QUANTITY</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>RATE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>TOTAL AMOUNT</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>STATUS</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DATE</u></b></TD>				
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>UPDATE<BR />STATUS</u></b></TD>							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['U_id'].'
										<td>'.$row['book'].'
										<td>'.$row['quantity'].'
										<td>'.$row['rate'];
				echo "<td>".$row['total_amount']."</td>";
				echo "<td>".$row['status']."</td>";
				echo "<td>".$row['date']."</td>";
										
										
									echo 	'<td><a href="delete_order.php?id='.$row['order_id'].'"><img src="images/drop.png" ></a>
									
<td><a href="update_order_status.php?sid='.$row['order_id'].'">Update</a>									
									
									
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
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
