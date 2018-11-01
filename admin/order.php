<?php session_start();
require('includes/config.php');
?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
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
							<div id="content">
								<div class="post">
									<h1 class="title">Order Details</h1>
									
									<div class="entry" >
	
	<table class="table table-border table-hover table-condensed">
  <tr class="success">
    <th scope="col">Sr No</th>
    <th scope="col">Category</th>
    <th scope="col">Book Name</th>
    <th scope="col">Quantity</th>
    <th scope="col">Rate</th>
    <th scope="col">Total Amount</th>
    <th scope="col">Date</th>
  </tr>
  <?php
 $i=1;  
$unm= $_SESSION['unm']; 
$q=mysqli_query($conn,"select * from orders where U_id='$unm'");
 while($res=mysqli_fetch_array($q))
 {
@$total+=$res['total_amount']; 
 ?>

  <tr class="danger">
    <td><?php echo $i; $i++; ?></td>
    <td><?php echo $res['category']; ?></td>
    <td><?php echo $res['book']; ?></td>
    <td><?php echo $res['quantity']; ?></td>
    <td><?php echo $res['rate']; ?></td>
    <td><?php echo $res['total_amount']; ?></td>
    <td><?php echo $res['date']; ?></td>
  </tr>
 
 <?php 
 }
  ?>
<tr>
<td colspan="4">&nbsp;</td>
<td colspan="3" class="info"><strong>Total </strong><?php echo $total; ?></td>
</tr>
</table>
								
									
									</div>
									
								</div>
								
							</div>
						<div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
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
