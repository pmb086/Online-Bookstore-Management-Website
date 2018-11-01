<?php
require('includes/config.php');

			$query="delete from user where U_id =".$_GET['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_users.php");

?>