<?php
require('includes/config.php');

			$query="delete from orders where order_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_orders.php");

?>