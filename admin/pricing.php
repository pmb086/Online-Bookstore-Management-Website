<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
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
				
					<form action='update_prices.php' method='POST' enctype="multipart/form-data">
				
						Enter "1" for Book<br>
						Enter "2" for Movie<br> 
						Enter "3" for Periodical<br> 
						<b>Category:</b><br>
						<input type='text' name='category' size='3'>
						<br><br>
						<b>Discount:</b><br>
						<input type='text' name='discount' size='100'>
						<br><br>
						<input  type='submit'  value='Update'  >
						
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
