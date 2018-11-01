<ul style="">
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="category.php">Category</a></li>
			<li><a href="all_book.php">Items</a></li>
			<li><a href="all_users.php">Customers</a></li>
			<li class="last"><a href="all_orders.php">Orders</a></li>
			<li class="last"><a href="pricing.php">Pricing</a></li>
			<li class="last"><a href="purchases.php">Purchases</a></li>
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../register.php">Register</a></li>';
				}
			?>
			
		</ul>