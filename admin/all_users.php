<?php 
session_start();
require('includes/config.php');

	$q="select * from user";
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
<td WIDTH='10%' style="color:darkgreen"><b><u>USER ID</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>CUST NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>USERNAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>EMAIL_ID</u></b></TD>
						
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$row['u_id'].'
										<td>'.$row['u_fnm'].'
										<td>'.$row['u_unm'].'
										<td>'.$row['u_email'];
									echo "<td><img src='../$row[b_img]' width='50'/>";
										
										
									echo 	'<td><a href="del_customer.php?sid='.$row['u_id'].'"><img src="images/drop.png" ></a>';	
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
