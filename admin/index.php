<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
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


<div id="page">
	<div id="content">
		<div class="post">
			<h1 class="title">Welcome to Admin .....</h1>
			<div class="entry">
				Entry...
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
