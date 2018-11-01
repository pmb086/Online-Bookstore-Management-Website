<?php session_start();?>

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
	<div id="content" style="background:#fff">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry">
				
				<form action='process_addsubcategory.php' method='POST'>
							<h1 style="color:darkgreen">ADD SUB-CATEGORY </h1>
							<br><br>
							<u style="color:darkgreen">PARENT CATEGORY </u>
									<br>
										<select  name="parent">
											<?php
											
												require('includes/config.php');
					
													$query="select * from category ";
					
													$res=mysqli_query($conn,$query);
													
													while($row=mysqli_fetch_assoc($res))
													{
														echo "<option value='".$row['cat_id']."'>".$row['cat_nm'];
														//PASS ID NOT NAME
													}
					
													mysqli_close($link);
											?>
										</select>
									
									<br>
							<u style="color:darkgreen">SUB-CATEGORY:</u>
									<br><br>
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit'  value='  ADD  '>
									
									<br><br>	
				</form>
				<hr>
				<form action='process_delcategory.php' method='POST'>
							
						
				<form action='process_delsubcategory.php' method='POST'>
						
						<b style="color:darkgreen">DELETE SUB CATEGORY </b>						
							<br>
								<select  name="subcatnm">
									<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
												$qq = "select * from subcat where parent_id=".$row['cat_id'];
												
												$ress = mysqli_query($conn,$qq) or die("wrong delete subcat query..");
												while($roww = mysqli_fetch_assoc($ress))
												{
													echo "<option value='".$roww['subcat_id']."'> ---> ".$roww['subcat_nm'];
												}
												
											}
			
											mysqli_close($link);
									?>
								</select>
						
							
							<input type='submit' value=' DELETE '>
				</form>	
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
