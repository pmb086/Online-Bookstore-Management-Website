<?php session_start();
require('includes/config.php');
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

<div id="page" style="">
	<div id="content" style=" background-color:#fff">
		<div class="post" style="margin-left:100px">
			<h1 class="title" >Add Item</h1>
			<div class="entry" >
				<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
				
						
						
						<b>Category:</b><br>
						<select  name="cat">
								<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
						echo "<option value='".$row['cat_id']."'>".$row['cat_nm'];
											}
											
								?>
						</select>
						<br><br>
						
						<br><b>Book/Movie/Periodical Name:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b>Description:</b><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
						
						<b>Publisher/Director:</b><br>
						<input type='text' name='publisher' size='40'>
						<br><br>
						
						<b>Edition/Release date:</b><br>
						<input type='text' name='edition' size='40'>
						<br><br>
						
						<b>ISBN/Movie code:</b><br>
						<input type='text' name='isbn' size='40'>
						<br><br>
						
						<b>PAGES/ Movie length:</b><br>
						<input type='text' name='pages' size='40'>
						<br><br>
						
						<b>PRICE:</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						
						<br><br>
						
						<input  type='submit'  value='   OK   '  >
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
