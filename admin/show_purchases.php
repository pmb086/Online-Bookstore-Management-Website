<?php 
session_start();
require('includes/config.php');
    $dat = $_POST['purchase'];
	$q="select * from orders where date = '$dat'";
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
<TD style="color:darkgreen" WIDTH='50%'><b><u>CUST NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>BOOK NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>QUANTITY</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>RATE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>TOTAL AMOUNT</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>STATUS</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DATE</u></b></TD>										
						</tr>
						<?php
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$row['U_id'].'
										<td>'.$row['book'].'
										<td>'.$row['quantity'].'
										<td>'.$row['rate'];
				echo "<td>".$row['total_amount']."</td>";
				echo "<td>".$row['status']."</td>";
				echo "<td>".$row['date']."</td>";
										
														
												
									
									
									
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
