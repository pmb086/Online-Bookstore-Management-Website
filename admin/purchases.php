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
				
					<form action='show_purchases.php' method='POST' enctype="multipart/form-data">
				        
						<b>Date of Purchase:</b><br>
						<input type='text' name='purchase' placeholder = 'yyyy-mm-dd'>
						<br><br>
						<input  type='submit'  value='   OK   '  >
						
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
