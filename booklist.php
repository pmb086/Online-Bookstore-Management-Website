<?php
require('includes/config.php');
 session_start();

	
	
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	

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
				
				<div id="page">
							<div id="content">
								<div class="post">
									<h1 class="title">
									
									<div class="entry">

<div class="row">
<?php 
$cat=$_GET['subcatid'];
	
$totalq="select * from book where b_subcat='$cat'";
	
$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
while($res=mysqli_fetch_assoc($totalres))
{
echo "<a href='detail.php?id=".$res['b_id']."'><div class='col-md-4' style='border:1px solid #CCC;margin-left:10px;height:250px;padding:10px'>".
$res['b_nm']."</div></a>";
}
?>										
		
		</div>								
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
