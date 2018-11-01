<?php session_start();

	
	$link=mysql_connect("localhost","root","")or die("Can't Connect...");
	
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	
	$totalres=mysql_query($totalq,$link) or die("Can't Execute Query...");
	$totalrow=mysql_fetch_assoc($totalres);
	
	
	$page_per_page=1;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
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
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
				<div id="page">
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
											<?php
												
												/*$k=($page_current_page-1)*$page_per_page;
											
												$query="select *from book where b_subcat='$cat' LIMIT ".$k .",".$page_per_page;
	
												$res=mysql_query($query,$link) or die("Can't Execute Query...");*/
	
												//$count=0;
												while($row=mysql_fetch_assoc($res))
												{
													//if($count==0)		{
														echo '<tr>';
													//}													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													//$count++;							
													
													//if($count==4)		{
														echo '</tr>';
														//$count=0;}
												}
											?>
											
										</table>
										
										<?php
											
											/*if($page_total_page>$page_current_page)
											{
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Next</a>';
											}
											
											if($page_current_page>1)
											{	
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Previous</a>';
											}
											*/
										?>
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
